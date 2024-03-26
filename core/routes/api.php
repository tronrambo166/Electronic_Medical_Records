<?php

use App\Http\Controllers\Api\SendMoneyController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\User\AddBalanceController;
use App\Http\Controllers\Api\User\Auth\ForgotController;
use App\Http\Controllers\Api\User\Auth\LoginController;
use App\Http\Controllers\Api\User\AuthorizationController;
use App\Http\Controllers\Api\User\BeneficiaryController;
use App\Http\Controllers\Api\User\MoneyOutController;
use App\Http\Controllers\Api\User\PickUpOrderController;
use App\Http\Controllers\Api\User\SendMeServicesController;
use App\Http\Controllers\Api\User\ServicesController;
use App\Http\Controllers\Api\User\SiteController;
use App\Http\Controllers\Gateway\Stripe\ProcessController;
use App\Http\Controllers\Api\User\UserController;
use App\Http\Helpers\ResponseHelper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('unauthenticate',function(){

    $message = ['error'=>['Unauthorized']];
    return ResponseHelper::unauthorized($data = null, $message);


})->name('api.unauthenticate');
Route::post('stripe/api', [ProcessController::class,'ipnApi'])->name('ipn.api.Stripe');
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    return "Clear Cache";
});

Route::prefix('user')->group(function(){
    Route::post('login',[LoginController::class,'login']);
    Route::post('register',[LoginController::class,'register']);
    //forgot password//
    Route::post('forgot/password', [ForgotController::class,'sendCodeToEmail']);
    Route::post('otp/verify', [ForgotController::class,'verifyCode']);
    Route::post('password/reset', [ForgotController::class,'resetPassword']);

    Route::middleware(['api_:api'])->group(function(){
        Route::get('logout', [LoginController::class,'logout']);
         //resend-verify
         Route::post('resend-code', [AuthorizationController::class,'sendMailCode']);
         Route::post('email-verify', [AuthorizationController::class,'mailVerify']);
         Route::middleware(['CheckStatusApiUser'])->group(function () {

            Route::get('dashboard', [UserController::class,'dashboard']);
            //profile
            Route::get('profile-view', [UserController::class,'profile']);
            Route::post('profile-update', [UserController::class,'submitProfile']);
            Route::post('change-password', [UserController::class,'changePassword']);

            //Add Balance
            Route::prefix('add/balance')->group(function () {
                Route::get('/',[AddBalanceController::class,'addBalance']);
                Route::post('insert',[AddBalanceController::class,'addBalanceInsert']);
                Route::post('confirmed',[AddBalanceController::class,'addBalanceConfirm']);
                Route::get('manual',[AddBalanceController::class,'manualConfirm']);
                Route::post('manual/confirmed',[AddBalanceController::class,'manualUpdate']);
                Route::get('logs',[AddBalanceController::class,'logs'])->name('log');
            });
            Route::name('moneyout.')->prefix('moneyout')->group(function () {
                Route::get('/',  [MoneyOutController::class,'moneyOut']);
                Route::post('insert',  [MoneyOutController::class,'moneyOutInsert']);
                Route::get('preview',  [MoneyOutController::class,'moneyoutPaymentPreview']);
                Route::post('confirmed',  [MoneyOutController::class,'moneyoutPaymentConfirmed']);
                Route::get('transactions',  [MoneyOutController::class,'moneyOutLogs']);
            });



            //kyc
            Route::get('kyc', [UserController::class,'kycForm']);
            Route::post('fillup/kyc', [UserController::class,'kycFormSubmit']);

            Route::get('transaction/logs',[TransactionController::class,'transactionLogs']);


         });


    });
    Route::get('get-app',  [UserController::class,'getApp']);

});



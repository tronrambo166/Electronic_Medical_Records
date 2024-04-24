<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DueDiligenceController as AdminDueDiligenceController;
use App\Http\Controllers\Admin\EmailMethodController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\GeneralSettingController;
use App\Http\Controllers\Admin\RemoteVipController as AdminRemoteVipController;
use App\Http\Controllers\Admin\UserCareController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController as AuthLoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\DueDiligenceController;
use App\Http\Controllers\RemoteVipController;
use App\Http\Controllers\SiteController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\UserPropertyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [LoginController::class,'showLoginForm'])->name('login');
        Route::post('/attempt-login', [LoginController::class,'login'])->name('login-attempt');
        Route::get('logout',  [LoginController::class,'logout'])->name('logout');
     Route::middleware('admin')->group(function () {
        Route::get('dashboard',[AdminController::class,'dashboard'])->name('dashboard');
        Route::get('profile',[AdminController::class,'profile'])->name('profile');
        Route::post('profile',[AdminController::class,'profileUpdate'])->name('profile.update');
        Route::get('password',[AdminController::class,'password'])->name('password');
        Route::post('password',[AdminController::class,'passwordUpdate'])->name('password.update');
        // Users Manager
        Route::get('users', [UserCareController::class,'allUsers'])->name('users.all');
        Route::get('users/active',  [UserCareController::class,'activeUsers'])->name('users.active');
        Route::get('users/email/unverified',  [UserCareController::class,'emailUnverifiedUsers'])->name('users.email.unverified');
        Route::get('users/kyc/unverified',  [UserCareController::class,'kycUnVerifiedUsers'])->name('users.kyc.unverified');
        Route::get('users/banned',  [UserCareController::class,'bannedUsers'])->name('users.banned');
        Route::get('users/with-balance',  [UserCareController::class,'usersWithBalance'])->name('users.with.balance');

        Route::get('users/{scope}/search', [UserCareController::class,'search'])->name('users.search');
        Route::get('user/detail/{id}', [UserCareController::class,'detail'] )->name('users.detail');
        Route::post('user/update/{id}',  [UserCareController::class,'update'])->name('users.update');
        Route::post('user/add-sub-balance/{id}',  [UserCareController::class,'addSubBalance'])->name('users.add.sub.balance');
        Route::get('user/send-email/{id}',  [UserCareController::class,'showEmailSingleForm'])->name('users.email.single');
        Route::post('user/send-email/{id}',  [UserCareController::class,'sendEmailSingle'])->name('users.email.single');

        Route::get('users/send-email', [UserCareController::class,'showEmailAllForm'])->name('users.email.all');
        Route::post('users/send-email', [UserCareController::class,'sendEmailAll'])->name('users.email.send');

        Route::name('diligence.')->prefix('due/diligence')->group(function () {
            Route::get('list', [AdminDueDiligenceController::class,'deuList'])->name('list');
            Route::post('approved', [AdminDueDiligenceController::class,'deuApproved'])->name('approved');
            Route::post('rejected', [AdminDueDiligenceController::class,'dueRejected'])->name('rejected');
        });
        Route::name('remotevip.')->prefix('request/remote/vip')->group(function () {
            Route::get('list', [AdminRemoteVipController::class,'remoteVipList'])->name('list');
            Route::get('details/{id}', [AdminRemoteVipController::class,'remoteVipDetails'])->name('details');
        });

         // General Setting
        Route::get('general-setting',[GeneralSettingController::class,'index'])->name('setting.index');
        Route::post('general-setting', [GeneralSettingController::class,'update'])->name('setting.update');
        Route::get('optimize', [GeneralSettingController::class,'optimize'])->name('setting.optimize');
        // Logo-Icon
        Route::get('setting/logo-icon', [GeneralSettingController::class,'logoIcon'])->name('setting.logo.icon');
        Route::post('setting/logo-icon', [GeneralSettingController::class,'logoIconUpdate'])->name('setting.logo.icon');

        //Cookie
        Route::get('cookie',[GeneralSettingController::class,'cookie'])->name('setting.cookie');
        Route::post('cookie-update',[GeneralSettingController::class,'cookieSubmit'])->name('setting.cookie.update');

        // Email Setting
        Route::get('email-template/global', [EmailMethodController::class,'emailTemplate'])->name('email.template.global');
        Route::post('email-template/global', [EmailMethodController::class,'emailTemplateUpdate'])->name('email.template.global.update');
        Route::get('email-template/setting',  [EmailMethodController::class,'emailSetting'])->name('email.template.setting');
        Route::post('email-template/setting',  [EmailMethodController::class,'emailSettingUpdate'])->name('email.template.setting');
        Route::get('email-template/index',  [EmailMethodController::class,'index'])->name('email.template.index');
        Route::get('email-template/{id}/edit',  [EmailMethodController::class,'edit'])->name('email.template.edit');
        Route::post('email-template/{id}/update', [EmailMethodController::class,'update'] )->name('email.template.update');
        Route::post('email-template/send-test-mail', [EmailMethodController::class,'sendTestMail'])->name('email.template.test.mail');


        // SEO
        Route::get('seo', [FrontendController::class,'seoEdit'])->name('seo');
        // Frontend
        Route::name('frontend.')->prefix('frontend')->group(function () {
            Route::get('templates', 'FrontendController@templates')->name('templates');
            Route::post('templates', 'FrontendController@templatesActive')->name('templates.active');
            Route::get('frontend-sections/{key}', [FrontendController::class,'frontendSections'])->name('sections');
            Route::post('frontend-content/{key}', [FrontendController::class,'frontendContent'])->name('sections.content');
            Route::get('frontend-element/{key}/{id?}', [FrontendController::class,'frontendElement'])->name('sections.element');
            Route::post('remove', [FrontendController::class,'remove'])->name('remove');
            // Page Builder
            Route::get('manage-pages', 'PageBuilderController@managePages')->name('manage.pages');
            Route::post('manage-pages', 'PageBuilderController@managePagesSave')->name('manage.pages.save');
            Route::post('manage-pages/update', 'PageBuilderController@managePagesUpdate')->name('manage.pages.update');
            Route::post('manage-pages/delete', 'PageBuilderController@managePagesDelete')->name('manage.pages.delete');
            Route::get('manage-section/{id}', 'PageBuilderController@manageSection')->name('manage.section');
            Route::post('manage-section/{id}', 'PageBuilderController@manageSectionUpdate')->name('manage.section.update');
        });
     });
});

Route::name('user.')->group(function () {
    Route::get('/login', [AuthLoginController::class,'showLoginForm'])->name('login');
    Route::post('/login',[AuthLoginController::class,'login']);
    Route::get('logout', [AuthLoginController::class,'logout'])->name('logout');

    Route::get('register', [RegisterController::class,'showRegistrationForm'])->name('register');
    Route::post('register',  [RegisterController::class,'register'])->middleware('regStatus');

    Route::post('check-mail', 'Auth\RegisterController@checkUser')->name('checkUser');

    Route::get('password/reset', [ForgotPasswordController::class,'showLinkRequestForm'])->name('password.request');
    Route::post('password/email',  [ForgotPasswordController::class,'sendResetCodeEmail'])->name('password.email');
    Route::get('password/code-verify', [ForgotPasswordController::class,'codeVerify'] )->name('password.code.verify');
    Route::post('password/reset',  [ResetPasswordController::class,'reset'])->name('password.update');
    Route::get('password/reset/{token}', [ResetPasswordController::class,'showResetForm'])->name('password.reset');
    Route::post('password/verify-code', [ForgotPasswordController::class,'verifyCode'])->name('password.verify.code');
});
Route::name('user.')->prefix('user')->group(function () {
    Route::middleware('auth')->group(function () {

        Route::middleware(['checkStatus'])->group(function () {
            Route::get('dashboard', [UserController::class,'home'])->name('home');

            Route::get('profile-setting', [UserController::class,'profile'])->name('profile.setting');
            Route::post('profile-setting',  [UserController::class,'submitProfile']);
            Route::get('change-password', [UserController::class,'changePassword'])->name('change.password');
            Route::post('change-password',  [UserController::class,'submitPassword']);
            Route::post('user/exist',  [UserController::class,'checkUser'])->name('check.exist');

            Route::name('property.')->prefix('project')->group(function () {
             Route::get('add', [UserPropertyController::class,'propertyAdd'])->name('add');
             Route::post('add', [UserPropertyController::class,'propertyStore']);
             Route::get('message', [UserPropertyController::class,'propertyMessage'])->name('message');
             Route::post('message/delete', [UserPropertyController::class,'propertyMessageDelete'])->name('message.delete');

            });
            Route::name('my.listing.')->prefix('my/project')->group(function () {
             Route::get('list', [UserPropertyController::class,'myListings'])->name('list');
             Route::get('details/{id}', [UserPropertyController::class,'myListingDetails'])->name('details');
             Route::post('update', [UserPropertyController::class,'propertyUpdate'])->name('update');
             Route::post('delete', [UserPropertyController::class,'propertyDelete'])->name('delete');
            });

            Route::get('property/search', [UserPropertyController::class,'propertySearch'])->name('property.search');
            Route::get('property/search/details/{id}/{slug}', [UserPropertyController::class,'propertySearchDetails'])->name('property.details');
            Route::post('send/message', [UserPropertyController::class,'sendMessage'])->name('send.message');

            Route::name('diligence.')->prefix('due/diligence')->group(function () {
                Route::get('list', [DueDiligenceController::class,'deuList'])->name('list');
                Route::get('create', [DueDiligenceController::class,'deuCreate'])->name('create');
                Route::post('create', [DueDiligenceController::class,'deuStore']);
                Route::post('delete', [DueDiligenceController::class,'deuDelete'])->name('delete');
            });
            Route::name('remotevip.')->prefix('request/remote')->group(function () {
                Route::get('list', [RemoteVipController::class,'remoteVipList'])->name('list');
                Route::get('request', [RemoteVipController::class,'requestVip'])->name('request');
                Route::post('request', [RemoteVipController::class,'requestVipStore']);
                Route::get('details/{id}', [RemoteVipController::class,'requestVipDetails'])->name('details');
                Route::post('delete', [RemoteVipController::class,'requestDelete'])->name('delete');

            });

        });
    });
});

 Route::post('/register_p',  [RegisterController::class,'register'])->name('register_p');
Route::get('project/details/{id}/{slug}', [UserPropertyController::class,'propertySearchDetails'])->name('property.details');
Route::get('/cookie/accept', 'SiteController@cookieAccept')->name('cookie.accept');

Route::get('placeholder-image/{size}', 'SiteController@placeholderImage')->name('placeholder.image');
Route::get('/{slug}',  [SiteController::class,'pages'])->name('pages');
Route::get('/', [SiteController::class,'index'])->name('home')->middleware('auth');


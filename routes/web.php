<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\testController;

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


Route::group(['middleware'=>['checkAuth']], function(){

//Inside
//Route::get('home', 'testController@home')->name('home');

});


//Route::get('{anypath}', 'testController@home')->where('path', '.*');

Auth::routes(); 

Route::get('home', 'HomeController@home');//->name('home');
Route::get('calendar', 'HomeController@calendar')->name('calendar');
Route::get('messages', 'HomeController@messages')->name('messages'); 
Route::get('patient', 'HomeController@patient')->name('patient');
Route::get('patient-single-{id}', 'HomeController@patient_single')->name('patient-single');
Route::get('add_patient', 'HomeController@add_patient')->name('add_patient');
Route::get('edit_patient-{id}', 'HomeController@edit_patient')->name('edit_patient');
Route::get('delete_patient/{id}', 'HomeController@delete_patient')->name('delete_patient');
//Route::get('breakdown', 'HomeController@breakdown')->name('breakdown');
Route::get('profile_settings', 'HomeController@profile_hcp')->name('profile_settings');

//POST ROUTES
Route::post('profile_save', 'HomeController@profile_save')->name('profile_save');
Route::post('add_patientP', 'HomeController@add_patientP')->name('add_patientP');
Route::post('up_patient', 'HomeController@up_patient')->name('up_patient');


//Forget Password
Route::get('/', 'testController@login');
Route::get('forgot/{remail}', 'testController@forgot')->name('forgot');
Route::post('send_reset_email', 'testController@send_reset_email')->name('send_reset_email');
Route::post('reset/{remail}', 'testController@reset')->name('reset');


/*****************ADMIN ROUTES*******************/
Route::Group(['prefix' => 'admin'], function () { 
    
    Route::get('/index_admin','adminController@index_admin')->name('index_admin');
    Route::get('/logout','adminController@logout')->name('logout');

        Route::get('/appointment-list', 'adminController@appointments')->name('appointment-list');
        Route::get('/del_appointment/{id}', 'adminController@del_appointment')->name('del_appointment');
        Route::get('/patient-list', 'adminController@patients')->name('patient-list');
        Route::get('/transactions-list', 'adminController@transactions')->name('transactions-list');
        Route::get('/del_transaction/{id}', 'adminController@del_transaction')->name('del_transaction');

        Route::get('/procedures', 'adminController@procedures')->name('procedures');
        Route::get('/reports', 'adminController@reports')->name('reports');

         Route::post('/add_procedures', 'adminController@add_procedures')->name('add_procedures');
         Route::post('/up_category', 'adminController@up_category')->name('up_category');
         Route::get('/del_category/{id}', 'adminController@del_category')->name('del_category');

        Route::get('/doctor-list', 'adminController@doctors')->name('doctor-list');
         Route::post('/add_doctor', 'adminController@add_doctor')->name('add_doctor');
         Route::post('/up_doctor', 'adminController@up_doctor')->name('up_doctor');
         Route::get('/del_doctor/{id}', 'adminController@del_doctor')->name('del_doctor');

        Route::get('/users', 'adminController@users')->name('users');
         Route::post('/add_users', 'adminController@add_users')->name('add_users');
         Route::get('/del_users/{id}', 'adminController@del_users')->name('del_users');

       
       
        Route::get('/clinics', 'adminController@clinics')->name('clinics');
         Route::post('/add_clinic', 'adminController@add_clinic')->name('add_clinic');
         Route::post('/up_clinic', 'adminController@up_clinic')->name('up_clinic');
         Route::get('/del_clinic/{id}', 'adminController@del_clinic')->name('del_clinic');

        Route::get('/hospitals', 'adminController@hospitals')->name('hospitals');
         Route::post('/add_hospital', 'adminController@add_hospital')->name('add_hospital');
         Route::post('/up_hospital', 'adminController@up_hospital')->name('up_hospital');
         Route::get('/del_hospital/{id}', 'adminController@del_hospital')->name('del_hospital');
       
        Route::get('/treatments', 'adminController@treatments')->name('treatments');
         Route::post('/add_location', 'adminController@add_location')->name('add_location');
         Route::post('/up_location', 'adminController@up_location')->name('up_location');
         Route::get('/del_location/{id}', 'adminController@del_location')->name('del_location');

     
        Route::post('/adminLogin', 'adminController@adminLogin')->name('adminLogin');
        Route::get('/reviews', function () {
        return view('admin.reviews');
        })->name('reviews');

    Route::get('forgot/{remail}', 'adminController@forgot')->name('forgot');
    Route::post('send_reset_email', 'adminController@send_reset_email')->name('send_reset_email');
    Route::post('reset/{remail}', 'adminController@reset')->name('reset');

      
       
        Route::get('/login', function () {
        return view('admin.login');
        })->name('loginA');
       
    });






/******************** END******************************/

Route::get('clear_cache', function () {
    \Artisan::call('config:cache');
    \Artisan::call('view:clear');
    \Artisan::call('route:clear');
    dd("Cache is cleared");
});


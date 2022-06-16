<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Client\QuestionnaireController;
use App\Http\Controllers\Client\FileController;
use App\Http\Controllers\Doctor\DoctorController;
use App\Services\FileUploadService;
use App\Http\Controllers\DefaultController;
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

Route::prefix('executive')->group(function () {
    Route::get('/',function(){
        return redirect()->route('login');
    });
    Auth::routes(['register' => false]);
});


Route::get('/',[DefaultController::class,'index'])->name('welcome');
Route::get('/treaty',[DefaultController::class,'treaty'])->name('treaty');
Route::get('/documents',[DefaultController::class,'documents'])->name('documents');
Route::get('/equipment',[DefaultController::class,'equipment'])->name('equipment');
Route::get('/register',[DefaultController::class,'register'])->name('register');


Route::prefix('questionnaire')->group(function () {
    Route::get('/{id}',[QuestionnaireController::class,'index'])->name('questionnaire')->where('id', '[0-9]+');
    Route::post('/{id}',[QuestionnaireController::class,'store'])->name('storeQuestionnaire')->where('id', '[0-9]+');
});

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
    Route::resource('client', ClientController::class)->except(['store']);
    Route::get('client/questionnaire/{id}/{num}',[QuestionnaireController::class,'getQuest'])->name('adminGetQuestionnaire')->where('id', '[0-9]+')->where('num', '[0-9]+');
    Route::prefix('client/files')->group(function () {
        Route::get('/get_word/{id}/{num}',[FileController::class,'getWord'])->name('getWord')->where('id', '[0-9]+')->where('num', '[0-9]+');
       
    });
    // Route::prefix('doctors')->group(function () {
    //     Route::get('/',[DoctorController::class,'index'])->name('doctor');
       
    // });
    Route::resource('doctors', DoctorController::class,['except' => ['show']]);
});

Route::resource('client', ClientController::class)->only('store');
Route::resource('doctors', DoctorController::class)->only('show');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('get_file',[FileUploadService::class,'get_file'])->name('get_file');

Route::get('/run_cmd',[DefaultController::class,'runCommand']);


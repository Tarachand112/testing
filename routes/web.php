<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return redirect('login');
});
Route::get('lockscreen', [Ekasit\Http\Controllers\Auth\LoginController::class, 'lockScreen']);
Route::get('forgot_password', [Ekasit\Http\Controllers\Auth\LoginController::class, 'forgotPassword']);

Auth::routes();

Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('profile', 'DashboardController@profile');

Route::group(['prefix' => 'system'], function() {
	Route::group(['prefix' => 'translations'], function() {
		Route::get('edit_translation', 'TranslationController@translation');
		Route::get('edit_section', 'TranslationController@section');
		Route::get('edit_label', 'TranslationController@label');
	});
	Route::group(['prefix' => 'user_management'], function() {
		Route::get('user', 'UserManagementController@index');
		Route::get('company', 'UserManagementController@companyList');
	});
});
Route::group(['middleware' => ['auth']], function () {
});
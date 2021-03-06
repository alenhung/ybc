<?php

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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/about', 'StaticPagesController@about')->name('about');
Route::get('/works', 'WorksPagesController@works')->name('works');
Route::get('/works_Introduction', 'WorksPagesController@itemIntroduction')->name('itemIntroduction');
Route::get('/contact', 'ServicePagesController@contact')->name('contact');

Auth::routes();

Route::prefix('manage')->middleware('role:superadministrator')->group(function(){
  Route::get('/','ManageController@index');
  Route::get('/dashboard','ManageController@dashboard')->name('manage.dashboard');
  Route::resource('/users','UserController');
  Route::resource('/permissions','PermissionController',['except => destory']);
  Route::resource('/roles','RoleController',['except => destory']);
});

Route::get('/Site_Admin', 'SiteAdminController@SiteAdmin')->name('SiteAdmin');

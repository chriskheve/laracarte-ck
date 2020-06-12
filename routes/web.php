<?php

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

Route::get('/', [
    'as' => 'root_path', //nom de la route
    'uses' => 'PagesController@home' // NomControlleur@action
]);



Route::get('/about', [
    'as' => 'about_path', //nom de la route
    'uses' => 'PagesController@about' // NomControlleur@action
]);


Route::get('/contact', [
    'as' => 'contact_path', //nom de la route
    'uses' => 'ContactsController@create' // NomControlleur@action
]);

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

// Домашняя с новостями
Route::get('/', 'MainController@home') -> name('/'); //Сначала url, потом метод

// Госты
Route::get('/gosts', 'GostController@gost') -> name('gosts');
Route::get('/gosts/{gostes}', 'GostController@gostes') -> name('gostes');

// Компании
Route::get('/companys', 'CompanyController@companys') -> name('companys');
Route::get('/companys/{company}', 'CompanyController@company') -> name('company');

// Книги
Route::get('/liblarys', 'LiblaryController@liblarys') -> name('liblarys');
Route::get('/liblarys/{liblary}', 'LiblaryController@liblary') -> name('liblary');

// Справочник
Route::get('/guides', 'GuideController@guides') -> name('guides');
Route::get('/guides/{guide}', 'GuideController@guide') -> name('guide');

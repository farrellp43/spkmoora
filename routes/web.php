<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
 
// Guest
Route::get('/', 'GuestController@home')->name('guest.home');

// Admin
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
    Route::get('map', 'AdminController@map')->name('admin.map');
    Route::get('users', 'AdminController@userRead')->name('users.read');
    Route::get('data/alternatives', 'AdminController@alternativeRead')->name('alternatives.read');
    Route::post('data/alternatives/create', 'AdminController@alternativeCreate')->name('alternative.create');
    Route::get('data/criterias', 'AdminController@criteriaRead')->name('criterias.read');
    Route::get('criteria/{id}', 'AdminController@criteriaShow')->name('criteria.show');
    Route::get('classification', 'AdminController@classificationRead')->name('classification.read');
    Route::get('moora/matrix', 'MooraController@matrix')->name('moora.matrix');
    Route::get('moora/normalization', 'MooraController@normalization')->name('moora.normalization');
    Route::get('moora/optimization', 'MooraController@optimization')->name('moora.optimization');
    Route::get('moora/ranking', 'MooraController@ranking')->name('moora.ranking');
    
});

// Profile
Route::get('/profile/{id}', 'AdminController@editProfile')->name('profile.edit'); //belum diimplementasi di view

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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
    Route::post('users/create', 'AdminController@userCreate')->name('user.create');
    Route::patch('users/{id}/update', 'AdminController@userUpdate')->name('user.update');
    Route::delete('users/delete', 'AdminController@userDelete')->name('user.delete');

    // Alternatives
    Route::get('data/alternatives', 'AdminController@alternativeRead')->name('alternatives.read');
    Route::post('data/alternatives/create', 'AdminController@alternativeCreate')->name('alternative.create');
    Route::get('data/alternatives/{id}/edit', 'AdminController@alternativeEdit')->name('alternative.edit'); 
    Route::patch('data/alternatives/{id}/update', 'AdminController@alternativeUpdate')->name('alternative.update'); 
    Route::delete('data/alternatives/{id}/delete', 'AdminController@alternativeDelete')->name('alternative.delete');

    // Criterias
    Route::get('data/criterias', 'AdminController@criteriaRead')->name('criterias.read');
    Route::get('data/criterias/{id}/edit', 'AdminController@criteriaEdit')->name('criteria.edit');
    Route::patch('data/criterias/{id}/update', 'AdminController@criteriaUpdate')->name('criteria.update');

    // Criteria Value
    Route::get('criteria/{id}', 'AdminController@criteriaShow')->name('criteria.show');
    Route::patch('value/update', 'AdminController@criteriaValueUpdate')->name('value.update');

    // Classification
    Route::get('classification', 'AdminController@classificationRead')->name('classification.read');
    Route::patch('classification/update', 'AdminController@classificationUpdate')->name('classification.update');

    // Moora
    Route::get('moora/matrix', 'MooraController@matrix')->name('moora.matrix');
    Route::get('moora/normalization', 'MooraController@normalization')->name('moora.normalization');
    Route::get('moora/optimization', 'MooraController@optimization')->name('moora.optimization');
    Route::get('moora/ranking', 'MooraController@ranking')->name('moora.ranking');
    
});

// Profile
Route::get('/profile/{id}', 'AdminController@editProfile')->name('profile.edit'); //belum diimplementasi di view

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

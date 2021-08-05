<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IimnetController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', [IimnetController::class, 'index']);
Route::get('/contact-us', [IimnetController::class, 'contact']);

Route::get('/internship', [IimnetController::class, 'internship'])->name('intern');
Route::get('/internship/project', [IimnetController::class, 'project']);
Route::get('/internship/freelancing', [IimnetController::class, 'freelancing']);
Route::get('/internship/hire-mba', [IimnetController::class, 'hiremba']);

Route::get('/helpline', [IimnetController::class, 'helpline']);
Route::get('/helpline/get-help', [IimnetController::class, 'gethelp']);
Route::get('/helpline/volunteer', [IimnetController::class, 'volunteer']);
Route::get('/helpline/get-help-details', [IimnetController::class, 'gethelpdetails']);

Auth::routes();

Route::get('/home', 'HomeController@login')->name('home');

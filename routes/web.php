<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\OrganizerController;
use App\Http\Controllers\Auth\AttendeeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/' , [FrontController::class , 'index'])->name('index');
Route::get('event' , [FrontController::class , 'event'])->name('event');

Route::prefix('admin')->group(function () {


    Route::get('/login' , [HomeController::class , 'login'])->name('admin.login');

    Route::post('/post-login' , [AuthController::class , 'postlogin'])->name('admin.postlogin');

    Route::middleware(['auth'])->group(function () {

        Route::get('/logout' , [AuthController::class , 'logout'])->name('logout');

        Route::get('/index' , [HomeController::class , 'index'])->name('admin.index');

        Route::get('/service' , [HomeController::class , 'service'])->name('admin.service');

//event

        Route::get('/view/event', [EventController::class, 'index'])->name('admin.event');

        Route::any('/create/event/info/{id?}', [EventController::class, 'create'])->name('create.eventinfo');

        Route::get('/delete/event/info/{id?}', [EventController::class, 'destroy'])->name('delete.eventinfo');


    });



});

Route::prefix('attendee')->group(function () {

    Route::get('/login' , [AttendeeController::class , 'login'])->name('attendee.login');
    Route::get('/register' , [AttendeeController::class , 'register'])->name('attendee.register');
    Route::post('/post-login' , [AttendeeController::class , 'postlogin'])->name('attendee.postlogin');
    Route::post('/post-register' , [AttendeeController::class , 'postregister'])->name('attendee.postregister');
    Route::get('/logout' , [AttendeeController::class , 'logout'])->name('attendee.logout');



});





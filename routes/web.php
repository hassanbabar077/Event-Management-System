<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\EventTypeController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\OrganizerController;
use App\Http\Controllers\Auth\AttendeeController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\OrganizerEventController;
use App\Http\Controllers\StripePaymentController;



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

Route::get('/event' , [FrontController::class , 'event'])->name('event');

Route::get('/contact' , [VisitorController::class , 'contact'])->name('contact');


Route::prefix('admin')->group(function () {


    Route::get('/login' , [HomeController::class , 'login'])->name('login');

    Route::post('/post-login' , [AuthController::class , 'postlogin'])->name('admin.postlogin');

    Route::middleware(['auth'])->group(function () {

        Route::get('/logout' , [AuthController::class , 'logout'])->name('logout');

        Route::get('/index' , [HomeController::class , 'index'])->name('admin.index');



        Route::get('/queries' , [HomeController::class , 'queries'])->name('admin.queries');
        Route::get('/payments' , [HomeController::class , 'payments'])->name('admin.payments');


//services

        Route::get('/view/services', [ServiceController::class, 'index'])->name('admin.services');

        Route::any('/create/services/info/{id?}', [ServiceController::class, 'create'])->name('create.servicesinfo');

        Route::get('/delete/services/info/{id?}', [ServiceController::class, 'destroy'])->name('delete.servicesinfo');

//events
        Route::get('/view/events', [EventController::class, 'index'])->name('admin.events');

        Route::any('/create/events/info/{id?}', [EventController::class, 'create'])->name('create.eventsinfo');

        Route::get('/delete/events/info/{id?}', [EventController::class, 'destroy'])->name('delete.eventsinfo');

        //types
        Route::get('/view/event-type', [EventTypeController::class, 'index'])->name('admin.event-type');

        Route::any('/create/event-type/info/{id?}', [EventTypeController::class, 'create'])->name('create.event-typeinfo');

        Route::get('/delete/event-type/info/{id?}', [EventTypeController::class, 'destroy'])->name('delete.event-typeinfo');


    });



});

Route::prefix('attendee')->group(function () {

    Route::get('/login' , [AttendeeController::class , 'login'])->name('attendee.login');
    Route::get('/register' , [AttendeeController::class , 'register'])->name('attendee.register');
    Route::post('/post-login' , [AttendeeController::class , 'postlogin'])->name('attendee.postlogin');
    Route::post('/post-register' , [AttendeeController::class , 'postregister'])->name('attendee.postregister');


    Route::middleware(['attendee'])->group(function () {
        Route::get('/logout' , [AttendeeController::class , 'logout'])->name('attendee.logout');
        Route::post('/query', [VisitorController::class, 'query'])->name('query');

        Route::get('/payment' , [StripePaymentController::class , 'payment'])->name('payment');
        Route::post('/post-payment', [StripePaymentController::class, 'postPayment'])->name('post.payment');

    });

});
Route::prefix('organizer')->group(function () {

    Route::get('/login' , [OrganizerController::class , 'login'])->name('organizer.login');

    Route::post('/post-login' , [OrganizerController::class , 'postlogin'])->name('organizer.postlogin');

    Route::middleware(['organizer'])->group(function () {
        Route::get('/index' , [FrontController::class , 'organizer'])->name('organizer.index');

        Route::any('/create/events/info/{id?}', [OrganizerEventController::class, 'create'])->name('organizer.create.eventsinfo');

        Route::get('/delete/events/info/{id?}', [OrganizerEventController::class, 'destroy'])->name('organizer.delete.eventsinfo');

    });

});








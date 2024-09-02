<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\AnalyticsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;


route::get('/',[AdminController::class,'home']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;
            if($usertype=="user")
            {
                return view('home.index');
            }

            else if($usertype=="admin")
            {
                return view ('admin.index');
            }
            
            else
            {
                return redirect()->back();
            }
        }
    })->name('dashboard');
});
Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

route::get('/create_room',[AdminController::class,'create_room'])->name('create_room');

route::post('/add_room',[AdminController::class,'add_room']);

route::get('/view_rooms',[AdminController::class,'view_rooms']);

route::get('/rooms', [AdminController::class, 'show_rooms'])->name('admin.show_rooms');

route::get('/menu',[HomeController::class,'menu']);

route::get('/room_details/{id}', [HomeController::class, 'room_details'])->name('room_details');

route::post('/add_booking/{id}', [HomeController::class, 'add_booking'])->name('add.booking');

route::get('/bookings', [AdminController::class, 'bookings'])->name('bookings');

route::get('/mybookings', [AdminController::class, 'mybookings'])->name('mybookings');


Route::delete('/bookings/{id}', [AdminController::class, 'deleteBooking'])->name('bookings.delete');

route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');

route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');

route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');

route::get('/menu', [HomeController::class, 'menu'])->name('menu');




Route::get('/admin/messages', [MessageController::class, 'showMessages'])->name('admin.messages');





Route::post('/checkAvailability', [RoomController::class, 'checkAvailability'])->name('checkAvailability');


Route::get('/payment/{id}', [HomeController::class, 'show_payment_page'])->name('payment_page');
Route::post('process_payment', [HomeController::class, 'process_payment'])->name('process.payment');
Route::post('/create-payment-intent', [HomeController::class, 'create_payment_intent'])->name('create.payment.intent');

Route::post('/submit', [ContactController::class, 'submit'])->name('submit');

Route::post('/cancel_booking', [HomeController::class, 'cancelBooking'])->name('cancel.booking');

Route::get('/fetch-bookings-data', [AnalyticsController::class, 'fetchBookingsData'])->name('fetch.bookings.data');


// web.php
Route::post('/submit', [ContactController::class, 'storeMessage']);


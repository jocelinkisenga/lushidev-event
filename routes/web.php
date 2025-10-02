<?php

use App\Http\Controllers\ChatController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Owner\BookingController;
use App\Http\Controllers\Owner\CategoryController;
use App\Http\Controllers\Owner\OwnerDashboardController;
use App\Http\Controllers\Owner\ProductController;
use App\Http\Controllers\Owner\VenueController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;


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

Route::get("/", [App\Http\Controllers\MainController::class, "index"])->name('home');
Route::get("/salle/{title}/{id}", [App\Http\Controllers\MainController::class, "show"])->name('salle.single');
Route::get("venues/", [App\Http\Controllers\MainController::class, "venues"])->name('venues');

Route::middleware("auth")->group(function () {
    Route::post("reserve", [ReservationController::class, "store"])->name("store.reservation");
    Route::get("sent/{id}", [ReservationController::class, "send"])->name("sent.reservation");
    Route::get("chat/{venueId}",[ChatController::class, "create"])->name("chat.create");

});

// Routes for owner
Route::middleware("auth")->prefix("owner")->group(function () {
    Route::get("/dashboard", [OwnerDashboardController::class, "index"])->name("owner.dasboard");
    Route::get("/categories", [CategoryController::class, "index"])->name("owner.categories");
    Route::get("/products", [ProductController::class, "index"])->name("owner.products");
    Route::get("/venues", [VenueController::class, "index"])->name("owner.venues");
    Route::get("/venuesCreate", [VenueController::class, "create"])->name("owner.venues.create");
    Route::post("/venuesStore", [VenueController::class, "store"])->name("owner.venues.store");
    Route::get("bookings/{venueId}", [BookingController::class, "index"])->name("owner.bookings");
    Route::get("bookingsConfirm/{bookingId}", [BookingController::class, "confirm"])->name("owner.bookings.confirm");
    Route::get("bookingCancel/{bookingId}", [BookingController::class, "show"])->name("owner.bookings.cancel");
});


//Routes for clients
Route::middleware("auth")->prefix("client")->group(function () {
    Route::get("/dashboard", [ClientController::class, "index"])->name("client.dasboard");
    Route::get("/mesreservations", [ClientController::class, "reservations"])->name("client.reservations");
    Route::get("bookingClient/{bookingId}", [ClientController::class, "show"])->name("client.bookings.detail");
});
// Route::get("/mesreservations",[ClientController::class,"reservations"])->name("client.reservations");


require __DIR__ . '/admin.php';
require __DIR__ . '/auth.php';

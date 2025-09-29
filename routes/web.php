<?php

use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\MainController;
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

Route::middleware("auth")->group(function () {
    Route::post("reserve",[ReservationController::class,"store"])->name("store.reservation");
    Route::get("sent/{id}", [ReservationController::class, "send"])->name("sent.reservation");
});

// Routes for owner
Route::prefix("owner")->group(function(){
        Route::get("/dashboard",[OwnerDashboardController::class,"index"])->name("owner.dasboard");
        Route::get("/categories",[CategoryController::class,"index"])->name("owner.categories");
    Route::get("/products", [ProductController::class, "index"])->name("owner.products");
    Route::get("/venues", [VenueController::class, "index"])->name("owner.venues");
});


//Routes for clients
Route::prefix("client")->group(function(){
        Route::get("/dashboard",[ClientController::class,"index"])->name("client.dasboard");
});

require __DIR__ . '/admin.php';
require __DIR__ . '/auth.php';

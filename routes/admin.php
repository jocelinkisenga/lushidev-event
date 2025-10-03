<?php

use App\Http\Controllers\Admin\AdminController;

use App\Http\Controllers\Owner\CategoryController;
use App\Http\Controllers\Owner\ProductController;
use Illuminate\Support\Facades\Route;



Route::middleware(["auth", "role:1"])->group(function (){
Route::get("dashboard-admin", [AdminController::class,"index"])->name("dashboard.admin");
    Route::get("/adminvenues", [AdminController::class, "venues"])->name("admin.venues");
    Route::get("/adminbookings", [AdminController::class, "bookings"])->name("admin.bookings");
    Route::get("bookingadmin/{bookingId}", [AdminController::class, "booking"])->name("admin.bookings.detail");

    Route::get("adminActive/{venueId}", [AdminController::class, "active"])->name(name: "active.venue");
        Route::get("adminDEActive/{venueId}", [AdminController::class, "deactive"])->name("deactive.venue");
    Route::get("/categories", [CategoryController::class, "index"])->name("owner.categories");
    Route::get("/products", [ProductController::class, "index"])->name("owner.products");
});

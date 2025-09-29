<?php
use App\Http\Controllers\Admin\AdminCandidateController;
use App\Http\Controllers\Admin\AdminCompanController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ConfirmCandidateController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;



Route::middleware(["auth", "role:1"])->group(function (){
Route::get("dashboard-admin", [AdminController::class,"index"])->name("dashboard.admin");
});

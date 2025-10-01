<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Venue;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() : View {
        $latestVenues = Venue::latest()->limit(4)->get();
        return view("admin.dashboard", compact("latestVenues"));
    }
}

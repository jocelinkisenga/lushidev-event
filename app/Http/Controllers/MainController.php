<?php

namespace App\Http\Controllers;


use App\Models\Venue;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index () {

        $venues = Venue::whereAvaibility(false)->latest()->get();
        return view("front.main", compact("venues"));
    }

    public function show(string $title, int $id) {
        $venue = Venue::findOrFail($id);

        return view("front.single", compact("venue"));
    }
}

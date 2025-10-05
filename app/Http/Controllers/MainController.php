<?php

namespace App\Http\Controllers;


use App\Models\Venue;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index () {

        $venues = Venue::whereAvaibility(false)->whereActive(true)->latest()->limit(6)->get();
        return view("front.main", compact("venues"));
    }

    public function show(string $title, int $id) {
        $venue = Venue::with("services")->findOrFail($id);

        return view("front.single", compact("venue"));
    }

    public function venues () {
        return view("front.salles");
    }

    public function about() {
        return view("front.about");
    }
}

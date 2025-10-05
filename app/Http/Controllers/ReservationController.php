<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Str;

class ReservationController extends Controller
{

    public function store(Request $request) {
        $code = str_shuffle("ABCDEFHIJKLMNOUY");
        $reservation = Reservation::create([
                'title' => $request->title,
                'description' => $request->description,
                'starts_at' => $request->starts_at,
                'ends_at' => $request->ends_at,
                'venue_id' => $request->venue_id,
                'user_id' => Auth::user()->id,
                'code' => $code
        ]);

        return redirect()->route("sent.reservation",
        ['id' => $request->venue_id, "reservation" => $reservation->id]);
    }

    public function send ( $reservationId) {
        $reservation = Reservation::with("venue")->first();
        return view("client.bookingsent", compact("reservation"));
    }
}

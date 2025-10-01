<?php

namespace App\Http\Controllers\Owner;

use App\Enums\ReservastionEnu;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index ($venueId) {
        $bookings = Reservation::whereVenue_id($venueId)->latest()->get();

        return view("owner.reservations", compact("bookings"));
    }

    public function cancel ($bookingId) {
        $booking = Reservation::findOrFail($bookingId);
        $booking->update(["status" => ReservastionEnu::CANCELLED]);
        return redirect(back());
    }

    public function confirm($bookingId)
    {
        $booking = Reservation::findOrFail($bookingId);
        $booking->update(["status" => ReservastionEnu::DONE]);
        return redirect(back());
    }
}

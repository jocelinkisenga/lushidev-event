<?php

namespace App\Http\Controllers\Owner;


use App\Enums\ReservationEnu;
use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index ($venueId) {
        $bookings = Reservation::whereVenue_id($venueId)->latest()->get();

        return view("owner.reservations", compact("bookings"));
    }

    public function show ($bookingId) {
        $booking = Reservation::findOrFail($bookingId);
        return view("owner.bookingDetail", compact("booking"));
    }

    public function cancel ($bookingId) {
        $booking = Reservation::findOrFail($bookingId);
        $booking->update(["status" => ReservationEnu::CANCELLED]);
        return redirect()->back();
    }

    public function confirm($bookingId)
    {
        $booking = Reservation::findOrFail($bookingId);
        $booking->update(["status" => ReservationEnu::DONE]);
        return redirect()->back();
    }
}

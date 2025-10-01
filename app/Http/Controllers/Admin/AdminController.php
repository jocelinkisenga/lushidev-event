<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use App\Models\Venue;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(): View
    {
        $latestVenues = Venue::latest()->limit(4)->get();
        $latestBookings = Reservation::latest()->limit(4)->get();
        return view("admin.dashboard", compact("latestVenues", "latestBookings"));
    }

    public function venues(): View
    {
        $venues = Venue::latest()->get();
        return view("admin.venues", compact("venues"));
    }

    public function bookings(): View
    {
        $bookings = Reservation::latest()->limit(4)->get();
        return view("admin.reservations", compact("bookings"));
    }

    public function booking($bookingId)
    {
        $booking = Reservation::findOrFail($bookingId);
        return view("admin.bookingDetail", compact("booking"));
    }

    public function active($venueId)
    {
        $venue = Venue::findOrFail($venueId);
        $venue->update(["active" => true]);
        return redirect()->back();
    }

    public function deactive($venueId)
    {
        $venue = Venue::findOrFail($venueId);
        $venue->update(["active" => false]);
        return redirect()->back();
    }
}

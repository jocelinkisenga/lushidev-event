<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Service;
use App\Models\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $venues = Venue::whereUser_id(Auth::user()->id)->latest()->get();
        return view("owner.venues", compact("venues"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("owner.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $imagePathPrincipale = $request->file('image')->store("uploads/main", "public");

       $venue =  Venue::create([
            'name' => $request->name,
            'location' => $request->location,
            'description' => $request->description,
            'image' => $imagePathPrincipale,
            'capacity' => $request->capacity,
            'user_id' => Auth::user()->id,
            'price' => $request->price,
            'opening' => $request->opening,
            'closing' => $request->closing,
            'category_id'=> $request->category_id
        ]);

        if($request->hasFile('images')){
            foreach ($request->file('images') as  $image) {
                $path = $image->store('uploads/autres','public');
                $venue->venue_images()->create(['image_path' => $path]);
            }
        }

        $services = array_map('trim', explode(',',$request->services));
        $serviceIds = [];

        foreach ($services as $service) {
            if($service !== '') {
                $srv = Service::firstOrCreate(['nom' => $service]);
                $serviceIds [] = $srv->id;
            }
        }

        $venue->services()->sync($serviceIds);

        return redirect()->route('owner.dasboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

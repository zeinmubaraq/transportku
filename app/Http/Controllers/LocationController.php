<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $locations = Location::all();
        return view('locations.index', compact('locations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('locations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:locations',
            'distance' => 'required',
            'salary' => 'required',
            'fuel' => 'required',
        ]);

        $validatedData['slug'] = Str::slug($request->name, '-');

        $location = new Location($validatedData);
        $location->save();

        return redirect()->route('locations.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Location $location)
    {
        return view('locations.show', compact('location'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Location $location)
    {
        return view('locations.edit', compact('location'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Location $location)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'distance' => 'required',
            'salary' => 'required',
            'fuel' => 'required',
        ]);

        $validatedData['slug'] = Str::slug($request->name, '-');

        $location->update($validatedData);

        return redirect()->route('locations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Location $location)
    {
        Location::destroy($location->id);
        return redirect()->route('locations.index');
    }
}

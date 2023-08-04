<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Vehicle;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Inertia\Inertia;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Vehicle/Index', [
            'vehicles' => Vehicle::with('driver')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $drivers = Driver::all();
        return view('vehicles.create', compact('drivers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'license_number' => 'required|unique:vehicles',
            'name' => 'required',
            'series' => 'required',
            'type' => 'required',
            'tonnage' => 'required',
            'machine_number' => 'required',
            'chasis_number' => 'required',
            'driver_id' => 'required',
        ]);

        $validatedData['slug'] = Str::slug($request->license_number, '-');

        $vehicle = new Vehicle($validatedData);
        $vehicle->save();

        return redirect()->route('vehicles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vehicle $vehicle): View
    {
        return view('vehicles.show', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $validatedData = $request->validate([
            'license_number' => 'required',
            'name' => 'required',
            'series' => 'required',
            'type' => 'required',
            'tonnage' => 'required',
            'machine_number' => 'required',
            'chasis_number' => 'required',
            'driver_id' => 'required',
        ]);

        $validatedData['slug'] = Str::slug($request->license_number, '-');

        $vehicle->update($validatedData);

        return redirect()->route('vehicles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vehicle $vehicle)
    {
        Vehicle::destroy($vehicle->id);

        return redirect()->route('vehicles.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drivers = Driver::all();
        return view('drivers.index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('drivers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:drivers',
            'sim' => 'required',
            'ktp' => 'required',
            'phone' => 'required',
        ]);

        $validatedData['slug'] = Str::slug($request->name, '-');

        $driver = new Driver($validatedData);
        $driver->save();

        return redirect()->route('drivers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        return view('drivers.show', compact('driver'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Driver $driver)
    {  
        return view('drivers.edit', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Driver $driver)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'sim' => 'required',
            'ktp' => 'required',
            'phone' => 'required',
        ]);

        $validatedData['slug'] = Str::slug($request->name, '-');

        $driver->update($validatedData);

        return redirect()->route('drivers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Driver $driver)
    {
        Driver::destroy($driver->id);
        return redirect()->route('drivers.index');
    }
}

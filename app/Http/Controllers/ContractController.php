<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contracts = Contract::all();
        return view('contracts.index', compact('contracts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::all();
        return view('contracts.create', compact('locations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'do' => 'required|unique:contracts',
            'customer' => 'required',
            'location_id' => 'required',
            'po' => 'required',
        ]);

        $validatedData['slug'] = Str::slug($request->do, '-');

        $contract = new Contract($validatedData);
        $contract->save();

        return redirect()->route('contracts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contract $contract)
    {
        $locations = Location::all();
        return view('contracts.edit', compact('contract', 'locations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contract $contract)
    {
        $validatedData = $request->validate([
            'do' => 'required',
            'customer' => 'required',
            'location_id' => 'required',
            'po' => 'required',
        ]);

        $validatedData['slug'] = Str::slug($request->do, '-');

        $contract->update($validatedData);

        return redirect()->route('contracts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contract $contract)
    {
        Contract::destroy($contract->id);
        return redirect()->route('contracts.index');
    }
}

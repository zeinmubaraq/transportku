@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Edit Armada</h2>
        <form action="{{ route('vehicles.update', $vehicle->slug) }}" method="POST">
            @method("PUT")
            @csrf
            
        <div>
            <div class="mb-3">
                <label for="no-polisi" class="form-label">No Polisi</label>
                <input type="text" name="license_number" class="form-control" id="no-polisi" value="{{ old('license_number', $vehicle->license_number) }}">
            </div>

            <div class="mb-3">
                <label for="merek" class="form-label">Merek</label>
                <input type="text" name="name" class="form-control" id="merek" value="{{ old('name', $vehicle->name) }}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" class="form-control" id="series" value="{{ old('series', $vehicle->series) }}">
            </div>

            <div class="mb-3">
                <label for="type-armada" class="form-label">Type Armada</label>
                <input type="text" name="type" class="form-control" id="type-armada" value="{{ old('type', $vehicle->type) }}">
            </div>

            <div class="mb-3">
                <label for="tonase" class="form-label">Tonase</label>
                <input type="text" name="tonnage" class="form-control" id="tonase" value="{{ old('tonnage', $vehicle->tonnage) }}">
            </div>

            <div class="mb-3">
                <label for="no-mesin" class="form-label">No Mesin</label>
                <input type="text" name="machine_number" class="form-control" id="no-mesin" value="{{ old('machine_number', $vehicle->machine_number) }}">
            </div>

            <div class="mb-3">
                <label for="no-rangka" class="form-label">No Rangka</label>
                <input type="text" name="chasis_number" class="form-control" id="no-rangka" value="{{ old('chasis_number', $vehicle->chasis_number) }}">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
    </div>
@endsection
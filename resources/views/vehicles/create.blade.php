@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Tambah Armada</h2>
        <form action="{{ route('vehicles.store') }}" method="POST">
            @csrf
        <div>
            <div class="mb-3">
                <label for="no-polisi" class="form-label">No Polisi</label>
                <input type="text" name="license_number" class="form-control" id="no-polisi" placeholder="NO Polisi">
            </div>

            <div class="mb-3">
                <label for="merek" class="form-label">Merek</label>
                <input type="text" name="name" class="form-control" id="merek" placeholder="Merek">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" name="series" class="form-control" id="series" placeholder="Series">
            </div>

            <div class="mb-3">
                <label for="type-armada" class="form-label">Type Armada</label>
                <input type="text" name="type" class="form-control" id="type-armada" placeholder="Type Armada">
            </div>

            <div class="mb-3">
                <label for="tonase" class="form-label">Tonase</label>
                <input type="text" name="tonnage" class="form-control" id="tonase" placeholder="Tonase">
            </div>

            <div class="mb-3">
                <label for="no-mesin" class="form-label">No Mesin</label>
                <input type="text" name="machine_number" class="form-control" id="no-mesin" placeholder="No Mesin">
            </div>

            <div class="mb-3">
                <label for="no-rangka" class="form-label">No Rangka</label>
                <input type="text" name="chasis_number" class="form-control" id="no-rangka" placeholder="No Rangka">
            </div>

            <div class="mb-3">
                <label for="driver" class="form-label">Nama Supir</label>
                <select id="driver" name="driver_id">
                    @foreach ($drivers as $driver)
                        @if (old('driver_id') == $driver->id)
                            <option value="{{ $driver->id }}" selected>{{ $driver->name }}</option>
                        @else
                            <option value="{{ $driver->id }}">{{ $driver->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>
    </div>
@endsection
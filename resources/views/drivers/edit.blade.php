@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Edit Supir</h2>
        <form action="{{ route('drivers.update', $driver->slug) }}" method="POST">
            @method('PUT')
            @csrf
        <div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $driver->name) }}">
            </div>

            <div class="mb-3">
                <label for="sim" class="form-label">No SIM</label>
                <input type="text" name="sim" class="form-control" id="sim" value="{{ old('sim', $driver->sim) }}">
            </div>

            <div class="mb-3">
                <label for="ktp" class="form-label">No KTP</label>
                <input type="text" name="ktp" class="form-control" id="ktp" value="{{ old('ktp', $driver->ktp) }}">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">No Telp</label>
                <input type="text" name="phone" class="form-control" id="phone" value="{{ old('phone', $driver->phone) }}">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
    </div>
@endsection
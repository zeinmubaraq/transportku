@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Edit Lokasi</h2>
        <form action="{{ route('locations.update', $location->slug) }}" method="POST">
            @method('PUT')
            @csrf
        <div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name', $location->name) }}">
            </div>

            <div class="mb-3">
                <label for="distance" class="form-label">Jarak</label>
                <input type="text" name="distance" class="form-control" id="distance" value="{{ old('distance', $location->distance) }}">
            </div>

            <div class="mb-3">
                <label for="salary" class="form-label">Uang Jalan</label>
                <input type="text" name="salary" class="form-control" id="salary" value="{{ old('salary', $location->salary) }}">
            </div>

            <div class="mb-3">
                <label for="fuel" class="form-label">Jumlah Solar</label>
                <input type="text" name="fuel" class="form-control" id="fuel" value="{{ old('fuel', $location->fuel) }}">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Tambah Lokasi</h2>
        <form action="{{ route('locations.store') }}" method="POST">
            @csrf
        <div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama">
            </div>

            <div class="mb-3">
                <label for="distance" class="form-label">Jarak</label>
                <input type="text" name="distance" class="form-control" id="distance" placeholder="Jarak">
            </div>

            <div class="mb-3">
                <label for="salary" class="form-label">Uang Jalan</label>
                <input type="text" name="salary" class="form-control" id="salary" placeholder="Uang Jalan">
            </div>

            <div class="mb-3">
                <label for="fuel" class="form-label">Jumlah Solar</label>
                <input type="text" name="fuel" class="form-control" id="fuel" placeholder="Jumlah Solar">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>
    </div>
@endsection
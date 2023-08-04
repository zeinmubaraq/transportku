@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Tambah Supir</h2>
        <form action="{{ route('drivers.store') }}" method="POST">
            @csrf
        <div>
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Nama">
            </div>

            <div class="mb-3">
                <label for="sim" class="form-label">No SIM</label>
                <input type="text" name="sim" class="form-control" id="sim" placeholder="No SIM">
            </div>

            <div class="mb-3">
                <label for="ktp" class="form-label">No KTP</label>
                <input type="text" name="ktp" class="form-control" id="ktp" placeholder="No KTP">
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">No Telp</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="No Telp">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Tambah Kontrak</h2>
        <form action="{{ route('contracts.store') }}" method="POST">
            @csrf
        <div>
            <div class="mb-3">
                <label for="customer" class="form-label">Customer</label>
                <input type="text" name="customer" class="form-control" id="customer" placeholder="Customer">
            </div>

            <div class="mb-3">
                <label for="location" class="form-label">Lokasi Muat</label>
                <select id="location" name="location_id">
                    @foreach ($locations as $location)
                        @if (old('location_id') == $location->id)
                            <option value="{{ $location->id }}" selected>{{ $location->name }}</option>
                        @else
                            <option value="{{ $location->id }}">{{ $location->name }}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="do" class="form-label">No Do</label>
                <input type="text" name="do" class="form-control" id="do" placeholder="No Do">
            </div>

            <div class="mb-3">
                <label for="po" class="form-label">No PO</label>
                <input type="text" name="po" class="form-control" id="po" placeholder="No PO">
            </div>

            <div class="mb-3">
                <label for="spk" class="form-label">No SPK</label>
                <input type="text" name="spk" class="form-control" id="spk" placeholder="No SPK">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Tambah</button>
    </form>
    </div>
@endsection
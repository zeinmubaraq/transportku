@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Lokasi</h2>
        <a class="btn btn-success" href="{{ route('locations.create') }}" role="button">Tambah</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Lokasi</th>
                <th scope="col">Jarak</th>
                <th scope="col">Uang Jalan</th>
                <th scope="col">Jumlah Solar</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($locations as $location)
                    <tr>
                    <th scope="row">1</th>
                    <td class="text-capitalize">{{$location->name}}</td>
                    <td class="text-capitalize">{{$location->distance}} Km</td>
                    <td class="text-capitalize">{{$location->salary}}</td>
                    <td class="text-capitalize">{{$location->fuel}} Ltr</td>
                    <td class="text-capitalize">
                        <a href="{{ route('locations.show', $location->slug) }}" class="btn btn-sm btn-warning" role="button"><i class="bi bi-eye"></i></a>
                        <a href="{{ route('locations.edit', $location->slug) }}" class="btn btn-sm btn-info" role="button"><i class="bi bi-pencil"></i></a>
                        <form class="d-inline" action="{{ route('locations.destroy', $location->slug) }}" method="POST">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-sm btn-danger"><i class="bi bi-trash3"></i></button>
                        </form>
                    </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
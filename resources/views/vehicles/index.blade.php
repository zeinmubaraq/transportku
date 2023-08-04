@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Armada</h2>
        <a class="btn btn-success" href="{{ route('vehicles.create') }}" role="button">Tambah</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">No Polisi</th>
                <th scope="col">Merek</th>
                <th scope="col">Series</th>
                <th scope="col">Type Armada</th>
                <th scope="col">Tonase</th>
                <th scope="col">Nama Supir</th>
                <th scope="col">action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($vehicles as $vehicle)
                    <tr>
                    <th scope="row">1</th>
                    <td class="text-capitalize">{{$vehicle->license_number}}</td>
                    <td class="text-capitalize">{{$vehicle->name}}</td>
                    <td class="text-capitalize">{{$vehicle->series}}</td>
                    <td class="text-capitalize">{{$vehicle->type}}</td>
                    <td class="text-capitalize">{{$vehicle->tonnage}}</td>
                    <td class="text-capitalize">{{$vehicle->driver->name}}</td>
                    <td class="text-capitalize">
                        <a href="{{ route('vehicles.show', $vehicle->slug) }}" class="btn btn-sm btn-warning" role="button"><i class="bi bi-eye"></i></a>
                        <a href="{{ route('vehicles.edit', $vehicle->slug) }}" class="btn btn-sm btn-info" role="button"><i class="bi bi-pencil"></i></a>
                        <form class="d-inline" action="{{ route('vehicles.destroy', $vehicle->slug) }}" method="POST">
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
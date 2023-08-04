@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Supir</h2>
        <a class="btn btn-success" href="{{ route('drivers.create') }}" role="button">Tambah</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">No SIM</th>
                <th scope="col">NO KTP</th>
                <th scope="col">No Telp</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($drivers as $driver)
                    <tr>
                    <th scope="row">1</th>
                    <td class="text-capitalize">{{$driver->name}}</td>
                    <td class="text-capitalize">{{$driver->sim}}</td>
                    <td class="text-capitalize">{{$driver->ktp}}</td>
                    <td class="text-capitalize">{{$driver->phone}}</td>
                    <td class="text-capitalize">
                        <a href="{{ route('drivers.show', $driver->slug) }}" class="btn btn-sm btn-warning" role="button"><i class="bi bi-eye"></i></a>
                        <a href="{{ route('drivers.edit', $driver->slug) }}" class="btn btn-sm btn-info" role="button"><i class="bi bi-pencil"></i></a>
                        <form class="d-inline" action="{{ route('drivers.destroy', $driver->slug) }}" method="POST">
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
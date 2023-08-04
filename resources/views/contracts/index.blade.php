@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Kontrak</h2>
        <a class="btn btn-success" href="{{ route('contracts.create') }}" role="button">Tambah</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Customer</th>
                <th scope="col">Lokasi</th>
                <th scope="col">No DO</th>
                <th scope="col">No PO</th>
                <th scope="col">No SPK</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($contracts as $contract)
                    <tr>
                    <th scope="row">1</th>
                    <td class="text-capitalize">{{$contract->customer}}</td>
                    <td class="text-capitalize">{{$contract->location->name}}</td>
                    <td class="text-capitalize">{{$contract->do}}</td>
                    <td class="text-capitalize">{{$contract->po}}</td>
                    <td class="text-capitalize">{{$contract->spk}}</td>
                    <td class="text-capitalize">
                        <a href="{{ route('contracts.show', $contract->slug) }}" class="btn btn-sm btn-warning" role="button"><i class="bi bi-eye"></i></a>
                        <a href="{{ route('contracts.edit', $contract->slug) }}" class="btn btn-sm btn-info" role="button"><i class="bi bi-pencil"></i></a>
                        <form class="d-inline" action="{{ route('contracts.destroy', $contract->slug) }}" method="POST">
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
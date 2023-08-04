@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>{{$driver->name}}</h2>
        <h4>{{$driver->sim}}</h4>
        <h4>{{$driver->ktp}}</h4>
        <h4>{{$driver->phone}}</h4>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>{{$vehicle->license_number}}</h2>
        <h4>Merek     : {{$vehicle->name}}</h4>
        <h4>Seris     : {{$vehicle->series}}</h4>
        <h4>Tepe      : {{$vehicle->type}}</h4>
        <h4>Tonase    : {{$vehicle->tonnage}}</h4>
        <h4>No Mesin  : {{$vehicle->machine_number}}</h4>
        <h4>No Rangka : {{$vehicle->chasis_number}}</h4>
        <h4>Supir     : {{$vehicle->driver->name}}</h4>
    </div>
@endsection
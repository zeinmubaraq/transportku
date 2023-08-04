@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>{{$location->name}}</h2>
        <h4>{{$location->distance}} Km</h4>
        <h4>Rp. {{$location->salary}}</h4>
        <h4>{{$location->fuel}} Ltr</h4>
    </div>
@endsection
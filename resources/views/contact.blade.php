@extends('layout')

@section('content')
    <h1>My {{$title}} website</h1>
    <ul>
        @foreach($contacts as $contact)
        <strong><li>{{ $contact }}</li></strong><br>
        @endforeach

    </ul>

@endsection



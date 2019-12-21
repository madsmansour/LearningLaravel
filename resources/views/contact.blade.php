@extends('layout')

@section('content')
    <h1>My first website</h1>
    <ul>
        <?php foreach ($contacts as $contact) : ?>
        <strong><li><?= $contact; ?></li></strong><br>
        <?php endforeach; ?>
    </ul>

@endsection



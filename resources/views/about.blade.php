@extends('layouts.main')

@section('container')
    <h1>Halaman {{ $title }}</h1>

    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="15%" class="img-thumbnail rounded-circle">
@endsection

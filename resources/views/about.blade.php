@extends('layouts.main')

@section('container')
    <h1>Halaman About</h1>
    <h3>{{ $nama }}</h3>
    <p>{{ $email }}</p>
    <img src="img/{{ $gambar }}" alt="{{ $nama }}" width=200 class="img-thumbnail rounded-circle">
    <div class="mt-3">
        <p>{{ $description }}</p>
    </div>
@endsection

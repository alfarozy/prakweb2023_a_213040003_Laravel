@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h6>Kategori : {{ $post->category->name }}</h6>
        <h5>{{ $post->author }}</h5>
        <p>{{ $post->body }}</p>
    </article>

    <a href="{{ route('posts') }}">Back to Posts</a>
@endsection

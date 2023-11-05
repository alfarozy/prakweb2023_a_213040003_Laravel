@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $blog->title }}</h2>
        <h5>{{ $blog->author }}</h5>
        <p>{{ $blog->body }}</p>
    </article>

    <a href="{{ route('posts') }}">Back to Posts</a>
@endsection

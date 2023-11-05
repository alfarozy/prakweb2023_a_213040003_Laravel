@extends('layouts.main')

@section('container')
    @foreach ($posts as $post)
        <article class="mb-5">
            <h2><a href="posts/{!! $post->slug !!}">{{ $post->title }}</a></h2>
            <h6><a href="poscategory/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
            <h5>Author: {{ $post->author }}</h5>
            <p>{{ $post->excerpt }} </p>
        </article>
    @endforeach
@endsection

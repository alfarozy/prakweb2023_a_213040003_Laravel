@extends('layouts.main')

@section('container')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/posts" method="get">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary rounded-0" type="submit">Search</button>
                    @if (request('category') || request('author') || request('search'))
                        <a href="{{ route('posts') }}" class="btn btn-danger rounded-0" type="submit">Batal</a>
                    @endif
                </div>
            </form>
        </div>
    </div>
    @if ($posts->count() && !(request('category') || request('author') || request('search')))
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow: hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}"
                        class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center">
                <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                        class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
                <p>
                    <small class="text-body-secondary">
                        By. <a href="/posts?author={{ $posts[0]->author->username }}"
                            class="text-secondary text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                            href="/posts?category={{ $posts[0]->category->slug }}"
                            class="text-info-emphasis text-decoration-none">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary text-decoration-none">Read more</a>
            </div>
        </div>
    @endif
    <div class="container">
        <div class="row">
            @forelse ($posts as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-2 " style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">
                                {{ $post->category->name }}
                            </a>
                        </div>
                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
                            alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <a href="/posts/{{ $post->slug }}">
                                <h5 class="card-title">{{ str()->limit($post->title, 55) }}</h5>
                            </a>
                            <p>
                                <small class="text-body-secondary">
                                    By. <a href="/posts?author={{ $post->author->username }}"
                                        class="text-decoration-none">{{ $post->author->name }}</a>
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                            </p>
                            <p class="card-text">{{ str()->limit($post->excerpt, 70) }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                    </div>
                </div>
            @empty
                <div class="row justify-content-center text-center">

                    <div class="col-12">
                        <h5 class="text-center">No post found.</h5>
                    </div>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-end">
            {{ $posts->links() }}
        </div>
    </div>
@endsection

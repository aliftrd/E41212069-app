@extends('layouts.app')

@section('title', 'Post')

@section('content')
    <div class="container">
        <div class="p-4">
            <div class="d-block d-md-flex flex-wrap justify-content-center gap-2">
                @forelse($posts as $post)
                    <div class="card mt-4 mt-lg-0">
                        <div class="position-relative">
                            <img src="{{ $post->thumbnail }}" class="card-img-top" height="200" loading="lazy">
                            <div class="position-absolute bottom-0 start-0 bg-dark text-white p-2">
                                {{ $post->date }}
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <small class="text-muted">{{ str($post->body)->limit(30, '..') }}</small>
                            <p class="mb-0">
                                {{ $post->author }}
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="card">
                        <div class="card-body">
                            <p>Belum ada post</p>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection

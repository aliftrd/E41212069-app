@extends('layouts.app')

@section('title', 'Post')

@section('content')
    <div class="container">
        <div class="p-4">
            <div class="d-block d-md-flex flex-wrap justify-content-center gap-2">
                @forelse($posts as $post)
                    <div class="card mt-4 mt-lg-0">
                        <div class="position-relative">
                            <img src="{{ asset('backend/images/card_2.jpeg') }}" class="card-img-top" style="object-fit:cover;" height="200" loading="lazy">
                            <div class="position-absolute bottom-0 start-0 bg-dark text-white p-2">
                                {{ $post->created_at->format('d M Y') }}
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">{{ str($post->content)->limit(25, '..') }}</h5>
                            <small class="text-muted">{{ str($post->content)->limit(30, '..') }}</small>
                            <p class="mb-0">
                                <span class="btn btn-primary btn-sm disabled">{{ $post->category->title }}</span>
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

@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="p-4">
            <div class="card">
                <div class="card-header">
                    Home
                </div>
                <div class="card-body">
                    Hai, dibawah ini adalah kutipan kesukaan saya.
                    <hr>
                    <figure>
                        <blockquote class="blockquote">
                            <p>It is not uncommon for people to spend their whole life waiting.</p>
                        </blockquote>
                        <figcaption class="blockquote-footer">
                            Eckhart Tolle, <cite title="The Power of Now: A Guide to Spiritual Enlightenment">The Power of
                                Now: A Guide to Spiritual
                                Enlightenment</cite>
                        </figcaption>
                    </figure>

                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="container">
        <div class="p-4">
            <div class="card">
                <div class="card-header"> Sekilas Tentang Saya</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 d-flex justify-content-center">
                            <img src="{{ asset('static/images/orchi.jpeg') }}" alt="profile" class="img-fluid rounded-circle"
                                loading="lazy">
                        </div>
                        <div class="col-md-8 d-flex flex-column justify-content-center">
                            <p>Saya Alif Triadi, seorang mahasiswa sarjana terapan teknologi informasi.</p>
                            <p>Kegemaran saya terhadap dunia komputer membuat saya ingin mempelajari lebih dalam tentang
                                bagaimana perangkat
                                lunak itu dibuat, seperti bagaimana arsitektur, pengalaman, dan kualitas dari kode dari
                                program tersebut.</p>
                            <p>Diluar dari itu saya juga gemar bermain game, membaca buku untuk menambah wawasan diluar dari
                                dunia komputer.</p>
                            <p>Tentu saja, anda juga dapat melihat beberapa proyek yang bisa saya publikasikan dalam situs
                                <a href="https://github.com/aliftrd">Github</a>.
                            </p>
                        </div>
                    </div>

                    <hr>
                    <p>Teknologi yang pernah saya gunakan</p>
                    <ul>
                        @foreach ($techStack as $tech)
                            <li>{{ $tech }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

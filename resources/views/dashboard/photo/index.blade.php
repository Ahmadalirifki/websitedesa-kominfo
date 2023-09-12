@extends('layouts.app', ['title' => 'Berita'])

@section('content')
    {{-- Foto --}}
    <section id="foto" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">DAFTAR PHOTO KEGIATAN</h2>
            </div>
            <div class="row py-5" data-aos="zoom-out-down">
                <div class="row py-5">
                    @foreach ($photos as $photo)
                        <div class="col-lg-3 col-md-6 col-6">
                            <a class="image-link" href="{{ asset('storage/photo/' . $photo->image) }}">
                                <img src="{{ asset('storage/photo/' . $photo->image) }}" class="img-fluid" alt="">
                            </a>
                            <p>{{ $photo->judul }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

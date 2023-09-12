@extends('layouts.app', ['title' => 'Berita'])

@section('content')
    {{-- Berita --}}
    <section id="berita" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">DAFTAR KECAMATAN KABUPATEN LAMONGAN</h2>
            </div>
            <div class="row py-5" data-aos="zoom-out-down">
                @foreach ($artikels as $item)
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('storage/artikel/' . $item->image) }}" style="height: 150px; width: 150px;"
                                class="img-fluid mb-3" alt="">
                            <div class="konten-berita">
                                <p class="mb-3 text-secondary">{{ $item->create_at }}</p>
                                <h4 class="fw-bold mb-3">{{ $item->judul }}</h4>
                                <p class="text-secondary">#KominfoModern</p>
                                <a href="/detailBerita/{{ $item->slug }}"
                                    class="text-decoration-none text-danger">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    {{-- End Berita --}}
@endsection

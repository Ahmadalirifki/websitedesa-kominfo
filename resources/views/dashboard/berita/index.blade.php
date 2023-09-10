@extends('layouts.app', ['title' => 'Berita'])

@section('content')
    {{-- Berita --}}
    <section id="berita" class="py-5">
        <div class="container py-5">
            <div class="header-berita text-center">
                <h2 class="fw-bold">BERITA KEGIATAN KOMINFO LAMONGAN</h2>
            </div>
            <div class="row py-5" data-aos="zoom-out-down">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/gambarkegiatan1.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="mb-3 text-secondary">21/21/2023</p>
                            <h4 class="fw-bold mb-3">Kegiatan apa aja</h4>
                            <p class="text-secondary">#KominfoModern</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/gambarkegiatan1.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="mb-3 text-secondary">21/21/2023</p>
                            <h4 class="fw-bold mb-3">Kegiatan apa aja</h4>
                            <p class="text-secondary">#KominfoModern</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/gambarkegiatan1.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-berita">
                            <p class="mb-3 text-secondary">21/21/2023</p>
                            <h4 class="fw-bold mb-3">Kegiatan apa aja</h4>
                            <p class="text-secondary">#KominfoModern</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-berita text-center">
                <a href="" class="btn btn-outline-danger">Berita Lainnya</a>
            </div>
        </div>
    </section>
    {{-- End Berita --}}
@endsection

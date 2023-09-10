@extends('layouts.app', ['title' => 'Admin'])

@section('content')
    <section style="margin-top: 100px">
        <div class="container col-xxl-8 py-5">
            <h3 class="fw-bold mb-3">Halaman Dashboard Admin</h3>
            <p>Selamat Datang di halaman Dashboard Admin</p>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="" class="card-img-top" alt="Foto">
                        <div class="card-body">
                            <h5 class="card-title">Blog Artikel</h5>
                            <p class="card-text">Atur Dan Kelola Artikel Kegiatan Website Desa</p>
                            <a href="{{ route('blog') }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card shadow-sm rounded-3 border-0">
                        <img src="" class="card-img-top" alt="Foto">
                        <div class="card-body">
                            <h5 class="card-title">Photo Kegiatan</h5>
                            <p class="card-text">Kelola Kegiatan Photo</p>
                            <a href="#" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

    {{-- Foto --}}
    <section id="foto" class="section-foto parallax" data-aos="zoom-in-down">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-6">
                <div class="d-flex align-items-center">
                    <div class="stripe-putih me-2"></div>
                    <h5 class="fw-bold text-white">Foto Kegiatan</h5>
                </div>
                <div>
                    <a href="/photoKegiatan" class="btn btn-outline-danger">Foto Lainnya</a>
                </div>
            </div>

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
    </section>
    {{-- End Foto --}}

@extends('admin.master')
@section('content')
    <section>
        <div class="container col-xxl-8 py-5">

            {{-- Navigasi --}}
            <div class="d-flex">
                <a href="{{ route('blog') }}">Desa</a>
                <div class="mx-1"> . </div>
                <a href="">Tambah Desa</a>
            </div>

            <h3 class="fw-bold mb-2">Halaman Tambah Desa</h3>

            <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-4">
                    <label for="">Masukan Desa</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                        id="judul" value="{{ old('judul') }}">
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">Thumbnail</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                        id="image">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="">Artikel</label>
                    <textarea name="desc" id="summernote">
                        {{ old('desc') }}
                    </textarea>
                    @error('desc')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>

        </div>

    </section>
@endsection

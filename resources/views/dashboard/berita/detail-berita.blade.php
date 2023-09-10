@extends('layouts.app', ['title' => 'Detail Berita'])

@section('content')
    <section id="detail" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8">
            <div class="col-mb-3">
                Home / Berita / Kegiatan apa aja
            </div>
            <img src="{{ asset('assets/images/gambarkegiatan1.jpg') }}" class="img-fluid mb-3" alt="">
            <div class="konten-berita">
                <p class="mb-3 text-secondary">21/21/2023</p>
                <h4 class="fw-bold mb-3">Kegiatan apa aja</h4>
                <p class="text-secondary">#KominfoModern</p>
                <a href="" class="text-decoration-none text-danger">Lorem ipsum, dolor sit amet consectetur
                    adipisicing elit. Et nobis architecto consequatur excepturi aperiam iste cupiditate illo hic harum
                    laborum. At hic totam placeat illum voluptatem illo nesciunt voluptates harum. Lorem ipsum dolor sit,
                    amet consectetur adipisicing elit. Quia blanditiis temporibus harum aspernatur quos in! Aspernatur
                    perspiciatis dolore culpa qui quos ducimus magnam voluptate, quisquam vel minima a illum beatae! Lorem
                    ipsum dolor sit amet consectetur adipisicing elit. Enim ipsum, officia saepe similique sapiente vero
                    tempora ratione veniam commodi aliquam beatae nostrum rerum, eaque nesciunt mollitia iure consequatur
                    fugit ad.</a>
            </div>
        </div>
    </section>
@endsection

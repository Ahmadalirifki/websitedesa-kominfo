@extends('layouts.app', ['title' => 'Visi Misi'])

@section('content')
    <section id="visi" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8">
            <div class="d-flex justify-content-center mb-5 py5">
                <h1>Visi Misi</h1>
            </div>
            <div class="konten-berita d-flex justify-content-center">
                <h2>Terwujudnya Kejayaan Lamongan Yang Berkeadilan </h2>
            </div>
            <div class="container d-flex justify-content-center mt-5">
                <ol>
                    <li>Mewujudkan kemandirian ekonomi daerah melalui optimalisasi potensi unggulan daerah.</li>
                    <li>Mewujudkan SDM unggul, berdaya saing, dan berakhlak yang responsif terhadap perubahan zaman.</li>
                    <li>Membangun infrastruktur handal dan berkeadilan yang berwawasan lingkungan.</li>
                    <li>Mewujudkan kehidupan bermasyarakat yang sejahtera, religius-berbudaya, aktif dalam pembangunan serta
                        lingkungan yang aman dan tentram.</li>
                    <li>Menghadirkan tata kelola pemerintahan yang dinamis serta memberikan pelayanan publik yang
                        berkualitas sebagai upaya optimalisasi reformasi birokrasi.</li>
                </ol>
            </div>

            <div class="d-flex justify-content-center mt-5">
                <h2>11 Program Prioritas</h2>
            </div>
            <div class="d-flex justify-content-center">
                <img src="{{ asset('assets/images/program-prioritas.png') }}" class="img-fluid mb-3" alt="">
            </div>
        </div>
    </section>
@endsection

@extends('layout.app')

@section('content')
<div class="container-fluid p-0">
    <!-- About Section -->
    <section class="resume-section" id="about">
        <div class="resume-section-content">
            <h1 class="mb-0">
                Rizki
                <span class="text-primary">Aditia</span>
                <span class="text-warning">Pratama</span>
            </h1>
            <div class="subheading mb-5">
                <a href="mailto:rizkiaditiapratama848@email.com">rizkiaditiapratama848@email.com</a>
            </div>
            <P>Halo semuanya!
                Perkenalkan, nama saya Rizki aditia pratama. Saya siswa kelas XII PPLG 1 di SMK Bakti Nusantara. Saat ini, saya sedang mendalami jurusan Pengembangan Perangkat Lunak dan Gim (PPLG), di mana saya belajar berbagai hal tentang pemrograman, pengembangan aplikasi, dan dunia teknologi informasi.
                Di luar sekolah, saya juga melakukan hobi saya, misalnya: Bermain game. Saya berharap, melalui pendidikan di SMK Bakti Nusantara ini, saya bisa mengembangkan kemampuan saya lebih jauh dan meraih impian saya untuk berguna di masa depan
                Terima kasih sudah meluangkan waktu untuk mendengarkan perkenalan saya. Saya berharap bisa belajar dan berkembang bersamakalian semua!</P>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="resume-section" id="projects">
        <div class="resume-section-content">
            <h1 class="mb-4">PROJECT</h1>
            <div class="card-group">
                <!-- Card 1 -->
                <div class="card">
                    <img src="img/ss.png" class="card-img-top" alt="Project Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Komentar</h5>
                        <p class="card-text">Tentang memberikan komentar.</p>
                        <p class="card-text">

                        <a class="btn btn-primary" href="/project" role="button">Lihat lebih lanjut</a>
                        </p>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="card">
                    <img src="img/peminjaman.png" class="card-img-top" alt="Project Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Project Title 2</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text">
                        <a class="btn btn-primary" href="/project" role="button">Lihat lebih lanjut</a>
                
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Separator -->
    <hr class="m-0" />
</div>
@endsection
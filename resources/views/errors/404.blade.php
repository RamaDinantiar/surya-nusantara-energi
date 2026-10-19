@extends('layouts.app')

@section('title', 'Halaman Tidak Ditemukan')

@section('content')
    <section class="error-page">
        <div class="container error-inner">
            <p class="error-code" aria-hidden="true">4<span class="error-sun"></span>4</p>
            <div>
                <p class="eyebrow">Galat 404</p>
                <h1>Halaman ini sedang tertutup awan.</h1>
                <p class="lead">Halaman yang Anda cari mungkin sudah dipindahkan atau memang tidak pernah ada.</p>
                <div class="hero-actions">
                    <a href="{{ route('beranda') }}" class="btn btn-sun">Kembali ke Beranda</a>
                    <a href="{{ route('layanan') }}" class="btn btn-ghost">Lihat Layanan</a>
                </div>
            </div>
        </div>
    </section>
@endsection
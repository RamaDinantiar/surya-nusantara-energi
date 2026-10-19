@extends('layouts.app')

@section('title', $item['nama'])

@section('content')
    <section class="page-header">
        <div class="container">
            <nav class="breadcrumb" aria-label="breadcrumb">
                <a href="{{ route('beranda') }}">Beranda</a>
                <span>/</span>
                <a href="{{ route('layanan') }}">Layanan</a>
                <span>/</span>
                <span aria-current="page">{{ $item['nama'] }}</span>
            </nav>
            <h1>{{ $item['nama'] }}</h1>
            <p class="page-header-lead">{{ $item['ringkas'] }}</p>
        </div>
    </section>

    <section class="section">
        <div class="container detail-grid">
            <div class="prose">
                <h2>Tentang layanan ini</h2>
                <p>{{ $item['deskripsi'] }}</p>

                <h2>Yang Anda dapatkan</h2>
                <ul class="check-list">
                    @foreach ($item['fitur'] as $fitur)
                        <li>{{ $fitur }}</li>
                    @endforeach
                </ul>
            </div>

            <aside class="price-card">
                <span class="service-icon">@include('partials.icon', ['nama' => $item['ikon']])</span>
                <dl>
                    <div><dt>Harga</dt><dd>{{ $item['harga'] }}</dd></div>
                    <div><dt>Durasi pengerjaan</dt><dd>{{ $item['durasi'] }}</dd></div>
                </dl>
                <a href="{{ route('kontak') }}" class="btn btn-sun btn-block">Pesan Layanan Ini</a>
                <a href="{{ route('layanan') }}" class="btn btn-ghost btn-block">Kembali ke Layanan</a>
            </aside>
        </div>
    </section>

    <section class="section section-tint">
        <div class="container">
            <div class="section-head">
                <div>
                    <p class="eyebrow">Layanan lain</p>
                    <h2>Mungkin Anda juga butuh.</h2>
                </div>
            </div>
            <div class="card-grid card-grid-2">
                @foreach ($lainnya as $slug => $lain)
                    <a href="{{ route('layanan.detail', $slug) }}" class="service-card">
                        <span class="service-icon">@include('partials.icon', ['nama' => $lain['ikon']])</span>
                        <h3>{{ $lain['nama'] }}</h3>
                        <p>{{ $lain['ringkas'] }}</p>
                        <span class="service-price">{{ $lain['harga'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    {{-- HERO --}}
    <section class="hero">
        <div class="container hero-grid">
            <div class="hero-copy">
                <p class="eyebrow">Energi surya untuk Indonesia</p>
                <h1>Atap Anda bisa jadi <span class="hl">pembangkit listrik.</span></h1>
                <p class="lead">Kami merancang, memasang, dan merawat panel surya untuk rumah dan bisnis, supaya tagihan listrik turun dan udara kita lebih bersih.</p>
                <div class="hero-actions">
                    <a href="{{ route('layanan') }}" class="btn btn-sun">Lihat Layanan</a>
                    <a href="{{ route('tentang') }}" class="btn btn-ghost">Kenali Kami</a>
                </div>
            </div>

            <div class="hero-art" aria-hidden="true">
                <svg viewBox="0 0 480 420">
                    <circle cx="340" cy="120" r="150" class="ring"/>
                    <circle cx="340" cy="120" r="115" class="ring"/>
                    <circle cx="340" cy="120" r="78" class="sun"/>
                    <line x1="0" y1="396" x2="480" y2="396" class="ground"/>
                    <g class="legs">
                        <line x1="180" y1="360" x2="180" y2="396"/>
                        <line x1="300" y1="330" x2="300" y2="396"/>
                        <line x1="420" y1="300" x2="420" y2="396"/>
                    </g>
                    <polygon points="60,260 300,200 420,300 180,360" class="panel"/>
                    <g class="cells">
                        <line x1="100" y1="293.3" x2="340" y2="233.3"/>
                        <line x1="140" y1="326.7" x2="380" y2="266.7"/>
                        <line x1="120" y1="245" x2="240" y2="345"/>
                        <line x1="180" y1="230" x2="300" y2="330"/>
                        <line x1="240" y1="215" x2="360" y2="315"/>
                    </g>
                    <polygon points="200,225 230,218 290,268 260,275" class="glint"/>
                </svg>
            </div>
        </div>

        <div class="container">
            <dl class="stats">
                <div><dt>Instalasi selesai</dt><dd>500+</dd></div>
                <div><dt>Provinsi terlayani</dt><dd>12</dd></div>
                <div><dt>Kapasitas terpasang</dt><dd>3,2 MWp</dd></div>
                <div><dt>Garansi performa</dt><dd>25 thn</dd></div>
            </dl>
        </div>
    </section>

    {{-- LAYANAN --}}
    <section class="section">
        <div class="container">
            <div class="section-head">
                <div>
                    <p class="eyebrow">Layanan</p>
                    <h2>Dari survei sampai servis, satu tim yang sama.</h2>
                </div>
                <a href="{{ route('layanan') }}" class="link-arrow">Semua layanan</a>
            </div>

            <div class="card-grid">
                @foreach ($layanan as $slug => $item)
                    <a href="{{ route('layanan.detail', $slug) }}" class="service-card">
                        <span class="service-icon">@include('partials.icon', ['nama' => $item['ikon']])</span>
                        <h3>{{ $item['nama'] }}</h3>
                        <p>{{ $item['ringkas'] }}</p>
                        <span class="service-price">{{ $item['harga'] }}</span>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CARA KERJA --}}
    <section class="section section-tint">
        <div class="container">
            <div class="section-head">
                <div>
                    <p class="eyebrow">Cara kerja</p>
                    <h2>Empat langkah menuju listrik mandiri.</h2>
                </div>
            </div>

            <ol class="steps">
                <li>
                    <h3>Survei gratis</h3>
                    <p>Teknisi datang mengukur atap, arah matahari, dan memeriksa instalasi listrik Anda.</p>
                </li>
                <li>
                    <h3>Desain &amp; penawaran</h3>
                    <p>Kami hitung kapasitas, simulasi penghematan, dan memberi penawaran harga yang transparan.</p>
                </li>
                <li>
                    <h3>Instalasi</h3>
                    <p>Pemasangan 3–7 hari kerja, termasuk pengurusan izin dan net-metering PLN.</p>
                </li>
                <li>
                    <h3>Pantau &amp; rawat</h3>
                    <p>Produksi listrik terpantau lewat aplikasi, dan kami siap untuk servis berkala.</p>
                </li>
            </ol>
        </div>
    </section>

    @include('partials.cta')
@endsection
@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
    @include('partials.page-header', [
        'label'     => 'Tentang kami',
        'judul'     => 'Sepuluh tahun memanen sinar matahari.',
        'deskripsi' => 'PT Surya Nusantara Energi berdiri pada 2015 dengan satu keyakinan: negeri yang disinari matahari sepanjang tahun layak punya listrik yang bersih dan terjangkau.',
    ])

    <section class="section">
        <div class="container split">
            <div class="prose">
                <h2>Cerita kami</h2>
                <p>Kami berawal dari tim kecil berisi tiga insinyur listrik di Jakarta yang memasang panel surya di atap rumah tetangga. Dari situ, permintaan datang dari kantor, sekolah, hingga pabrik.</p>
                <p>Kini kami telah menyelesaikan lebih dari 500 instalasi di 12 provinsi, dengan tim teknisi bersertifikat yang menangani setiap proyek dari survei sampai servis.</p>
            </div>

            <div class="vm">
                <div class="vm-card">
                    <p class="eyebrow">Visi</p>
                    <p class="vm-text">Menjadi penyedia solusi energi surya terdepan di Asia Tenggara.</p>
                </div>
                <div class="vm-card vm-card-dark">
                    <p class="eyebrow">Misi</p>
                    <ul class="check-list">
                        <li>Menyediakan instalasi berkualitas dengan harga terjangkau.</li>
                        <li>Mengedukasi masyarakat tentang energi bersih.</li>
                        <li>Mengurangi emisi karbon nasional.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-tint">
        <div class="container">
            <div class="section-head">
                <div>
                    <p class="eyebrow">Perjalanan</p>
                    <h2>Tonggak penting kami.</h2>
                </div>
            </div>

            <ol class="timeline">
                <li><span class="year">2015</span><p>Didirikan di Jakarta, menyelesaikan 20 instalasi rumah pertama.</p></li>
                <li><span class="year">2018</span><p>Membuka kantor cabang di Surabaya dan Makassar.</p></li>
                <li><span class="year">2021</span><p>Menembus 1 MWp kapasitas terpasang untuk klien industri.</p></li>
                <li><span class="year">2024</span><p>Meluncurkan aplikasi monitoring produksi listrik untuk pelanggan.</p></li>
            </ol>
        </div>
    </section>

    @include('partials.cta')
@endsection
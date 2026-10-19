@extends('layouts.app')

@section('title', 'Kontak')

@section('content')
    @include('partials.page-header', [
        'label'     => 'Kontak',
        'judul'     => 'Mari bicara soal atap Anda.',
        'deskripsi' => 'Tanyakan apa saja, mulai dari estimasi biaya hingga jadwal survei. Tim kami membalas di hari kerja yang sama.',
    ])

    <section class="section">
        <div class="container contact-grid">
            <div class="contact-cards">
                <div class="contact-card">
                    <p class="eyebrow">Alamat kantor</p>
                    <p class="contact-value">Jl. Matahari No. 10<br>Jakarta Selatan 12160</p>
                </div>
                <div class="contact-card">
                    <p class="eyebrow">Telepon</p>
                    <p class="contact-value"><a href="tel:+622112345678">(021) 1234-5678</a></p>
                </div>
                <div class="contact-card">
                    <p class="eyebrow">Email</p>
                    <p class="contact-value"><a href="mailto:info@suryanusantara.co.id">info@suryanusantara.co.id</a></p>
                </div>
            </div>

            <div class="hours-card">
                <h2>Jam operasional</h2>
                <dl class="hours">
                    <div><dt>Senin – Jumat</dt><dd>08.00 – 17.00</dd></div>
                    <div><dt>Sabtu</dt><dd>08.00 – 13.00</dd></div>
                    <div><dt>Minggu &amp; libur</dt><dd>Tutup</dd></div>
                </dl>
                <a href="mailto:info@suryanusantara.co.id?subject=Jadwal%20Survei%20Panel%20Surya" class="btn btn-sun btn-block">Kirim Email Sekarang</a>
            </div>
        </div>
    </section>
@endsection
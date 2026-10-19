@extends('layouts.app')

@section('title', 'Layanan')

@section('content')
    @include('partials.page-header', [
        'label'     => 'Layanan',
        'judul'     => 'Semua yang Anda butuhkan untuk beralih ke surya.',
        'deskripsi' => 'Pilih layanan sesuai tahap Anda: baru mempertimbangkan, siap memasang, atau ingin merawat sistem yang sudah ada.',
    ])

    <section class="section">
        <div class="container service-list">
            @foreach ($layanan as $slug => $item)
                <article class="service-row">
                    <span class="service-icon">@include('partials.icon', ['nama' => $item['ikon']])</span>

                    <div class="service-row-body">
                        <h2>{{ $item['nama'] }}</h2>
                        <p>{{ $item['ringkas'] }}</p>
                        <ul class="tag-list">
                            @foreach (array_slice($item['fitur'], 0, 3) as $fitur)
                                <li>{{ $fitur }}</li>
                            @endforeach
                        </ul>
                    </div>

                    <div class="service-row-side">
                        <span class="service-price">{{ $item['harga'] }}</span>
                        <a href="{{ route('layanan.detail', $slug) }}" class="btn btn-dark">Lihat detail</a>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    @include('partials.cta')
@endsection
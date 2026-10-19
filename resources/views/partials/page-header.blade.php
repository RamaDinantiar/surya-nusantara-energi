{{-- Dipakai: @include('partials.page-header', ['label' => '...', 'judul' => '...', 'deskripsi' => '...']) --}}
<section class="page-header">
    <div class="container">
        <p class="eyebrow">{{ $label }}</p>
        <h1>{{ $judul }}</h1>
        @if (!empty($deskripsi))
            <p class="page-header-lead">{{ $deskripsi }}</p>
        @endif
    </div>
</section>
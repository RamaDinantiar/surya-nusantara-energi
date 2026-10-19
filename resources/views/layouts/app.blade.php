<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Beranda') | Surya Nusantara Energi</title>
    <meta name="description" content="PT Surya Nusantara Energi — instalasi, perawatan, dan konsultasi panel surya di seluruh Indonesia.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@12..96,500;12..96,700;12..96,800&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sne.css') }}">
</head>
<body>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        // Tombol menu untuk tampilan HP
        document.querySelector('.nav-toggle')?.addEventListener('click', function () {
            const nav = document.querySelector('.site-nav');
            const open = nav.classList.toggle('is-open');
            this.setAttribute('aria-expanded', open);
        });
    </script>
</body>
</html>
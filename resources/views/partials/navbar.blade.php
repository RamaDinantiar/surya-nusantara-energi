<header class="site-header">
    <div class="container header-inner">
        <a href="{{ route('beranda') }}" class="brand">
            <svg class="brand-mark" viewBox="0 0 40 40" aria-hidden="true">
                <circle cx="20" cy="20" r="8" fill="currentColor"/>
                <g stroke="currentColor" stroke-width="3" stroke-linecap="round">
                    <line x1="20" y1="3" x2="20" y2="7"/><line x1="20" y1="33" x2="20" y2="37"/>
                    <line x1="3" y1="20" x2="7" y2="20"/><line x1="33" y1="20" x2="37" y2="20"/>
                    <line x1="8" y1="8" x2="10.8" y2="10.8"/><line x1="29.2" y1="29.2" x2="32" y2="32"/>
                    <line x1="8" y1="32" x2="10.8" y2="29.2"/><line x1="29.2" y1="10.8" x2="32" y2="8"/>
                </g>
            </svg>
            <span>Surya Nusantara<small>Energi</small></span>
        </a>

        <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="site-nav">
            <span></span><span></span><span></span>
            <span class="sr-only">Buka menu</span>
        </button>

        <nav class="site-nav" id="site-nav">
            <a href="{{ route('beranda') }}" class="{{ request()->routeIs('beranda') ? 'active' : '' }}">Beranda</a>
            <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'active' : '' }}">Tentang</a>
            <a href="{{ route('layanan') }}" class="{{ request()->routeIs('layanan*') ? 'active' : '' }}">Layanan</a>
            <a href="{{ route('kontak') }}" class="nav-cta {{ request()->routeIs('kontak') ? 'active' : '' }}">Hubungi Kami</a>
        </nav>
    </div>
</header>
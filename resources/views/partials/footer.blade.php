<footer class="site-footer">
    <div class="container footer-grid">
        <div>
            <p class="footer-brand">Surya Nusantara Energi</p>
            <p class="footer-note">Menghadirkan listrik bersih dari atap rumah dan bisnis di seluruh Indonesia sejak 2015.</p>
        </div>
        <div>
            <p class="footer-title">Halaman</p>
            <ul>
                <li><a href="{{ route('beranda') }}">Beranda</a></li>
                <li><a href="{{ route('tentang') }}">Tentang</a></li>
                <li><a href="{{ route('layanan') }}">Layanan</a></li>
                <li><a href="{{ route('kontak') }}">Kontak</a></li>
            </ul>
        </div>
        <div>
            <p class="footer-title">Kantor</p>
            <ul>
                <li>Jl. Matahari No. 10, Jakarta Selatan</li>
                <li>(021) 1234-5678</li>
                <li>info@suryanusantara.co.id</li>
            </ul>
        </div>
    </div>
    <div class="container footer-bottom">
        <span>&copy; {{ date('Y') }} PT Surya Nusantara Energi</span>
        <span>Praktikum Pemrograman Web Lanjut · Laravel MVC</span>
    </div>
</footer>
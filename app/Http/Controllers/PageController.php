<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    // Data layanan (sementara disimpan di array, nanti bisa diganti database/Model)
    private function dataLayanan(): array
    {
        return [
            'pemasangan-panel-surya' => [
                'nama'      => 'Pemasangan Panel Surya',
                'ikon'      => 'panel',
                'ringkas'   => 'Instalasi PLTS atap untuk rumah, kantor, dan pabrik, dirancang sesuai kebutuhan daya Anda.',
                'deskripsi' => 'Kami merancang dan memasang sistem panel surya dari awal hingga menyala: survei lokasi, perhitungan kapasitas, pengurusan izin, instalasi, sampai pengujian. Setiap sistem dihitung berdasarkan pola pemakaian listrik Anda agar investasinya cepat kembali.',
                'fitur'     => [
                    'Survei lokasi dan analisis atap gratis',
                    'Panel tier-1 dengan garansi performa 25 tahun',
                    'Pengurusan izin dan net-metering PLN',
                    'Monitoring produksi listrik lewat aplikasi',
                ],
                'harga'     => 'Mulai Rp 15.000.000',
                'durasi'    => '3–7 hari kerja',
            ],
            'perawatan-sistem' => [
                'nama'      => 'Perawatan & Servis',
                'ikon'      => 'servis',
                'ringkas'   => 'Pembersihan panel dan pengecekan inverter berkala agar produksi listrik tetap maksimal.',
                'deskripsi' => 'Debu, daun, dan kotoran burung bisa menurunkan produksi listrik hingga 25%. Tim teknisi kami membersihkan panel, memeriksa kabel dan inverter, lalu memberi laporan performa setelah setiap kunjungan.',
                'fitur'     => [
                    'Pembersihan panel tanpa bahan kimia keras',
                    'Pemeriksaan kabel, konektor, dan inverter',
                    'Laporan performa sebelum dan sesudah',
                    'Paket kontrak tahunan lebih hemat',
                ],
                'harga'     => 'Mulai Rp 500.000 / kunjungan',
                'durasi'    => '1 hari',
            ],
            'konsultasi-energi' => [
                'nama'      => 'Konsultasi Energi',
                'ikon'      => 'grafik',
                'ringkas'   => 'Analisis penghematan tagihan listrik dan estimasi waktu balik modal sebelum Anda berinvestasi.',
                'deskripsi' => 'Belum yakin panel surya cocok untuk Anda? Tim ahli kami menganalisis tagihan listrik 12 bulan terakhir, menghitung potensi penghematan, estimasi balik modal, dan merekomendasikan sistem paling efisien sesuai anggaran.',
                'fitur'     => [
                    'Analisis tagihan listrik 12 bulan',
                    'Simulasi penghematan dan balik modal',
                    'Rekomendasi kapasitas dan anggaran',
                    'Konsultasi tatap muka atau online',
                ],
                'harga'     => 'Gratis untuk survei pertama',
                'durasi'    => '1–2 hari',
            ],
        ];
    }

    public function beranda()
    {
        return view('pages.beranda', [
            'layanan' => $this->dataLayanan(),
        ]);
    }

    public function tentang()
    {
        return view('pages.tentang');
    }

    public function layanan()
    {
        return view('pages.layanan', [
            'layanan' => $this->dataLayanan(),
        ]);
    }

    public function detail(string $slug)
    {
        $layanan = $this->dataLayanan();

        // Jika slug tidak ada, tampilkan halaman 404 kustom
        abort_unless(isset($layanan[$slug]), 404);

        return view('pages.detail', [
            'item'    => $layanan[$slug],
            'lainnya' => array_diff_key($layanan, [$slug => true]),
        ]);
    }

    public function kontak()
    {
        return view('pages.kontak');
    }
}
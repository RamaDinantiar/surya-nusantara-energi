<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Mahasiswa</title>
    <style>
        body { font-family: sans-serif; background: #f3f4f6; display: flex; justify-content: center; padding-top: 60px; }
        .card { background: #fff; padding: 32px 40px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,.08); }
        h1 { margin-top: 0; }
        td { padding: 6px 12px 6px 0; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Profil Mahasiswa</h1>
        <table>
            <tr><td>Nama</td><td>: {{ $nama }}</td></tr>
            <tr><td>NIM</td><td>: {{ $nim }}</td></tr>
            <tr><td>Prodi</td><td>: {{ $prodi }}</td></tr>
        </table>
    </div>
</body>
</html>
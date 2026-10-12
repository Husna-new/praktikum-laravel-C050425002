<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Detail Mata Kuliah</title>
</head>
<body>
    <h1>Detail Mata Kuliah</h1>
    <p><strong>Kode MK:</strong> {{ $matakuliah->kode }}</p>
    <p><strong>Nama Mata Kuliah:</strong> {{ $matakuliah->nama }}</p>
    <p><strong>SKS:</strong> {{ $matakuliah->sks }}</p>

    <a href="{{ route('matakuliah.index') }}">&laquo; Kembali ke Daftar</a>
</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    {{-- Poin 2: @yield('judul') untuk judul tab browser --}}
    <title>@yield('judul', 'Aplikasi Akademik')</title>
</head>
<body>
    <header>
        <h2>Sistem Informasi Akademik</h2>
        {{-- Poin 3: Memanggil partial navbar --}}
        @include('partials.navbar')
        <hr>
    </header>

    <main>
        {{-- Tempat konten utama halaman anak dipanggil --}}
        @yield('konten')
    </main>

    <footer>
        <hr>
        <p>&copy; {{ date('Y') }} Praktikum Pemrograman Web</p>
    </footer>
</body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Produk</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 antialiased">
    <div class="md:container mx-auto mt-10">
        <h1 class="text-4xl font-bold text-center mb-8">Tambah Produk</h1>
        <form action="{{ route('produks.store') }}" method="POST" class="max-w-md mx-auto bg-white shadow-md rounded-lg p-8">
            @csrf
            <div class="mb-4">
                <label for="nama" class="block text-gray-700">Nama:</label>
                <input type="text" id="nama" name="nama" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>
            <div class="mb-4">
                <label for="deskripsi" class="block text-gray-700">Deskripsi:</label>
                <textarea id="deskripsi" name="deskripsi" class="w-full border border-gray-300 rounded-lg p-2" required></textarea>
            </div>
            <div class="mb-4">
                <label for="harga" class="block text-gray-700">Harga:</label>
                <input type="number" id="harga" name="harga" class="w-full border border-gray-300 rounded-lg p-2" required>
            </div>
            <div class="text-center">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            </div>
        </form>
    </div>
    @vite('resources/js/app.js')
</body>
</html>

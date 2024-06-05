<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Produk</title>
    @vite('resources/css/app.css')
</head>
<body class="antialiased">
    <div class="md:container mx-auto mt-10">
        <h1 class="text-4xl font-bold text-center mb-8">Daftar Produk</h1>
        <div class="max-w-2xl mx-auto bg-white rounded-lg overflow-hidden relative">
            <a href="{{ route('produks.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded absolute top-0 right-0 m-4">Tambah Produk</a>
            <div class="overflow-x-auto mt-16">
                <table class="w-full">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="py-3 px-4 text-left">ID</th>
                            <th class="py-3 px-4 text-left">Nama</th>
                            <th class="py-3 px-4 text-left">Deskripsi</th>
                            <th class="py-3 px-4 text-left">Harga</th>
                            <th class="py-3 px-4 text-left">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        @forelse ($produks as $produk)
                            <tr class="border-b">
                                <td class="py-3 px-4">{{ $produk->id }}</td>
                                <td class="py-3 px-4">{{ $produk->nama }}</td>
                                <td class="py-3 px-4">{{ $produk->deskripsi }}</td>
                                <td class="py-3 px-4">{{ $produk->harga }}</td>
                                <td class="py-3 px-4">
                                    <a href="{{ route('produks.edit', $produk->id) }}" class="bg-yellow-500 text-white px-2 py-1 rounded">Edit</a>
                                    <form action="{{ route('produks.destroy', $produk->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-2 py-1 rounded">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="text-center py-4">Data tidak tersedia</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>
</html>

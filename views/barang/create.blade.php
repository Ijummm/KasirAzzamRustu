@extends('layouts.app')

@section('title', 'Tambah Barang')

@section('content')
    <form action="{{ route('barang.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="nama" class="mt-1 w-full border border-green-300 rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Stock</label>
            <input type="number" name="stok" class="mt-1 w-full border border-green-300 rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Harga</label>
            <input type="number" name="harga" class="mt-1 w-full border border-green-300 rounded px-3 py-2" required>
        </div>

        <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">Simpan</button>
    </form>
@endsection
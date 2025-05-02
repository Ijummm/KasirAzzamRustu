@extends('layouts.app')

@section('title', 'Tambah Transaksi')

@section('content')
    <form action="{{ route('transaksi.store') }}" method="POST" class="space-y-4">
        @csrf

        <div>
            <label class="block text-sm font-medium text-gray-700">Barang</label>
            <select name="id_barang" class="mt-1 w-full border border-green-300 rounded px-3 py-2" required>
            <option value="">Pilih Barang</option>
                @foreach ($barangs as $barang)
                    <option value="{{ $barang->id }}" data-nama="{{ $barangs->nama }}" data-harga="{{ $barangs->harga }}" data-stok="{{ $barangs->stok }}">
                        {{ $barangs->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Harga Asli</label>
            <input type="number" name="harga_asli" class="mt-1 w-full border border-green-300 rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Nominal Diskon</label>
            <input type="number" name="nominal_diskon" class="mt-1 w-full border border-green-300 rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Harga Setelah Diskon</label>
            <input type="number" name="harga_diskon" class="mt-1 w-full border border-green-300 rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Total Pembelian</label>
            <input type="number" name="total_pembelian" class="mt-1 w-full border border-green-300 rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Keuntungan</label>
            <input type="number" name="keuntungan" class="mt-1 w-full border border-green-300 rounded px-3 py-2" required>
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Tanggal Pembelian</label>
            <input type="date" name="tanggal_pembelian" class="mt-1 w-full border border-green-300 rounded px-3 py-2" required>
        </div>

        <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">Simpan</button>
    </form>
@endsection
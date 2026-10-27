@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h1>Daftar Mahasiswa</h1>

    @if ($adaIpkRendah)
        <x-alert tipe="bahaya">Peringatan: ada mahasiswa dengan IPK di bawah 2,0.</x-alert>
    @endif

    <table border="1" cellpadding="6">
        <tr>
            <th>No</th><th>Nama</th><th>NIM</th><th>IPK</th><th>Keterangan</th><th>Aksi</th>
        </tr>
        @forelse ($mahasiswa as $m)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $m['nama'] }}</td>
                <td>{{ $m['nim'] }}</td>
                <td>{{ number_format($m['ipk'], 2, ',', '.') }}</td>
                <td>
                    @if ($m['ipk'] >= 3.5) Cum Laude
                    @elseif ($m['ipk'] >= 3.0) Baik
                    @else Perlu ditingkatkan
                    @endif
                </td>
                <td><a href="{{ route('mahasiswa.detail', $m['nim']) }}">Detail</a></td>
            </tr>
        @empty
            <tr><td colspan="6">Belum ada data</td></tr>
        @endforelse
    </table>
@endsection
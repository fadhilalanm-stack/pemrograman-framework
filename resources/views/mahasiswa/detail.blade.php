@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>
    <p>Nama: {{ $mhs['nama'] }}</p>
    <p>NIM: {{ $mhs['nim'] }}</p>
    <p>IPK: {{ number_format($mhs['ipk'], 2, ',', '.') }}</p>
    <a href="{{ route('mahasiswa.daftar') }}">Kembali ke daftar</a>
@endsection
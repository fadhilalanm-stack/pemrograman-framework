<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    private function dataMahasiswa(): array
    {
        return [
            ['nama' => 'Fadil Alan', 'nim' => '242520126', 'ipk' => 3.75],
            ['nama' => 'Budi Santoso', 'nim' => '242520127', 'ipk' => 3.20],
            ['nama' => 'Siti Aminah', 'nim' => '242520128', 'ipk' => 3.55],
            ['nama' => 'Rina Wijaya', 'nim' => '242520129', 'ipk' => 2.80],
            ['nama' => 'Dodi Pratama', 'nim' => '242520130', 'ipk' => 1.90],
        ];
    }

    public function profil()
    {
        return view('mahasiswa.profil', [
            'nama' => 'Fadil Alan',
            'nim' => '242520126',
            'prodi' => 'Teknologi Informasi',
        ]);
    }

    public function daftar()
    {
        $mahasiswa = $this->dataMahasiswa();
        $adaIpkRendah = collect($mahasiswa)->contains(fn ($m) => $m['ipk'] < 2.0);

        return view('mahasiswa.daftar', compact('mahasiswa', 'adaIpkRendah'));
    }

    public function detail(string $nim)
    {
        $mhs = collect($this->dataMahasiswa())->firstWhere('nim', $nim);

        if (! $mhs) {
            abort(404);
        }

        return view('mahasiswa.detail', compact('mhs'));
    }
}
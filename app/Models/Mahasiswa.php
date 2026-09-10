<?php

class Mahasiswa
{
    public function getAll()
    {
        return [
            [
                'nim' => '23001',
                'nama' => 'Budi Santoso',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23002',
                'nama' => 'Siti Aminah',
                'prodi' => 'Sistem Informasi'
            ],
            [
                'nim' => '23006',
                'nama' => 'Andi Wijaya',
                'prodi' => 'Teknik Sipil'
            ],
            [
                'nim' => '23007',
                'nama' => 'Fajar Hidayat',
                'prodi' => 'Manajemen Informatika'
            ],
            [
                'nim' => '23008',
                'nama' => 'Nur Aisyah',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23009',
                'nama' => 'Rizky Ramadhan',
                'prodi' => 'Sistem Informasi'
            ]
        ];
    }

    public function getByNim($nim)
    {
        $mahasiswa = $this->getAll();

        foreach ($mahasiswa as $mhs) {
            if ($mhs['nim'] == $nim) {
                return $mhs;
            }
        }

        return null;
    }
}
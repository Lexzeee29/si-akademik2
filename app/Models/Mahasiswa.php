<?php

class Mahasiswa
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function getAll()
    {
        $sql = "SELECT mahasiswa.*,
               prodi.nama AS prodi,
               dosen.nama AS nama_dosen
        FROM mahasiswa
        LEFT JOIN prodi
            ON mahasiswa.prodi_id = prodi.id
        LEFT JOIN dosen
            ON mahasiswa.dosen_id = dosen.id
        ORDER BY mahasiswa.nama ASC";

        $stmt = $this->pdo->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
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
<?php

require_once __dir__ . '/../Models/Mahasiswa.php';

class MahasiswaController
{
    public function index()
    {
        global $pdo;

        $model = new Mahasiswa($pdo);

        $mahasiswa = $model->getAll();

        require_once __dir__ . '/../Views/mahasiswa/index.php';
    }

    public function detail()
    {
        global $pdo;

        $model = new Mahasiswa($pdo);
        
        $nim = $_GET['nim'];

        $mahasiswa = $model->getByNim($nim);

        require_once __dir__ . '/../Views/mahasiswa/detail.php';
    }
}
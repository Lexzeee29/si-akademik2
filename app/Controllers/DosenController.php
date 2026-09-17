<?php 
 
require_once __DIR__ . '/../Models/Dosen.php'; 
 
class DosenController 
{ 
    public function index() 
    { 
        global $pdo; 
 
        $model = new Dosen($pdo); 
        $dosen = $model->getAll(); 
 
        require_once __DIR__ . '/../Views/dosen/index.php'; 
    } 

    public function create()
    {
        require_once __DIR__ . '/../Views/dosen/create.php';
    }

    public function store()
    {
        global $pdo;

        $model = new Dosen($pdo);
        $model->create([
            'nidn' => trim($_POST['nidn'] ?? ''),
            'nama' => trim($_POST['nama'] ?? ''),
            'bidang_keahlian' => trim($_POST['bidang_keahlian'] ?? '')
        ]);

        header('Location: ' . BASE_URL . '/dosen');
        exit;
    }

    public function edit($id)
    {
        global $pdo;

        $model = new Dosen($pdo);
        $dosen = $model->getById($id);

        if (!$dosen) {
            http_response_code(404);
            echo 'Data dosen tidak ditemukan.';
            return;
        }

        require_once __DIR__ . '/../Views/dosen/edit.php';
    }

    public function update($id)
    {
        global $pdo;

        $model = new Dosen($pdo);
        $model->update($id, [
            'nidn' => trim($_POST['nidn'] ?? ''),
            'nama' => trim($_POST['nama'] ?? ''),
            'bidang_keahlian' => trim($_POST['bidang_keahlian'] ?? '')
        ]);

        header('Location: ' . BASE_URL . '/dosen');
        exit;
    }

    public function delete($id)
    {
        global $pdo;

        $model = new Dosen($pdo);
        $model->delete($id);

        header('Location: ' . BASE_URL . '/dosen');
        exit;
    }
}
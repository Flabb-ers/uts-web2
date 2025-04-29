<?php
require_once __DIR__ . '/../models/Jurusan.php';

class JurusanController
{
    private $jurusan;

    public function __construct()
    {
        $this->jurusan = new Jurusan();
    }

    public function index()
    {
        $jurusanList = $this->jurusan->getAllJurusan();
        $this->view('jurusan/index', ['jurusans' => $jurusanList]);
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nama_jurusan' => $_POST['nama_jurusan']
            ];
            $this->jurusan->addJurusan($data);
            header('Location: /jurusan');
            exit;
        } else {
            $this->view('jurusan/create');
        }
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'id' => $id,
                'nama_jurusan' => $_POST['nama_jurusan']
            ];
            $this->jurusan->updateJurusan($data);
            header('Location: /jurusan');
            exit;
        } else {
            $jurusan = $this->jurusan->getJurusanById($id);
            $this->view('jurusan/edit', ['jurusan' => $jurusan]);
        }
    }

    public function delete($id)
    {
        $this->jurusan->deleteJurusan($id);
        header('Location: /jurusan');
        exit;
    }

    private function view($view, $data = [])
    {
        extract($data);
        require_once __DIR__ . '/../views/' . $view . '.php';
    }
}
?>

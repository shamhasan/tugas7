<?php
require_once __DIR__ . '/../models/Mahasiswa.php';

class MahasiswaController {
    private $model;

    public function __construct() {
        $this->model = new Mahasiswa();
    }

    public function index() {
        $mahasiswas = $this->model->readAll();
        include __DIR__ . '/../views/mahasiswa/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->nama = $_POST['nama'];
            $this->model->nim = $_POST['nim'];
            if ($this->model->create()) {
                header("Location: index.php");
                exit;
            } else {
                echo "Error creating record.";
            }
        } else {
            include __DIR__ . '/../views/mahasiswa/create.php';
        }
    }

    public function edit() {
        if (!isset($_GET['id'])) {
            header("Location: index.php");
            exit;
        }
        $this->model->id = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model->nama = $_POST['nama'];
            $this->model->nim = $_POST['nim'];
            if ($this->model->update()) {
                header("Location: index.php");
                exit;
            } else {
                echo "Error updating record.";
            }
        } else {
            $mahasiswa = $this->model->readOne();
            if (!$mahasiswa) {
                echo "Record not found.";
                exit;
            }
            include __DIR__ . '/../views/mahasiswa/edit.php';
        }
    }

    public function delete() {
        if (!isset($_GET['id'])) {
            header("Location: index.php");
            exit;
        }
        $this->model->id = $_GET['id'];
        if ($this->model->delete()) {
            header("Location: index.php");
            exit;
        } else {
            echo "Error deleting record.";
        }
    }
}
?>

<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\CrudModel;

class CRUDController extends BaseController
{
    public function index()
    {
        $model = new CrudModel();
        return view('index', [
            "data" => $model->findAll() // SEECT * FROM crud
        ]);
    }

    public function tambah()
    {
        return view('create');
    }

    public function simpan()
    {
        $nama = $this->request->getPost('nama');
        $nim = $this->request->getPost('nim');
        $alamat = $this->request->getPost('alamat');

        $model = new CrudModel();
        $model->insert([
            "nama" => $nama,
            "nim" => $nim,
            "alamat" => $alamat
        ]);

        return redirect()->to(base_url('/'));
    }
}

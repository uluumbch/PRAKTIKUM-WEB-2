<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\CrudModel;

class CrudSeeder extends Seeder
{
    public function run()
    {
        $model = new CrudModel();
        $model->insert([
            "nama" => "bachrul uluum",
            "nim" => "2010817210025",
            "alamat" => "jl blablabla"
        ]);
    }
}

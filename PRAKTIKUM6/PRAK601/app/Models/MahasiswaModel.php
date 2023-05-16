<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
   protected $nama = "Bachrul Uluum";

   public function getNama()
   {
    return $this->nama;
   }
}
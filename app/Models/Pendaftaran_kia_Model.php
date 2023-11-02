<?php

namespace App\Models;

use CodeIgniter\Model;

class Pendaftaran_kia_Model extends Model
{
  protected $table = 'pendaftaran_kia';
  protected $useTimeStamps = true;
  protected $allowedFields = ['namapemohon', 'emailpemohon', 'nomorpemohon', 'aktakelahiran', 'kartukeluarga', 'pasfoto'];

  public function getDataKIA($nama = false)
  {
    // Jika nama pemohon == false maka yang akan ditampilkan semua
    if ($nama == false) {
      return $this->findAll();
    }

    // Namun jika nama pemohon == true makan akan ditampilkan nama tersebut saja
    return $this->where(['namapemohon' => $nama])->first();
  }
}

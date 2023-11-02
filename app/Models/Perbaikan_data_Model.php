<?php

namespace App\Models;

use CodeIgniter\Model;

class Perbaikan_data_Model extends Model
{
  protected $table = 'perbaikan_data';
  protected $useTimeStamps = true;
  protected $allowedFields = ['namapemohon', 'emailpemohon', 'nomorpemohon', 'berkasperbaikan1', 'berkasperbaikan2', 'penjelasanperbaikan'];

  public function getPerbaikanData($nama = false)
  {
    // Jika nama pemohon == false maka yang akan ditampilkan semua
    if ($nama == false) {
      return $this->findAll();
    }

    // Namun jika nama pemohon == true makan akan ditampilkan nama tersebut saja
    return $this->where(['namapemohon' => $nama])->first();
  }
}

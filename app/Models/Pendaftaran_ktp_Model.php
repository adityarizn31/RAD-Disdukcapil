<?php

namespace App\Models;

use CodeIgniter\Model;

class Pendaftaran_ktp_Model extends Model
{
  protected $table = 'pendaftaran_ktp';
  protected $useTimeStamps = true;
  protected $allowedFields = ['namapemohon', 'emailpemohon', 'nomorpemohon', 'formulirf102ktp', 'kartukeluarga'];

  public function getDataKTP($nama = false)
  {
    // Jika nama pemohon == false maka yang akan ditampilkan semua
    if ($nama == false) {
      return $this->findAll();
    }

    // Namun jika nama pemohon == true makan akan ditampilkan nama tersebut saja
    return $this->where(['namapemohon' => $nama])->first();
  }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengaduan_update_Model extends Model
{
  protected $table = 'pengaduan_update';
  protected $useTimeStamps = true;
  protected $allowedFields = ['namapemohon', 'emailpemohon', 'nomorpemohon', 'kartutandapenduduk', 'kartukeluarga', 'pengaduanupdate'];

  public function getDataPengaduanUpdate($nama = false)
  {
    // Jika nama pemohon == false maka yang akan ditampilkan semua
    if ($nama == false) {
      return $this->findAll();
    }

    // Namun jika nama pemohon == true makan akan ditampilkan nama tersebut saja
    return $this->where(['namapemohon' => $nama])->first();
  }
}

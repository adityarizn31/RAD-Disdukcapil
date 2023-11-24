<?php

namespace App\Models;

use CodeIgniter\Model;

class Perbaikan_nik_Model extends Model
{
  protected $table = 'perbaikan_nik';
  protected $useTimeStamps = true;
  protected $allowedFields = ['namapemohon', 'emailpemohon', 'nomorpemohon', 'alamatpemohon', 'kartutandapenduduk', 'kartukeluarga'];

  public function getDataPerbaikanNIK($nama = false)
  {
    // Jika nama pemohon == false maka yang akan ditampilkan semua
    if ($nama == false) {
      return $this->findAll();
    }

    // Namun jika nama pemohon == true makan akan ditampilkan nama tersebut saja
    return $this->where(['namapemohon' => $nama])->first();
  }

  public function search($keyword)
  {
    return $this->table('perbaikan_nik')->like('namapemohon', $keyword);
  }
}

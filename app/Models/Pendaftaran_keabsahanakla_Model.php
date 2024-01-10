<?php

namespace App\Models;

use CodeIgniter\Model;

class Pendaftaran_keabsahanakla_Model extends Model
{
  protected $table = 'pendaftaran_keabsahanakla';
  protected $useTimeStamps = true;
  protected $allowedFields = ['namapemohon', 'emailpemohon', 'nomorpemohon', 'alamatpemohon', 'aktakelahiran', 'kartutandapenduduk'];

  public function getDataKeabsahanakla($nama = false)
  {
    // Jika nama pemohon == false maka yang akan ditampilkan semua
    if ($nama == false) {
      return $this->findAll();
    }

    // Namun jika nama pemohon == true makan akan ditampilkan nama tersebut saja
    return $this->where(['namapemohon' => $nama])->first();
  }
}

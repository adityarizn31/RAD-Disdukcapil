<?php

namespace App\Models;

use CodeIgniter\Model;

class Pendaftaran_aktakelahiran_Model extends Model
{
  protected $table = 'pendaftaran_aktakelahiran';
  protected $useTimeStamps = true;
  protected $allowedFields = ['namapemohon', 'emailpemohon', 'nomorpemohon', 'alamatpemohon', 'formulirf201akta', 'suratketeranganlahir', 'kartukeluarga', 'ktpayah', 'ktpibu'];

  public function getDataAktaKelahiran($nama = false)
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
    return $this->table('pendaftaran_aktakelahiran')->like('namapemohon', $keyword);
  }
}

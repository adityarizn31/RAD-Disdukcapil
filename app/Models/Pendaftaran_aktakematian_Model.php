<?php

namespace App\Models;

use CodeIgniter\Model;

class Pendaftaran_aktakematian_Model extends Model
{
  protected $table = 'pendaftaran_aktakematian';
  protected $useTimeStamps = true;
  protected $allowedFields = ['namapemohon', 'emailpemohon', 'nomorpemohon', 'alamatpemohon', 'kartukeluarga', 'suratkematian'];

  public function getDataAktaKematian($nama = false)
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
    return $this->table('pendaftaran_aktakematian')->like('namapemohon', $keyword);
  }
}

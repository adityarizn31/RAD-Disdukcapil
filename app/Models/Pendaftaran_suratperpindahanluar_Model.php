<?php

namespace App\Models;

use CodeIgniter\Model;

class Pendaftaran_suratperpindahanluar_Model extends Model
{
  protected $table = 'pendaftaran_suratperpindahanluar';
  protected $useTimeStamps = true;
  protected $allowedFields = ['namapemohon', 'emailpemohon', 'nomorpemohon', 'alamatpemohon', 'skpwni', 'kartutandapenduduk'];

  public function getDataSuratPerpindahanLuar($nama = false)
  {
    if ($nama == false) {
      return $this->findAll();
    }

    return $this->where(['namapemohon' => $nama])->first();
  }
}

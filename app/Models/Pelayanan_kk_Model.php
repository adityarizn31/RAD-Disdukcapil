<?php

namespace App\Models;

use CodeIgniter\Model;

class Pelayanan_kk_Model extends Model
{
  protected $table = 'pelayanan_kk';
  protected $useTimeStamps = true;
  protected $allowedFields = ['fotopelayanan', 'judulpelayanan'];

  public function getDataPelayananKK($pelayanan_kk = false)
  {
    if ($pelayanan_kk == false) {
      return $this->findAll();
    }

    return $this->where(['judulpelayanan' => $pelayanan_kk])->first();
  }
}

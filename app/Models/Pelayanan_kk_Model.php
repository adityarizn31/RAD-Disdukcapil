<?php

namespace App\Models;

use CodeIgniter\Model;

class Pelayanan_kk_Model extends Model
{
  protected $table = 'pelayanan_kk';
  protected $useTimeStamps = true;
  protected $allowedFields = ['fotopelayanan', 'judulpelayanan'];

  public function getDataPelayananKK($judulPelayanan = false)
  {
    if ($judulPelayanan == false) {
      return $this->findAll();
    }

    return $this->where(['judulpelayanan' => $judulPelayanan])->first();
  }
}

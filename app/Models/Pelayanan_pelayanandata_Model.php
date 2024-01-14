<?php

namespace App\Models;

use CodeIgniter\Model;

class Pelayanan_pelayanandata_Model extends Model
{
  protected $table = 'pelayanan_data';
  protected $useTimeStamps = true;
  protected $allowedFields = ['fotopelayanan', 'judulpelayanan', 'keteranganpelayanan'];

  public function getDataPelayananData($judulPelayanan = false)
  {
    if ($judulPelayanan == false) {
      return $this->findAll();
    }

    return $this->where(['judulpelayanan' => $judulPelayanan])->first();
  }
}

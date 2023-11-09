<?php

namespace App\Models;

use CodeIgniter\Model;

class Pelayanan_kia_Model extends Model
{
  protected $table = 'pelayanan_kia';
  protected $useTimeStamps = true;
  protected $allowedFields = ['fotopelayanan', 'judulpelayanan', 'keteranganpelayanan'];

  public function getDataPelayananKIA($judulPelayanan = false)
  {
    // Jika Judul Pelayanan == false maka yang akan ditampilkan 
    if ($judulPelayanan == false) {
      return $this->findAll();
    }

    return $this->where(['judulpelayanan' => $judulPelayanan])->first();
  }
}

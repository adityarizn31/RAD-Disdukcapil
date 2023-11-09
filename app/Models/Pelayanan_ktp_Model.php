<?php

namespace App\Models;

use CodeIgniter\Model;

class Pelayanan_ktp_Model extends Model
{
  protected $table = 'pelayanan_ktp';
  protected $useTimeStamps = true;
  protected $allowedFields = ['fotopelayanan', 'judulpelayanan', 'keteranganpelayanan'];

  public function getDataPelayananKTP($judulPelayanan = false)
  {
    // Jika
    if ($judulPelayanan == false) {
      return $this->findAll();
    }

    return $this->where(['judulpelayanan' => $judulPelayanan])->first();
  }
}

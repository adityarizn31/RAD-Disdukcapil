<?php

namespace App\Models;

use CodeIgniter\Model;

class Pelayanan_suratperpindahanluar_Model extends Model
{
  protected $table = 'pelayanan_suratperpindahanluar';
  protected $useTimeStamps = true;
  protected $allowedFields = ['fotopelayanan', 'judulpelayanan'];

  public function getDataPelayananSuratPerpindahanLuar($judulPelayanan = false)
  {
    // Jika
    if ($judulPelayanan == false) {
      return $this->findAll();
    }

    return $this->where(['judulpelayanan' => $judulPelayanan])->first();
  }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class Pelayanan_suratperpindahan_Model extends Model
{
  protected $table = 'pelayanan_suratperpindahan';
  protected $useTimeStamps = true;
  protected $allowedFields = ['fotopelayanan', 'judulpelayanan'];

  public function getDataPelayananSuratPerpindahan($judulPelayanan = false)
  {
    // Jika
    if ($judulPelayanan == false) {
      return $this->findAll();
    }

    return $this->where(['judulpelayanan' => $judulPelayanan])->first();
  }
}

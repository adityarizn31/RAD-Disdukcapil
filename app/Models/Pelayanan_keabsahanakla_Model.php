<?php

namespace App\Models;

use CodeIgniter\Model;

class Pelayanan_keabsahanakla_Model extends Model
{
  protected $table = 'pelayanan_keabsahanakla';
  protected $useTimeStamps = true;
  protected $allowedFields = ['fotopelayanan', 'judulpelayanan'];

  public function getDataKeabsahanAkla($judulPelayanan = false)
  {
    // Jika Judul Pelayanan == false maka y1ang akan ditampilkan 
    if ($judulPelayanan == false) {
      return $this->findAll();
    }

    return $this->where(['judulpelayanan' => $judulPelayanan])->first();
  }
}

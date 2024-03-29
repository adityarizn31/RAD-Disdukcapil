<?php

namespace App\Models;

use CodeIgniter\Model;

class PelayananModel extends Model
{
  protected $table = 'pelayanan';
  protected $useTimeStamps = true;
  protected $allowedFields = ['fotopelayanan', 'judulpelayanan'];

  public function getDataPelayanan($judulPelayanan = false)
  {
    // Jika Judul Pelayanan == false maka yang akan ditampilkan yaitu keseluruhan
    if ($judulPelayanan == false) {
      return $this->findAll();
    }

    // Namun jika judul pelayanan == true maka akan ditampilkan judul tersebut
    return $this->where(['judulpelayanan' => $judulPelayanan])->first();
  }
}

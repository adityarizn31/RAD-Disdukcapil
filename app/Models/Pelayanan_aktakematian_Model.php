<?php

namespace App\Models;

use CodeIgniter\Model;

class Pelayanan_aktakematian_Model extends Model
{
  protected $table = 'pelayanan_aktakematian';
  protected $useTimeStamps = true;
  protected $allowedFields = ['fotopelayanan', 'judulpelayanan', 'keteranganpelayanan'];

  public function getDataPelayananAktaKematian($judulPelayanan = false)
  {
    // Jika Judul Pelayanan == false maka yang akan ditampilkan 
    if ($judulPelayanan == false) {
      return $this->findAll();
    }

    return $this->where(['judulpelayanan' => $judulPelayanan])->first();
  }
}

<?php

namespace App\Models;

use CodeIgniter\Model;

class Sukses_kk_Model extends Model
{
  protected $table = 'suksesKK';
  protected $useTimeStamps = true; // Mengaktifkan Created at dan Updated at
  protected $allowedFields = ['namapemohon', 'emailpemohon', 'nomorpemohon', 'alamatpemohon', 'formulirdesa', 'kartukeluargasuami', 'kartukeluargaistri', 'suratnikah', 'suratpindah'];

  public function getDataSuksesKK($nama = false)
  {
    // Jika nama pemohon == false maka yang akan ditampilkan semua
    if ($nama == false) {
      return $this->findAll();
    }

    // Namun jika nama pemohon == true makan akan ditampilkan nama tersebut saja
    return $this->where(['namapemohon' => $nama])->first();
  }
}

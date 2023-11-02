<?php

namespace App\Models;

use CodeIgniter\Model;

class VisiMisiModel extends Model
{
  //Cara menghubungkan Model dengan Tabel
  protected $table = 'visimisi';
  protected $useTimeStamps =  true;
  protected $allowedFields = ['visi1', 'misi1', 'visi2', 'misi2', 'visi3', 'misi3', 'visi4', 'misi4', 'visi5', 'misi5'];

  // Digunakan untuk menampilkan detail suatu berita
  public function getVisiMisi($visiMisi = false)
  {
    // Jika visimisi == false maka yang ditampilkan akan semua
    if ($visiMisi == false) {
      return $this->findAll();
    }

    // Namun jika visimisi == true maka ditampilkan hanya satu
    return $this->where(['visi1' => $visiMisi])->first();
  }
}

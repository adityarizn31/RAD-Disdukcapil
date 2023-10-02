<?php

namespace App\Models;

use CodeIgniter\Model;

class BeritaModel extends Model
{
  //Cara menghubungkan Model dengan Tabel
  protected $table = 'berita';
  protected $useTimeStamps = true; // Mengaktifkan Fitur Created_at & Updated_at
  protected $allowedFields = ['fotoberita', 'judulberita', 'keteranganberita'];

  public function getBerita($judul = false)
  {
    // Jika judul == false maka yang ditampilkan semua
    if ($judul == false) {
      return $this->findAll();
    }

    // Namun jika judul == true maka ditampilkan hanya satu
    return $this->where(['judulberita' => $judul])->first();
  }
}

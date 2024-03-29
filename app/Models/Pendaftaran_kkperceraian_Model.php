<?php

namespace App\Models;

use CodeIgniter\Model;

class Pendaftaran_kkperceraian_Model extends Model
{
  protected $table = 'pendaftaran_kk_perceraian';
  protected $useTimeStamps = true; // Mengaktifkan Created at dan Updated at
  protected $allowedFields = ['namapemohon', 'emailpemohon', 'nomorpemohon', 'alamatpemohon', 'kartukeluargalama', 'aktaperceraian', 'status'];

  public function getDataKKPerceraian($nama = false)
  {
    // Jika nama pemohon == false maka yang akan ditampilkan semua
    if ($nama == false) {
      return $this->findAll();
    }

    // Namun jika nama pemohon == true makan akan ditampilkan nama tersebut saja
    return $this->where(['namapemohon' => $nama])->first();
  }

  // Digunakan untuk mencari item
  public function search($keyword)
  {
    return $this->table('pendaftaran_kk_perceraian')->like('namapemohon', $keyword);
  }

  // Digunakan untuk mengubah Status Pendaftaran
  public function updateStatus($nama, $status)
  {
    return $this->db->table('pendaftaran_kk_perceraian')
      ->where('namapemohon', $nama)
      ->update(['status' => $status]);
  }
}

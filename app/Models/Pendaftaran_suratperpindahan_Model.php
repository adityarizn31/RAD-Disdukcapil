<?php

namespace App\Models;

use CodeIgniter\Model;

class Pendaftaran_suratperpindahan_Model extends Model
{
  protected $table = 'pendaftaran_suratperpindahan';
  protected $useTimeStamps = true;
  protected $allowedFields = ['namapemohon', 'emailpemohon', 'nomorpemohon', 'alamatpemohon', 'formperpindahan', 'kartukeluarga', 'bukunikah', 'ktpsuami', 'ktpistri'];

  public function getDataSuratPerpindahan($nama = false)
  {
    if ($nama == false) {
      return $this->findAll();
    }

    return $this->where(['namapemohon' => $nama])->first();
  }

  public function search($keyword)
  {
    return $this->table('pendaftaran_suratperpindahan')->like('namapemohon', $keyword);
  }
}

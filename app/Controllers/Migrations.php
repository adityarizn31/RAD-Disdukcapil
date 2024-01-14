<?php

namespace App\Controllers;

use App\Controllers\QueryBuilder;

use App\Models\Sukses_kk_Model;
use CodeIgniter\Database\Query;

class Migrations extends BaseController
{
  protected $suksesKKModel;

  public function __construct()
  {
    $this->suksesKKModel = new Sukses_kk_Model();
  }

  // public function suksesDataKK()
  // {
  //   $query = new QueryBuilder();
  //   $query->select('*');
  //   $query->from('pelayanan_kk');

  //   $data = $query->get();
  // }
}

<?php

namespace App\Controllers;

use App\Models\BeritaModel;
use App\Models\InovasiModel;

class Pages extends BaseController
{

  protected $beritaModel;
  protected $inovasiModel;

  public function __construct()
  {
    $this->beritaModel = new BeritaModel();
    $this->inovasiModel = new InovasiModel();
  }

  public function index()
  {
    // Menghubungkan Controller Pages dengan  BeritaModel dan InovasiModel
    $berita = $this->beritaModel->findAll();
    $inovasi = $this->inovasiModel->findAll();
    $data = [
      'title' => 'Home || Disdukcapil Majalengka',
      'berita' => $berita,
      'inovasi' => $inovasi
    ];
    return view('pages/index', $data);
    //read : CodeIgniter tolong akses Controller Pages dengan method Index
  }

  public function about()
  {
    $data = [
      'title' => 'Tentang Kami || Disdukcapil Majalengka'
    ];
    return view('pages/tentangkami', $data);
  }

  // public function pelayanan()
  // {
  //   $data = [
  //     'title' => 'Pelayanan || Disdukcapil Majalengka'
  //   ];
  //   return view('pages/pelayanan', $data);
  // }
}

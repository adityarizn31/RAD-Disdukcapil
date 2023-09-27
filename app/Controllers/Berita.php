<?php

namespace App\Controllers;

class Berita extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Daftar Berita || Disdukcapil Majalengka'
    ];

    $beritaModel = new \App\Models\BeritaModel();
    $beritaModel->findAll();

    return view('pages/berita', $data); // Ditempatkan di folder pages dengan nama file berita
  }
}

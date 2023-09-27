<?php // Controller yang digunakan untuk mengakses halaman statis

namespace App\Controllers;

use CodeIgniter\CodeIgniter;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Home || Disdukcapil Majalengka'
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

  public function contact()
  {
    $data = [
      'title' => 'Contact || Disdukcapil Majalengka'
    ];

    return view('pages/contact', $data);
  }

  public function pelayanan()
  {
    $data = [
      'title' => 'Pelayanan || Disdukcapil Majalengka'
    ];

    return view('pages/pelayanan', $data);
  }
}

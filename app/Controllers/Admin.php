<?php

namespace App\Controllers;

class Admin extends BaseController
{
  // Halaman Utama / Dashboard
  public function index()
  {
    $data = [
      'title' => 'Admin Disdukcapil'
    ];

    return view('admin/index', $data);
  }

  // Untuk membuat Akun Admin
  public function register()
  {
    $data = [
      'title' => 'Register || Admin Disdukcapil'
    ];

    return view('admin/register', $data);
  }

  // Menampilkan akun admin
  public function data_admin()
  {
    //Cara menampilkan dengan dumpdie
    // $adminModel = new AdminModel();
    // $adit = $adminModel->findAll();
    // dd($adit);

    $adminModel = new \App\Models\AdminModel();
    $adminModel->findAll(); // == SELECT * FROM

    $data = [
      'title' => 'Data Akun || Admin Disdukcapil',
      'admin' => $adminModel
    ];

    return view('admin/data_admin', $data);
  }

  // Menampilkan data Berita
  public function berita_admin()
  {

    // Menghubungkan Controller Admin dengan BeritaModel
    $beritaModel = new \App\Models\BeritaModel();
    $berita = $beritaModel->findAll();


    $data = [
      'title' => 'Berita Admin || Disdukcapil Majalengka',
      'berita' => $berita
    ];

    return view('admin/berita_admin', $data);
  }

  public function detail($judul)
  {
    echo $judul;
  }

  // Pemrosesan logout dan diarahkan ke Home Disdukcapil
  public function logout()
  {
    $data = [
      'title' => 'Home || Disdukcapil Majalengka'
    ];

    return view('pages/index', $data);
  }

  // ===================================================================================
  // Pelayanan Si Lancar

  // Menampilkan data Kartu Keluarga
  public function pendaftaran_kk_admin()
  {
    $data = [
      'title' => 'Data Pendaftaran KK || Admin Disdukcapil'
    ];

    return view('admin/pendaftaran_kk_admin', $data);
  }

  // Menampilkan data KTP
  public function pendaftaran_ktp_admin()
  {
    $data = [
      'title' => 'Data Pendaftaran KTP || Admin Disdukcapil'
    ];

    return view('admin/pendaftaran_ktp_admin', $data);
  }

  public function pendaftaran_kia_admin()
  {
    $data = [
      'title' => 'Data Pendaftaran KIA || Admin Disdukcapil'
    ];

    return view('admin/pendaftaran_kia_admin', $data);
  }

  public function pendaftaran_aktalahir_admin()
  {
    $data = [
      'title' => 'Data Pendaftaran Akta Kelahiran || Admin Disdukcapil '
    ];

    return view('admin/pendaftaran_aktalahir_admin', $data);
  }

  public function pendaftaran_aktakematian_admin()
  {
    $data = [
      'title' => 'Data Pendaftaran Akta Kematian || Admin Disdukcapil'
    ];

    return view('admin/pendaftaran_aktakematian_admin', $data);
  }

  public function pendaftaran_ppip_admin()
  {
    $data = [
      'title' => 'Data Pendaftaran Pelayanan Pemanfaatan Data, Inovasi dan Pengaduan antar Lembaga || Admin Disdukcapil'
    ];

    return view('admin/pendaftaran_ppip_admin', $data);
  }

  public function perbaikan_data_admin()
  {
    $data = [
      'title' => 'Data Pendaftaran Perbaikan Data || Admin Disdukcapil'
    ];

    return view('admin/perbaikan_data_admin', $data);
  }

  public function pengaduan_update_admin()
  {
    $data = [
      'title' => 'Data Pengaduan Update || Admin Disdukcapil'
    ];

    return view('admin/pengaduan_update_admin', $data);
  }

  public function perbaikan_nik_admin()
  {
    $data = [
      'title' => 'Data Perbaikan NIK || Admin Disdukcapil'
    ];

    return view('admin/perbaikan_nik_admin', $data);
  }

  // Pindah Ke Layanan
  public function login()
  {
    $data = [
      'title' => 'Login || Admin Disdukcapil'
    ];
    return view('admin/login', $data);
  }
}

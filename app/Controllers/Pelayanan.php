<?php

namespace App\Controllers;

class Pelayanan extends BaseController
{
  public function index()
  {
    $data = [
      'title' => 'Pelayanan Online || Disdukcapil Majalengka'
    ];
    return view('pelayanan/index', $data);
  }

  public function pendaftaran_kk()
  {
    $data = [
      'title' => 'Pendaftaran KK || Disdukcapil Majalengka'
    ];
    return view('pelayanan/pendaftaran_kk', $data);
  }

  public function pendaftaran_ktp()
  {
    $data = [
      'title' => 'Pendaftaran KTP || Disdukcapil Majalengka'
    ];
    return view('pelayanan/pendaftaran_ktp', $data);
  }

  public function pendaftaran_kia()
  {
    $data = [
      'title' => 'Pendaftaran KIA || Disdukcapil Majalengka'
    ];
    return view('pelayanan/pendaftaran_kia', $data);
  }

  public function pendaftaran_aktakelahiran()
  {
    $data = [
      'title' => 'Pendaftaran Akta Kelahiran || Disdukcapil Majalengka'
    ];
    return view('pelayanan/pendaftaran_aktalahir', $data);
  }

  public function pendaftaran_aktakematian()
  {
    $data = [
      'title' => 'Pendaftaran Akta Kematian || Disdukcapil Majalengka'
    ];
    return view('pelayanan/pendaftaran_aktakematian', $data);
  }

  public function pelayanan_pemanfaatan_data_inovasi_pengaduan()
  {
    $data = [
      'title' => 'Pelayanan Pemanfaatan Data Inovasi dan Pengaduan Antar Lembaga || Disdukcapil Majalengka'
    ];
    return view('pelayanan/pelayanan_pemanfaatan_pengaduan', $data);
  }

  public function perbaikan_data()
  {
    $data = [
      'title' => 'Perbaikan Data || Disdukcapil Majalengka'
    ];
    return view('pelayanan/perbaikan_data', $data);
  }

  public function pengaduan_update()
  {
    $data = [
      'title' => 'Pengaduan Update || Disdukcapil Majalengka'
    ];
    return view('pelayanan/pengaduan_update', $data);
  }

  public function perbaikan_nik()
  {
    $data = [
      'title' => 'Perbaikan NIK || Disdukcapil Majalengka'
    ];
    return view('pelayanan/perbaikan_nik', $data);
  }
}

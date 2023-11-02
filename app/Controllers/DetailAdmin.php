<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BeritaModel;
use App\Models\InovasiModel;
use App\Models\VisiMisiModel;
use App\Models\Pendaftaran_aktakematian_Model;
use App\Models\Pendaftaran_aktakelahiran_Model;
use App\Models\Pendaftaran_kia_Model;
use App\Models\Pendaftaran_kk_Model;
use App\Models\Pendaftaran_ktp_Model;
use App\Models\Perbaikan_data_Model;
use App\Models\Pengaduan_update_Model;
use App\Models\Perbaikan_nik_Model;

class DetailAdmin extends BaseController
{

  protected $adminModel;
  protected $beritaModel;
  protected $inovasiModel;
  protected $visimisiModel;
  protected $aktakematianModel;
  protected $aktakelahiranModel;
  protected $kiaModel;
  protected $kkModel;
  protected $ktpModel;
  protected $perbaikandataModel;
  protected $pengaduanupdateModel;
  protected $perbaikannikModel;

  public function __construct()
  {
    $this->adminModel = new AdminModel();
    $this->beritaModel = new BeritaModel();
    $this->inovasiModel = new InovasiModel();
    $this->visimisiModel = new VisiMisiModel();
    $this->aktakematianModel = new Pendaftaran_aktakematian_Model();
    $this->aktakelahiranModel = new Pendaftaran_aktakelahiran_Model();
    $this->kiaModel = new Pendaftaran_kia_Model();
    $this->kkModel = new Pendaftaran_kk_Model();
    $this->ktpModel = new Pendaftaran_ktp_Model();
    $this->perbaikandataModel = new Perbaikan_data_Model();
    $this->pengaduanupdateModel = new Pengaduan_update_Model();
    $this->perbaikannikModel = new Perbaikan_nik_Model();
  }










  // Halaman Detail Akun Admin
  public function detail_akun_admin($nama)
  {
    $data = [
      'title' => 'Detail Akun Admin || Disdukcapil Majalengka',
      'admin' => $this->adminModel->getAkunAdmin($nama)
    ];
    return view('detailAdmin/detail_akun_admin', $data);
  }










  // Halaman Detail Berita Admin
  public function detail_berita_admin($judulBerita)
  {
    $data = [
      'title' => 'Detail Berita || Disdukcapil Majalengka',
      'berita' => $this->beritaModel->getBerita($judulBerita)
    ];
    return view('detailAdmin/detail_berita_admin', $data);
  }










  // Halaman Detail Inovasi Admin
  public function detail_inovasi_admin($judulInovasi)
  {
    $data = [
      'title' => 'Detail Inovasi || Disdukcapil Majalengka',
      'inovasi' => $this->inovasiModel->getInovasi($judulInovasi)
    ];
    return view('detailAdmin/detail_inovasi_admin', $data);
  }










  // Halaman Visi Misi Admin
  public function detail_visimisi_admin($visimisii)
  {
    $data = [
      'title' => 'Visi Misi Admin || Disdukcapil Majalengka',
      'visimisi' => $this->visimisiModel->getVisiMisi($visimisii)
    ];
    return view('detailAdmin/detail_visimisi_admin', $data);
  }










  // Halaman Pendaftaran KK 
  public function detail_pendaftarankk_admin($namaPemohonKK)
  {
    $data = [
      'title' => 'Detail Pendaftaran KK || Disdukcapil Majalengka',
      'pendaftaran_kk' => $this->kkModel->getDataKK($namaPemohonKK)
    ];
    return view('detailAdmin/detail_pendaftarankk_admin', $data);
  }










  // Halaman Pendaftaran KTP
  public function detail_pendaftaranktp_admin($namaPemohonKTP)
  {
    $data = [
      'title' => 'Detail Pendaftaran KTP || Disdukcapil Majalengka',
      'pendaftaran_ktp' => $this->ktpModel->getDataKTP($namaPemohonKTP)
    ];
    return view('detailAdmin/detail_pendaftaranktp_admin', $data);
  }









  // Halaman Pendaftaran KIA
  public function detail_pendaftarankia_admin($namaPemohonKIA)
  {
    $data = [
      'title' => 'Detail Pendaftaran KIA || Disdukcapil Majalengka',
      'pendaftaran_kia' => $this->kiaModel->getDataKIA($namaPemohonKIA)
    ];
    return view('detailAdmin/detail_pendaftarankia_admin', $data);
  }









  // Halaman Pendaftaran Akta Kelahiran
  public function detail_pendaftaranaktalahir_admin($namaPemohonAktalahir)
  {
    $data = [
      'title' => 'Detail Pendaftaran Akta Kelahiran || Disdukcapil Majalengka',
      'pendaftaran_aktakelahiran' => $this->aktakelahiranModel->getDataAktakelahiran($namaPemohonAktalahir)
    ];
    return view('detailAdmin/detail_pendaftaranaktalahir_admin', $data);
  }








  // Halaman Pendaftaran Akta Kematian
  public function detail_pendaftaranaktakematian_admin($namaPemohonAktakematian)
  {
    $data = [
      'title' => 'Detail Pendaftaran Akta Kematian || Disdukcapil Majalengka',
      'pendaftaran_aktakematian' => $this->aktakematianModel->getDataAktakematian($namaPemohonAktakematian)
    ];
    return view('detailAdmin/detail_pendaftaranaktakematian_admin', $data);
  }









  // Halaman Pendaftaran Perbaikan Data
  public function detail_perbaikandata_admin($namaPemohonPerbaikan)
  {
    $data = [
      'title' => 'Detail Perbaikan Data || Disdukcapil Majalengka',
      'perbaikan_data' => $this->perbaikandataModel->getPerbaikanData($namaPemohonPerbaikan)
    ];
    return view('detailAdmin/detail_perbaikandata_admin', $data);
  }









  // Halaman Pendaftaran Pengaduan Data
  public function detail_pengaduanupdate_admin($namaPemohonPengaduan)
  {
    $data = [
      'title' => 'Detail Pengaduan Data || Disdukcapil Majalengka',
      'pengaduan_data' => $this->pengaduanupdateModel->getDataPengaduanUpdate($namaPemohonPengaduan)
    ];
    return view('detailAdmin/detail_pengaduandata_admin', $data);
  }









  // Halaman Perbaikan NIK 
  public function detail_perbaikannik_admin($namaPemohonPerbaikanNIK)
  {
    $data = [
      'title' => 'Detail Perbaikan NIK || Disdukcapil Majalengka',
      'perbaikan_nik' => $this->perbaikannikModel->getDataPerbaikanNIK($namaPemohonPerbaikanNIK)
    ];
    return view('detailAdmin/detail_perbaikannik_admin', $data);
  }
}

<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BeritaModel;
use App\Models\InovasiModel;
use App\Models\VisiMisiModel;
use App\Models\PersyaratansilancarModel;

use App\Models\Pendaftaran_kk_Model;
use App\Models\Pendaftaran_kia_Model;
use App\Models\Pendaftaran_suratperpindahan_Model;

use App\Models\Pendaftaran_aktakematian_Model;
use App\Models\Pendaftaran_aktakelahiran_Model;
use App\Models\Pendaftaran_keabsahanakla_Model;

use App\Models\Perbaikan_data_Model;
use App\Models\Pengaduan_update_Model;

use App\Models\Pendaftaran_ktp_Model;
use App\Models\Perbaikan_nik_Model;

class DetailAdmin extends BaseController
{

  protected $adminModel;
  protected $beritaModel;
  protected $inovasiModel;
  protected $visimisiModel;
  protected $persyaratansilancarModel;

  protected $kkModel;
  protected $kiaModel;
  protected $suratperpindahanModel;

  protected $aktakematianModel;
  protected $aktakelahiranModel;
  protected $keabsahanaklaModel;

  protected $perbaikandataModel;
  protected $pengaduanupdateModel;

  protected $ktpModel;
  protected $perbaikannikModel;


  public function __construct()
  {
    $this->adminModel = new AdminModel();
    $this->beritaModel = new BeritaModel();
    $this->inovasiModel = new InovasiModel();
    $this->visimisiModel = new VisiMisiModel();
    $this->persyaratansilancarModel = new PersyaratansilancarModel();

    $this->kkModel = new Pendaftaran_kk_Model();
    $this->kiaModel = new Pendaftaran_kia_Model();
    $this->suratperpindahanModel = new Pendaftaran_suratperpindahan_Model();

    $this->aktakematianModel = new Pendaftaran_aktakematian_Model();
    $this->aktakelahiranModel = new Pendaftaran_aktakelahiran_Model();
    $this->keabsahanaklaModel = new Pendaftaran_keabsahanakla_Model();

    $this->perbaikandataModel = new Perbaikan_data_Model();
    $this->pengaduanupdateModel = new Pengaduan_update_Model();

    $this->ktpModel = new Pendaftaran_ktp_Model();
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
  public function detail_visimisi_admin($visimisi)
  {
    $data = [
      'title' => 'Visi Misi Admin || Disdukcapil Majalengka',
      'visimisi' => $this->visimisiModel->getVisiMisi($visimisi)
    ];
    return view('detailAdmin/detail_visimisi_admin', $data);
  }










  // Halaman Persyaratan Si Lancar
  public function detailPersyaratan($persyaratansilancar)
  {
    $data = [
      'title' => 'Persyaratan Si Lancar || Disdukcapil Majalengka',
      'persyaratansilancar' => $this->persyaratansilancarModel->getPersyaratan($persyaratansilancar)
    ];
    return view('detailAdmin/detailPersyaratan', $data);
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








  // Halaman Pendaftaran KIA
  public function detail_pendaftarankia_admin($namaPemohonKIA)
  {
    $data = [
      'title' => 'Detail Pendaftaran KIA || Disdukcapil Majalengka',
      'pendaftaran_kia' => $this->kiaModel->getDataKIA($namaPemohonKIA)
    ];
    return view('detailAdmin/detail_pendaftarankia_admin', $data);
  }








  // Halaman Pendaftaran KTP
  public function detail_pendaftaransuratperpindahan_admin($namaPemohonSuratPerpindahan)
  {
    $data = [
      'title' => 'Detail Pendaftaran Surat Perpindahan || Disdukcapil Majalengka',
      'pendaftaran_suratperpindahan' => $this->suratperpindahanModel->getDataSuratPerpindahan($namaPemohonSuratPerpindahan)
    ];
    return view('detailAdmin/detail_pendaftaransuratperpindahan_admin', $data);
  }








  // Halaman Pendaftaran Akta Kelahiran
  public function detail_pendaftaranaktakelahiran_admin($namaPemohonAktalahir)
  {
    $data = [
      'title' => 'Detail Pendaftaran Akta Kelahiran || Disdukcapil Majalengka',
      'pendaftaran_aktakelahiran' => $this->aktakelahiranModel->getDataAktakelahiran($namaPemohonAktalahir)
    ];
    return view('detailAdmin/detail_pendaftaranaktakelahiran_admin', $data);
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










  // Halamaan Pendaftaran Pendaftaran Keabsahan Akta Kelahiran
  public function detail_pendaftarankeabsahanakla_admin($namaPemohonKeabsahanAkla)
  {
    $data = [
      'title' => 'Detail Pendaftaran Keabsahan Akta Kelahiran || Admin Disdukcapil',
      'pendaftaran_keabsahanakla' => $this->keabsahanaklaModel->getDataKeabsahanakla($namaPemohonKeabsahanAkla)
    ];
    return view('detailAdmin/detail_pendaftarankeabsahanakla_admin', $data);
  }









  // Halaman Pendaftaran Perbaikan Data
  public function detail_pendaftaranperbaikandata_admin($namaPemohonPerbaikan)
  {
    $data = [
      'title' => 'Detail Perbaikan Data || Disdukcapil Majalengka',
      'perbaikan_data' => $this->perbaikandataModel->getPerbaikanData($namaPemohonPerbaikan)
    ];
    return view('detailAdmin/detail_pendaftaranperbaikandata_admin', $data);
  }









  // Halaman Pendaftaran Pengaduan Data
  public function detail_pendaftaranpengaduanupdate_admin($namaPemohonPengaduan)
  {
    $data = [
      'title' => 'Detail Pengaduan Data || Disdukcapil Majalengka',
      'pengaduan_update' => $this->pengaduanupdateModel->getDataPengaduanUpdate($namaPemohonPengaduan)
    ];
    return view('detailAdmin/detail_pendaftaranpengaduanupdate_admin', $data);
  }









  // Halaman Perbaikan NIK 
  public function detail_pendaftaranperbaikannik_admin($namaPemohonPerbaikanNIK)
  {
    $data = [
      'title' => 'Detail Perbaikan NIK || Disdukcapil Majalengka',
      'perbaikan_nik' => $this->perbaikannikModel->getDataPerbaikanNIK($namaPemohonPerbaikanNIK)
    ];
    return view('detailAdmin/detail_pendaftaranperbaikannik_admin', $data);
  }
}

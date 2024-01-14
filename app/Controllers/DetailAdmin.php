<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BeritaModel;
use App\Models\InovasiModel;
use App\Models\VisiMisiModel;
use App\Models\PersyaratansilancarModel;

// Halaman Pendaftaran Si Lancar

use App\Models\Pendaftaran_kk_Model;
use App\Models\Pendaftaran_kia_Model;
use App\Models\Pendaftaran_suratperpindahan_Model;
use App\Models\Pendaftaran_suratperpindahanluar_Model;

use App\Models\Pendaftaran_aktakelahiran_Model;
use App\Models\Pendaftaran_aktakematian_Model;
use App\Models\Pendaftaran_keabsahanakla_Model;

use App\Models\Pendaftaran_pelayanandata_Model;

use App\Models\Perbaikan_data_Model;
use App\Models\Pengaduan_update_Model;

// Halaman Pelayanan

use App\Models\PelayananModel;

use App\Models\Pelayanan_kk_Model;
use App\Models\Pelayanan_kia_Model;
use App\Models\Pelayanan_suratperpindahan_Model;
use App\Models\Pelayanan_suratperpindahanluar_Model;

use App\Models\Pelayanan_aktakelahiran_Model;
use App\Models\Pelayanan_aktakematian_Model;
use App\Models\Pelayanan_keabsahanakla_Model;

use App\Models\Pelayanan_pelayanandata_Model;

use App\Models\Pelayanan_perbaikandata_Model;
use App\Models\Pelayanan_pengaduanupdate_Model;



class DetailAdmin extends BaseController
{

  protected $adminModel;
  protected $beritaModel;
  protected $inovasiModel;
  protected $visimisiModel;
  protected $persyaratansilancarModel;

  // Halaman Pendaftaran Si Lancar

  protected $kkModel;
  protected $kiaModel;
  protected $suratperpindahanModel;
  protected $suratperpindahanluarModel;

  protected $aktakelahiranModel;
  protected $aktakematianModel;
  protected $keabsahanaklaModel;

  protected $pelayanandataModel;

  protected $perbaikandataModel;
  protected $pengaduanupdateModel;

  // Halaman Pelayanan

  protected $pelayananModel;

  protected $pelkkModel;
  protected $pelkiaModel;
  protected $pelsuratperpindahanModel;
  protected $pelsuratperpindahanluarModel;

  protected $pelaktakelahiranModel;
  protected $pelaktakematianModel;
  protected $pelkeabsahanaklaModel;

  protected $pelpelayanandataModel;

  protected $pelperbaikandataModel;
  protected $pelpengaduanupdateModel;

  public function __construct()
  {
    $this->adminModel = new AdminModel();
    $this->beritaModel = new BeritaModel();
    $this->inovasiModel = new InovasiModel();
    $this->visimisiModel = new VisiMisiModel();
    $this->persyaratansilancarModel = new PersyaratansilancarModel();

    // Halaman Pendaftaran Si Lancar

    $this->kkModel = new Pendaftaran_kk_Model();
    $this->kiaModel = new Pendaftaran_kia_Model();
    $this->suratperpindahanModel = new Pendaftaran_suratperpindahan_Model();
    $this->suratperpindahanluarModel = new Pendaftaran_suratperpindahanluar_Model();

    $this->aktakematianModel = new Pendaftaran_aktakematian_Model();
    $this->aktakelahiranModel = new Pendaftaran_aktakelahiran_Model();
    $this->keabsahanaklaModel = new Pendaftaran_keabsahanakla_Model();

    $this->pelayanandataModel = new Pendaftaran_pelayanandata_Model();

    $this->perbaikandataModel = new Perbaikan_data_Model();
    $this->pengaduanupdateModel = new Pengaduan_update_Model();

    // Halaman Pelayanan

    $this->pelayananModel = new PelayananModel();

    $this->pelkkModel = new Pelayanan_kk_Model();
    $this->pelkiaModel = new Pelayanan_kia_Model();
    $this->pelsuratperpindahanModel = new Pelayanan_suratperpindahan_Model();
    $this->pelsuratperpindahanluarModel = new Pelayanan_suratperpindahanluar_Model();

    $this->pelaktakelahiranModel = new Pelayanan_aktakelahiran_Model();
    $this->pelaktakematianModel = new Pelayanan_aktakematian_Model();
    $this->pelkeabsahanaklaModel = new Pelayanan_keabsahanakla_Model();

    $this->pelpelayanandataModel = new Pelayanan_pelayanandata_Model();

    $this->pelperbaikandataModel = new Pelayanan_perbaikandata_Model();
    $this->pelpengaduanupdateModel = new Pelayanan_pengaduanupdate_Model();
  }









  // Halaman Detail Akun Admin
  public function detail_akun_admin($nama)
  {
    $data = [
      'title' => 'Detail Akun Admin || Admin Disdukcapil',
      'admin' => $this->adminModel->getAkunAdmin($nama)
    ];
    return view('detailAdmin/detail_akun_admin', $data);
  }










  // Halaman Detail Berita Admin
  public function detail_berita_admin($judulBerita)
  {
    $data = [
      'title' => 'Detail Berita || Admin Disdukcapil',
      'berita' => $this->beritaModel->getBerita($judulBerita)
    ];
    return view('detailAdmin/detail_berita_admin', $data);
  }










  // Halaman Detail Inovasi Admin
  public function detail_inovasi_admin($judulInovasi)
  {
    $data = [
      'title' => 'Detail Inovasi || Admin Disdukcapil',
      'inovasi' => $this->inovasiModel->getInovasi($judulInovasi)
    ];
    return view('detailAdmin/detail_inovasi_admin', $data);
  }










  // Halaman Visi Misi Admin
  public function detail_visimisi_admin($visimisi)
  {
    $data = [
      'title' => 'Visi Misi Admin || Admin Disdukcapil',
      'visimisi' => $this->visimisiModel->getVisiMisi($visimisi)
    ];
    return view('detailAdmin/detail_visimisi_admin', $data);
  }










  // Halaman Persyaratan Si Lancar
  public function detail_persyaratansilancar_admin($persyaratansilancar)
  {
    $data = [
      'title' => 'Detail Persyaratan Si Lancar || Admin Disdukcapil',
      'persyaratansilancar' => $this->persyaratansilancarModel->getPersyaratan($persyaratansilancar)
    ];
    return view('detailAdmin/detail_persyaratansilancar_admin', $data);
  }








  // Halaman Pendaftaran KK 
  public function detail_pendaftarankk_admin($namaPemohonKK)
  {
    $pendaftaran_kk = $this->kkModel->getDataKK($namaPemohonKK);
    $status = $pendaftaran_kk['status'];

    $data = [
      'title' => 'Detail Pendaftaran KK || Admin Disdukcapil',
      'pendaftaran_kk' => $this->kkModel->getDataKK($namaPemohonKK),
      'status' => $status
    ];
    return view('detailAdmin/detail_pendaftarankk_admin', $data);
  }

  public function selesaiKK($namaPemohonKK)
  {
    $this->kkModel->updateStatus($namaPemohonKK, 'Selesai');
    session()->setFlashdata('pesan', 'Pendaftaran Telah Selesai Di Verifikasi !!');
    return redirect()->to('detailAdmin/detail_pendaftarankk_admin' . $namaPemohonKK);
  }

  public function belumSelesaiKK($namaPemohonKK)
  {
    $this->kkModel->updateStatus($namaPemohonKK, 'Belum Selesai');
    session()->setFlashdata('pesan', 'Pendaftaran Gagal Di Verifikasi !!');
    return redirect()->to('detailAdmin/detail_pendaftarankk_admin' . $namaPemohonKK);
  }








  // Halaman Pendaftaran KIA
  public function detail_pendaftarankia_admin($namaPemohonKIA)
  {
    $data = [
      'title' => 'Detail Pendaftaran KIA || Admin Disdukcapil',
      'pendaftaran_kia' => $this->kiaModel->getDataKIA($namaPemohonKIA)
    ];
    return view('detailAdmin/detail_pendaftarankia_admin', $data);
  }








  // Halaman Pendaftaran KTP
  public function detail_pendaftaransuratperpindahan_admin($namaPemohonSuratPerpindahan)
  {
    $data = [
      'title' => 'Detail Pendaftaran Surat Perpindahan || Admin Disdukcapil',
      'pendaftaran_suratperpindahan' => $this->suratperpindahanModel->getDataSuratPerpindahan($namaPemohonSuratPerpindahan)
    ];
    return view('detailAdmin/detail_pendaftaransuratperpindahan_admin', $data);
  }








  // Halaman Pendaftaran Akta Kelahiran
  public function detail_pendaftaranaktakelahiran_admin($namaPemohonAktalahir)
  {
    $data = [
      'title' => 'Detail Pendaftaran Akta Kelahiran || Admin Disdukcapil',
      'pendaftaran_aktakelahiran' => $this->aktakelahiranModel->getDataAktakelahiran($namaPemohonAktalahir)
    ];
    return view('detailAdmin/detail_pendaftaranaktakelahiran_admin', $data);
  }








  // Halaman Pendaftaran Akta Kematian
  public function detail_pendaftaranaktakematian_admin($namaPemohonAktakematian)
  {
    $data = [
      'title' => 'Detail Pendaftaran Akta Kematian || Admin Disdukcapil',
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
      'title' => 'Detail Perbaikan Data || Admin Disdukcapil',
      'perbaikan_data' => $this->perbaikandataModel->getPerbaikanData($namaPemohonPerbaikan)
    ];
    return view('detailAdmin/detail_pendaftaranperbaikandata_admin', $data);
  }









  // Halaman Pendaftaran Pengaduan Data
  public function detail_pendaftaranpengaduanupdate_admin($namaPemohonPengaduan)
  {
    $data = [
      'title' => 'Detail Pengaduan Data || Admin Disdukcapil',
      'pengaduan_update' => $this->pengaduanupdateModel->getDataPengaduanUpdate($namaPemohonPengaduan)
    ];
    return view('detailAdmin/detail_pendaftaranpengaduanupdate_admin', $data);
  }









  // Halaman Validasi untuk memindahkan data ke tabel sukses
  // public function pindahKK()
  // {
  //   $query = new QueryBuilder();
  //   $query->select('*');
  // }
}

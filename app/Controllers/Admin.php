<?php

// Controller Admin

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BeritaModel;
use App\Models\InovasiModel;
use App\Models\PelayananModel;
use App\Models\VisiMisiModel;
use App\Models\Pendaftaran_aktakematian_Model;
use App\Models\Pendaftaran_aktakelahiran_Model;
use App\Models\Pendaftaran_kia_Model;
use App\Models\Pendaftaran_kk_Model;
use App\Models\Pendaftaran_ktp_Model;
use App\Models\Perbaikan_data_Model;
use App\Models\Pengaduan_update_Model;
use App\Models\Perbaikan_nik_Model;

class Admin extends BaseController
{

  protected $adminModel;
  protected $beritaModel;
  protected $inovasiModel;
  protected $visimisiModel;
  protected $pelayananModel;
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
    $this->pelayananModel = new PelayananModel();
    $this->aktakematianModel = new Pendaftaran_aktakematian_Model();
    $this->aktakelahiranModel = new Pendaftaran_aktakelahiran_Model();
    $this->kiaModel = new Pendaftaran_kia_Model();
    $this->kkModel = new Pendaftaran_kk_Model();
    $this->ktpModel = new Pendaftaran_ktp_Model();
    $this->perbaikandataModel = new Perbaikan_data_Model();
    $this->pengaduanupdateModel = new Pengaduan_update_Model();
    $this->perbaikannikModel = new Perbaikan_nik_Model();
  }








  // Halaman Utama / Dashboard
  public function index()
  {
    $data = [
      'title' => 'Admin Disdukcapil'
    ];
    return view('admin/index', $data);
  }







  // Menampilkan akun admin
  public function data_admin()
  {
    // Menghubungkan Controller Admin dengan AdminModel
    // $admin = $this->adminModel->findAll();
    $data = [
      'title' => 'Data Akun || Admin Disdukcapil',
      'admin' => $this->adminModel->getAkunAdmin()
    ];
    return view('admin/data_admin', $data);
  }







  // Menampilkan keseluruhan data Berita pada halaman admin
  public function berita_admin()
  {
    // Menghubungkan Controller Admin dengan BeritaModel
    // $berita = $this->beritaModel->findAll();
    $data = [
      'title' => 'Berita Admin || Disdukcapil Majalengka',
      'berita' => $this->beritaModel->getBerita()
    ];
    return view('admin/berita_admin', $data);
  }







  // Menampilkan keseluruhan data inovasi pada halaman Admin
  public function inovasi_admin()
  {
    // Menghubungkan Controller Admin dengan InovasiModel
    //$inovasi = $this->inovasiModel->findAll();
    $data = [
      'title' => 'Inovasi Admin || Disdukcapil Majalengka',
      'inovasi' => $this->inovasiModel->getInovasi()
    ];
    return view('admin/inovasi_admin', $data);
  }







  // Menampilkan keseluruhan data Berita pada halaman admin
  public function visimisi_admin()
  {
    // Menghubungkan Controller Admin dengan Visi Mmisi Admin
    // $berita = $this->beritaModel->findAll();
    $data = [
      'title' => 'Visi Misi || Disdukcapil Majalengka',
      'visimisi' => $this->visimisiModel->getVisiMisi()
    ];
    return view('admin/visimisi_admin', $data);
  }






  public function pelayanan()
  {
    // Menghubungkan Controller Admin dengan Pelayanan
    $data = [
      'title' => 'Pelayanan Si Lancar || Disdukcapil Majalengka',
      'pelayanan' => $this->pelayananModel->getDataPelayanan()
    ];
    return view('admin/pelayanan', $data);
  }








  // PELAYANAN SI LANCAR

  // Menampilkan data Kartu Keluarga pada halaman Admin
  public function pendaftaran_kk_admin()
  {
    // Menghubungkan Controller Admin dengan Pendaftaran KK Model
    //$kk = $this->kkModel->findAll();
    $data = [
      'title' => 'Data Pendaftaran KK || Admin Disdukcapil',
      'pendaftaran_kk' => $this->kkModel->getDataKK()
    ];
    return view('admin/pendaftaran_kk_admin', $data);
  }

  // Menampilkan detail pendaftaran KK pada halaman admin
  public function detail_pendaftarankk_admin($namaPemohonKK)
  {
    // Menampilkan Detail Data Pendaftaran KK pada halaman admin
    $data = [
      'title' => 'Detail Data Pendaftaran KK || Disdukcapil Majalengka',
      'pendaftaran_kk' => $this->kkModel->getDataKK($namaPemohonKK)
    ];
    // if (empty($data['namapemohon'])) {
    //   throw new \CodeIgniter\Exceptions\PageNotFoundException('Permohonan Pendaftaran KK atas nama ' . $namaPemohonKK . ' Tidak ditemukan');
    // }
    return view('detailAdmin/detail_pendaftarankk_admin', $data);
  }







  // Menampilkan data KTP
  public function pendaftaran_ktp_admin()
  {
    // Menghubungkan Controller Admin dengan Pendaftaran KTP Model
    // $ktp = $this->ktpModel->findAll();
    $data = [
      'title' => 'Data Pendaftaran KTP || Admin Disdukcapil',
      'pendaftaran_ktp' => $this->ktpModel->getDataKTP()
    ];
    return view('admin/pendaftaran_ktp_admin', $data);
  }

  // Menampilkan Detail Pendaftaran KTP pada halaman Admin
  public function detail_pendaftaranktp_admin($namaPemohonKTP)
  {
    $data = [
      'title' => 'Detail Data Pendaftaran KTP || Disdukcapil Majalengka',
      'pendaftaran_ktp' => $this->ktpModel->getDataKTP($namaPemohonKTP)
    ];
    return view('detailAdmin/detail_pendaftaranktp_admin', $data);
  }








  // Menampilkan data pendaftaran KIA pada halaman admin
  public function pendaftaran_kia_admin()
  {
    // Menghubungkan Controller Admin dengan Pendaftaran KIA Model
    // $kia = $this->kiaModel->findAll();
    $data = [
      'title' => 'Data Pendaftaran KIA || Admin Disdukcapil',
      'pendaftaran_kia' => $this->kiaModel->getDataKIA()
    ];
    return view('admin/pendaftaran_kia_admin', $data);
  }

  // Menampilkan Detail Pendaftaran KIA pada halaman Admin
  public function detail_pendaftarankia_admin($namaPemohonKIA)
  {
    $data = [
      'title' => 'Dtail Data Pendaftaran KIA || Admin Disdukcapil',
      'pendaftaran_kia' => $this->kiaModel->getDataKIA($namaPemohonKIA)
    ];
    return view('detailAdmin/detail_pendaftarankia_admin', $data);
  }








  // Menampilkan data aktakelahiran pada halaman Admin
  public function pendaftaran_aktakelahiran_admin()
  {
    // Menghubungkan Controller Admin dengan Pendaftaran aktalahir Model
    // $aktalahir = $this->aktalahirModel->findAll();
    $data = [
      'title' => 'Data Pendaftaran Akta Kelahiran || Admin Disdukcapil ',
      'pendaftaran_aktakelahiran' => $this->aktakelahiranModel->getDataAktaKelahiran()
    ];
    return view('admin/pendaftaran_aktakelahiran_admin', $data);
  }

  // Menampilkan detail Pendaftaran Akta lahir pada halaman Admin
  public function detail_pendaftaranaktakelahiran_admin($namaPemohonAktalahir)
  {
    $data = [
      'title' => 'Detail Data Pendaftaran Akta lahir || Admin Disdukcapil',
      'pendaftaran_aktakelahiran' => $this->aktakelahiranModel->getDataAktaKelahiran($namaPemohonAktalahir)
    ];
    return view('detailAdmin/detail_pendaftaranaktakelahiran_admin', $data);
  }








  // Menampilkan data Pendaftara Akta Kematian pada halaman admin
  public function pendaftaran_aktakematian_admin()
  {
    // Menghubungkan Controller Admin degnan Pendaftaran aktakematian Model
    // $aktakematian = $this->aktalahirModel->findAll();
    $data = [
      'title' => 'Data Pendaftaran Akta Kematian || Admin Disdukcapil',
      'pendaftaran_aktakematian' => $this->aktakematianModel->getDataAktaKematian()
    ];
    return view('admin/pendaftaran_aktakematian_admin', $data);
  }

  // Menampilkan detail data Pendaftaran Akta Kematian pada halaman admin
  public function detail_pendaftaranaktakematian_admin($namaPemohonAktakematian)
  {
    $data = [
      'title' => 'Detail Data Pendaftaran Akta Kematian || Admin Disdukcapil',
      'pendaftaran_aktakematian' => $this->aktakematianModel->getDataAktaKematian($namaPemohonAktakematian)
    ];
    return view('detailAdmin/detail_pendaftaranaktakematian_admin', $data);
  }








  // Menampilkan data Perbaikan data pada halaman Admin
  public function perbaikan_data_admin()
  {
    // Menghubungkan Controller Admin dengan Perbaikan data Model
    // $perbaikandata = $this->perbaikandataModel->findAll();
    $data = [
      'title' => 'Data Pendaftaran Perbaikan Data || Admin Disdukcapil',
      'perbaikan_data' => $this->perbaikandataModel->getPerbaikanData()
    ];
    return view('admin/perbaikan_data_admin', $data);
  }

  // Menampilkan detail Perbaikan Data pada Halaman Admin
  public function detail_perbaikandata_admin($namaPemohonPerbaikan)
  {
    $data = [
      'title' => 'Detail Pendaftaran Perbaikan Data || Admin Disdukcapil',
      'perbaikan_data' => $this->perbaikandataModel->getPerbaikanData($namaPemohonPerbaikan)
    ];
    return view('detailAdmin/detail_perbaikandata_admin', $data);
  }








  // Menampilkan data Pengaduan Update pada halaman Admin
  public function pengaduan_update_admin()
  {
    // Menghubungkan Controller Admin dengan Pengaduan update Model
    // $pengaduanupdate = $this->pengaduanupdateModel->findAll();
    $data = [
      'title' => 'Data Pengaduan Update || Admin Disdukcapil',
      'pengaduan_update' => $this->pengaduanupdateModel->getDataPengaduanUpdate()
    ];
    return view('admin/pengaduan_update_admin', $data);
  }

  // Menampilkan detail Data Pengaduan pada halaman Admin
  public function detail_datapengaduan_admin($namaPemohonPengaduan)
  {
    $data = [
      'title' => 'Detail Data Pengaduan Update || Admin Disdukcapil',
      'pengaduan_update' => $this->pengaduanupdateModel->getDataPengaduanUpdate($namaPemohonPengaduan)
    ];
    return view('detailAdmin/detail_datapengaduan_admin', $data);
  }








  // Menampilkan data Perbaikan NIK pada halaman Admin
  public function perbaikan_nik_admin()
  {
    // Menghubungkan Controller Admin dengan Perbaikan NIK Model
    // $perbaikannik = $this->perbaikannikModel->findAll();
    $data = [
      'title' => 'Data Perbaikan NIK || Admin Disdukcapil',
      'perbaikan_nik' => $this->perbaikannikModel->getDataPerbaikanNIK()
    ];
    return view('admin/perbaikan_nik_admin', $data);
  }

  // Menampilkan detail Perbaikan NIK pada halaman Admin
  public function detail_perbaikannik_admin($namaPemohonPerbaikan)
  {
    $data = [
      'title' => 'Detail Data Perbaikan NIK || Admin Disdukcapil',
      'perbaikan_nik' => $this->perbaikannikModel->getDataPerbaikanNIK($namaPemohonPerbaikan)
    ];
    return view('detailAdmin/detail_perbaikannik_admin', $data);
  }
}

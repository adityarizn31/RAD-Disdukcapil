<?php

// Controller Admin

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BeritaModel;
use App\Models\InovasiModel;
use App\Models\VisiMisiModel;
use App\Models\PersyaratansilancarModel;

use App\Models\Pendaftaran_kia_Model;
use App\Models\Pendaftaran_kk_Model;
use App\Models\Pendaftaran_suratperpindahan_Model;
use App\Models\Pendaftaran_suratperpindahanluar_Model;

use App\Models\Pendaftaran_aktakelahiran_Model;
use App\Models\Pendaftaran_aktakematian_Model;
use App\Models\Pendaftaran_keabsahanakla_Model;

use App\Models\Perbaikan_data_Model;
use App\Models\Pengaduan_update_Model;

use App\Models\Pendaftaran_ktp_Model;
use App\Models\Perbaikan_nik_Model;

use App\Models\PelayananModel;




class Admin extends BaseController
{

  protected $adminModel;
  protected $beritaModel;
  protected $inovasiModel;
  protected $visimisiModel;
  protected $persyaratansilancarModel;

  protected $kkModel;
  protected $kiaModel;
  protected $suratperpindahanModel;
  protected $suratperpindahanluarModel;

  protected $aktakematianModel;
  protected $aktakelahiranModel;
  protected $keabsahanaklaModel;

  protected $perbaikandataModel;
  protected $pengaduanupdateModel;

  protected $ktpModel;
  protected $perbaikannikModel;

  protected $pelayananModel;


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
    $this->suratperpindahanluarModel = new Pendaftaran_suratperpindahanluar_Model();

    $this->aktakematianModel = new Pendaftaran_aktakematian_Model();
    $this->aktakelahiranModel = new Pendaftaran_aktakelahiran_Model();
    $this->keabsahanaklaModel = new Pendaftaran_keabsahanakla_Model();

    $this->perbaikandataModel = new Perbaikan_data_Model();
    $this->pengaduanupdateModel = new Pengaduan_update_Model();

    $this->perbaikannikModel = new Perbaikan_nik_Model();
    $this->ktpModel = new Pendaftaran_ktp_Model();

    $this->pelayananModel = new PelayananModel();
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







  public function persyaratan()
  {
    // Menghubungkan Controller Admin dengan Persyaratan Pelayanan
    $data = [
      'title' => 'Persyaratan Pelayanan || Admin Disdukcapil',
      'persyaratansilancar' => $this->persyaratansilancarModel->getPersyaratan()
    ];
    return view('admin/persyaratan', $data);
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
    // Digunakan untuk Pagination
    $currentPageKK =  $this->request->getVar('page_pendaftaran_kk') ? $this->request->getVar('page_pendaftaran_kk') : 1;

    // Digunakan untuk Pencarian Data
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $orangKK = $this->kkModel->search($keyword);
    } else {
      $orangKK = $this->kkModel;
    }

    // Digunakan untuk menampilkan Detail data, Jumlah data per Halaman serta Halamannya
    $data = [
      'title' => 'Data Pendaftaran KK || Admin Disdukcapil',
      'pendaftaran_kk' => $this->kkModel->getDataKK(),
      'pendaftaran_kk' => $orangKK->paginate(10, 'pendaftaran_kk'),
      'pager' => $this->kkModel->pager,
      'currentPage' => $currentPageKK
    ];
    return view('admin/pendaftaran_kk_admin', $data);
  }







  // Menampilkan data pendaftaran KIA pada halaman admin
  public function pendaftaran_kia_admin()
  {
    // Digunakan untuk Pagination
    $currentPageKIA =  $this->request->getVar('page_pendaftaran_kia') ? $this->request->getVar('page_pendaftaran_kia') : 1;

    // Digunakan untuk Pencarian Data
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $orangKIA = $this->kiaModel->search($keyword);
    } else {
      $orangKIA = $this->kiaModel;
    }

    // Digunakan untuk menampilkan Detail data, Jumlah data per halaman serta Halamannya
    $data = [
      'title' => 'Data Pendaftaran KIA || Admin Disdukcapil',
      'pendaftaran_kia' => $this->kiaModel->getDataKIA(),
      'pendaftaran_kia' => $orangKIA->paginate(10, 'pendaftaran_kia'),
      'pager' => $this->kiaModel->pager,
      'currentPage' => $currentPageKIA
    ];
    return view('admin/pendaftaran_kia_admin', $data);
  }







  // Menampilkan data pendaftaran Surat Perpindahan pada halaman admin
  public function pendaftaran_suratperpindahan_admin()
  {
    // Digunakan untuk Pagination
    $currentPageSuratPerpindahan =  $this->request->getVar('page_pendaftaran_suratperpindahan') ? $this->request->getVar('page_pendaftaran_suratperpindahan') : 1;

    // Digunakan untuk Pencarian Data
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $orangSuratPerpindahan = $this->suratperpindahanModel->search($keyword);
    } else {
      $orangSuratPerpindahan = $this->suratperpindahanModel;
    }

    // Digunakan untuk menampilkan Detail data, Jumlah data per halaman serta Halamannya
    $data = [
      'title' => 'Data Pendaftaran Surat Perpindahan dari Majalengka ke Luar || Admin Disdukcapil',
      'pendaftaran_suratperpindahan' => $this->suratperpindahanModel->getDataSuratPerpindahan(),
      'pendaftaran_suratperpindahan' => $orangSuratPerpindahan->paginate(10, 'pendaftaran_suratperpindahan'),
      'pager' => $this->suratperpindahanModel->pager,
      'currentPage' => $currentPageSuratPerpindahan
    ];
    return view('admin/pendaftaran_suratperpindahan_admin', $data);
  }







  public function pendaftaran_suratperpindahanluar_admin()
  {
    // Digunakan untuk Pagination
    $currentPageSuratPerpindahanLuar = $this->request->getVar('page_pendaftaran_suratperpindahanluar') ? $this->request->getVar('page_pendaftaran_suratperpindahanluar') : 1;

    // Digunakan untuk Pencarian Data
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $orangSuratPerpindahanluar = $this->suratperpindahanluarModel->search($keyword);
    } else {
      $orangSuratPerpindahanluar = $this->suratperpindahanluarModel;
    }

    // Digunakan untuk menampilkan Detail data, Jumlah data per halaman serta Halamannya
    $data = [
      'title' => 'Data Pendaftaran Surat Perpindahan dari Luar ke Majalengka || Admin Disdukcapil',
      'pendaftaran_suratperpindahanluar' => $this->suratperpindahanluarModel->getDataSuratPerpindahanLuar(),
      'pendaftaran_suratperpindahanluar' => $orangSuratPerpindahanluar->paginate(10, 'pendaftaran_suratperpindahanluar'),
      'pager' => $this->suratperpindahanluarModel->pager,
      'currentPage' => $currentPageSuratPerpindahanLuar
    ];
    return  view('admin/pendaftaran_suratperpindahanluar_admin', $data);
  }







  // Menampilkan data aktakelahiran pada halaman Admin
  public function pendaftaran_aktakelahiran_admin()
  {
    // Digunakan untuk Pagination
    $currentPageAkla =  $this->request->getVar('page_pendaftaran_aktakelahiran') ? $this->request->getVar('page_pendaftaran_aktakelahiran') : 1;

    // Digunakan untuk Pencarian Data
    $keyword = $this->request->getVar('keyword');
    if ($keyword) {
      $orangAkla = $this->aktakelahiranModel->search($keyword);
    } else {
      $orangAkla = $this->aktakelahiranModel;
    }

    // Digunakan untuk menampilkan Detail data, Jumlah data per halaman serta halamannya
    $data = [
      'title' => 'Data Pendaftaran Akta Kelahiran || Admin Disdukcapil ',
      'pendaftaran_aktakelahiran' => $this->aktakelahiranModel->getDataAktaKelahiran(),
      'pendaftaran_aktakelahiran' => $orangAkla->paginate(10, 'pendaftaran_aktakelahiran'),
      'pager' => $this->aktakelahiranModel->pager,
      'currentPage' => $currentPageAkla
    ];
    return view('admin/pendaftaran_aktakelahiran_admin', $data);
  }








  // Menampilkan data Pendaftaran Akta Kematian pada halaman admin
  public function pendaftaran_aktakematian_admin()
  {
    // Menghubungkan Controller Admin degnan Pendaftaran aktakematian Model
    // $aktakematian = $this->aktalahirModel->findAll();
    $currentPageAkket =  $this->request->getVar('page_pendaftaran_aktakematian') ? $this->request->getVar('page_pendaftaran_aktakematian') : 1;
    $data = [
      'title' => 'Data Pendaftaran Akta Kematian || Admin Disdukcapil',
      'pendaftaran_aktakematian' => $this->aktakematianModel->getDataAktaKematian(),
      'pendaftaran_aktakematian' => $this->aktakematianModel->paginate(10, 'pendaftaran_aktakematian'),
      'pager' => $this->aktakematianModel->pager,
      'currentPage' => $currentPageAkket
    ];
    return view('admin/pendaftaran_aktakematian_admin', $data);
  }









  // Menampilkan Data Pendaftaran Keabsahan Akta Kelahiran Admin
  public function pendaftaran_keabsahanakla_admin()
  {
    // Menghubungkan Controller Admin degnan Pendaftaran aktakematian Model
    // $aktakematian = $this->aktalahirModel->findAll();
    $currentPageAkket =  $this->request->getVar('page_pendaftaran_aktakematian') ? $this->request->getVar('page_pendaftaran_aktakematian') : 1;
    $data = [
      'title' => 'Data Pendaftaran Keabsahan Akta Kelahiran || Admin Disdukcapil',
      'pendaftaran_keabsahanakla' => $this->keabsahanaklaModel->getDataKeabsahanakla(),
      'pendaftaran_keabsahanakla' => $this->keabsahanaklaModel->paginate(10, 'pendaftaran_keabsahanakla'),
      'pager' => $this->keabsahanaklaModel->pager,
      'currentPage' => $currentPageAkket
    ];
    return view('admin/pendaftaran_keabsahanakla_admin', $data);
  }








  // Menampilkan data Perbaikan data pada halaman Admin
  public function perbaikan_data_admin()
  {
    // Menghubungkan Controller Admin dengan Perbaikan data Model
    // $perbaikandata = $this->perbaikandataModel->findAll();
    $currentPagePerdat =  $this->request->getVar('page_perbaikan_data') ? $this->request->getVar('page_perbaikan_data') : 1;
    $data = [
      'title' => 'Data Pendaftaran Perbaikan Data || Admin Disdukcapil',
      'perbaikan_data' => $this->perbaikandataModel->getPerbaikanData(),
      'perbaikan_data' => $this->perbaikandataModel->paginate(10, 'perbaikan_data'),
      'pager' => $this->perbaikandataModel->pager,
      'currentPage' => $currentPagePerdat
    ];
    return view('admin/perbaikan_data_admin', $data);
  }








  // Menampilkan data Pengaduan Update pada halaman Admin
  public function pendaftaran_pengaduanupdate_admin()
  {
    // Menghubungkan Controller Admin dengan Pengaduan update Model
    // $pengaduanupdate = $this->pengaduanupdateModel->findAll();
    $currentPagePengdat =  $this->request->getVar('page_pengaduan_update') ? $this->request->getVar('page_pengaduan_update') : 1;
    $data = [
      'title' => 'Data Pendaftaran Pengaduan Update || Admin Disdukcapil',
      'pengaduan_update' => $this->pengaduanupdateModel->getDataPengaduanUpdate(),
      'pengaduan_update' => $this->pengaduanupdateModel->paginate(10, 'pengaduan_update'),
      'pager' => $this->pengaduanupdateModel->pager,
      'currentPage' => $currentPagePengdat
    ];
    return view('admin/pendaftaran_pengaduanupdate_admin', $data);
  }








  // Menampilkan data Perbaikan NIK pada halaman Admin
  public function pendaftaran_perbaikannik_admin()
  {
    // Menghubungkan Controller Admin dengan Perbaikan NIK Model
    // $perbaikannik = $this->perbaikannikModel->findAll();
    $currentPagePernik =  $this->request->getVar('page_perbaikan_nik') ? $this->request->getVar('page_perbaikan_nik') : 1;
    $data = [
      'title' => 'Data Perbaikan NIK || Admin Disdukcapil',
      'perbaikan_nik'   => $this->perbaikannikModel->getDataPerbaikanNIK(),
      'perbaikan_nik' => $this->perbaikannikModel->paginate(10, 'perbaikan_nik'),
      'pager' => $this->perbaikannikModel->pager,
      'currentPage' => $currentPagePernik
    ];
    return view('admin/pendaftaran_perbaikannik_admin', $data);
  }








  // Menampilkan Halaman Pelayanan KK
  // Digunakan untuk mengedit Judul, Foto dan Keterangan
  public function pelayananKK()
  {
    $data = [
      'title' => 'Pelayanan KK || Admin Disdukcapil '
    ];
    return view('admin/pelayananKK', $data);
  }
}

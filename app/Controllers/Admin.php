<?php

// Controller Admin

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BeritaModel;
use App\Models\InovasiModel;
use App\Models\Pendaftaran_aktakematian_Model;
use App\Models\Pendaftaran_aktalahir_Model;
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
  protected $aktakematianModel;
  protected $aktalahirModel;
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
    $this->aktakematianModel = new Pendaftaran_aktakematian_Model();
    $this->aktalahirModel = new Pendaftaran_aktalahir_Model();
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
    //Menghubungkan Controller Admin dengan AdminModel
    // $admin = $this->adminModel->findAll();
    $data = [
      'title' => 'Data Akun || Admin Disdukcapil',
      'admin' => $this->adminModel->getAkunAdmin()
    ];
    return view('admin/data_admin', $data);
  }

  // Menampilkan Detail Akun Admin
  public function detail_akun_admin($nama)
  {
    $data = [
      'title' => 'Detail Akun Admin || Disdukcapil Majalengka',
      'admin' => $this->adminModel->getAkunAdmin($nama)
    ];
    return view('admin/detail_akunadmin_admin', $data);
  }

  // Menampilkan form untuk tambah akun admin
  public function register()
  {
    $data = [
      'title' => 'Register || Admin Disdukcapil'
    ];
    return view('admin/register', $data);
  }

  public function saveAkunAdmin()
  {
    if (!$this->validate([])) {
      # code...
    }
    $this->adminModel->save([
      'nama' => $this->request->getVar('nama'),
      'email' => $this->request->getVar('email'),
      'password' => $this->request->getVar('password'),
      'level' => $this->request->getVar('level')
    ]);

    session()->setFlashdata('pesan', 'Akun Admin Berhasil Ditambahkan');

    return redirect()->to('/data_admin');
  }

  // Menampilkan data Berita pada halaman admin
  public function berita_admin()
  {
    // Menghubungkan Controller Admin dengan BeritaModel
    //$berita = $this->beritaModel->findAll();
    $data = [
      'title' => 'Berita Admin || Disdukcapil Majalengka',
      'berita' => $this->beritaModel->getBerita()
    ];
    return view('admin/berita_admin', $data);
  }

  // Menampilkan Detail Berita pada halaman Admin
  public function detail_berita_admin($judulBerita)
  {
    $data = [
      'title' => 'Detail Berita || Disdukcapil Majalengka',
      'berita' => $this->beritaModel->getBerita($judulBerita)
    ];
    // if (empty($data['judulberita'])) {
    //   throw new \CodeIgniter\Exceptions\PageNotFoundException('Berita yang dicari ' . $judulBerita . ' Tidak ditemukan');
    // }
    return view('admin/detail_berita_admin', $data);
  }

  // Menampilkan form untuk tambah berita 
  public function create_berita_admin()
  {
    session();
    $data = [
      'title' => 'Form Tambah Berita || Disdukcapil Majalengka',
      'validation' => \Config\Services::validation()
    ];
    return view('admin/create_berita_admin', $data);
  }

  // Digunakan untuk validasi form berita
  public function saveBerita()
  {
    // Validasi Input
    if (!$this->validate([
      'fotoberita' => [
        'rules' => 'required|is_unique[berita.judulberita]',
        'errors' => [
          'required' => '{field} Judul Berita harus diisi',
          'is_unique' => '{field} Judul Berita sudah terdaftar'
        ]
      ]
    ])) {
      $validation = \Config\Services::validation();
      return redirect()->to('createAdmin/create_berita_admin')->withInput()->with('validation', $validation);
    }

    $this->beritaModel->save([
      'fotoberita' => $this->request->getVar('fotoberita'),
      'judulberita' => $this->request->getVar('judulberita'),
      'keteranganberita' => $this->request->getVar('keteranganberita')
    ]);

    session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

    return redirect()->to('/berita_admin');
  }

  // public function deleteBerita($id)
  // {
  //   $this->beritaModel->delete($id);
  //   session()->setFlashdata('pesan', 'Data berhasil dihapus !!');
  //   return redirect()->to('/berita_admin');
  // }

  // Menampilkan data inovasi
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

  // Menampilkan detail inovasi admin
  public function detail_inovasi_admin($judulInovasi)
  {
    $data = [
      'title' => 'Detail Inovasi || Disdukcapil Majalengka',
      'inovasi' => $this->inovasiModel->getInovasi($judulInovasi)
    ];
    // if (empty($data['judulinovasi'])) {
    //   throw new \CodeIgniter\Exceptions\PageNotFoundException('Inovasi yang dicari ' . $judulInovasi . ' Tidak ditemukan');
    // }
    return view('admin/detail_inovasi_admin', $data);
  }

  // Menampilkan Form untuk menambah Inovasi Admin
  public function create_inovasi_admin()
  {
    $data = [
      'title' => 'Form Tambah Inovasi || Disdukcapil Majalengka'
    ];
    return view('admin/create_inovasi_admin', $data);
  }

  // Digunakan untuk validasi form inovasi
  public function saveInovasi()
  {
    if (!$this->validate([])) {
      # code...
    }
    $this->inovasiModel->save([
      'fotoinovasi' => $this->request->getVar('fotoinovasi'),
      'judulinovasi' => $this->request->getVar('judulinovasi'),
      'keteranganinovasi' => $this->request->getVar('keteranganinovasi')
    ]);

    session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');

    return redirect()->to('/inovasi_admin');
  }

  // Pemrosesan logout dan diarahkan ke Home Disdukcapil
  public function logout()
  {
    $data = [
      'title' => 'Home || Disdukcapil Majalengka'
    ];

    return view('pages/index', $data);
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

  // Menampilkan data aktalahir pada halaman Admin
  public function pendaftaran_aktalahir_admin()
  {
    // Menghubungkan Controller Admin dengan Pendaftaran aktalahir Model
    // $aktalahir = $this->aktalahirModel->findAll();
    $data = [
      'title' => 'Data Pendaftaran Akta Kelahiran || Admin Disdukcapil ',
      'kia' => $this->aktalahirModel->getDataAktalahir()
    ];
    return view('admin/pendaftaran_aktalahir_admin', $data);
  }

  // Menampilkan detail Pendaftaran Akta lahir pada halaman Admin
  public function detail_pendaftaranaktalahir_admin($namaPemohonAktalahir)
  {
    $data = [
      'title' => 'Detail Data Pendaftaran Akta lahir || Admin Disdukcapil',
      'pendaftaran_aktalahir' => $this->aktalahirModel->getDataAktalahir($namaPemohonAktalahir)
    ];
    return view('detailAdmin/detail_pendaftaranaktalahir_admin', $data);
  }

  // Menampilkan data Pendaftara Akta Kematian pada halaman admin
  public function pendaftaran_aktakematian_admin()
  {
    // Menghubungkan Controller Admin degnan Pendaftaran aktakematian Model
    // $aktakematian = $this->aktalahirModel->findAll();
    $data = [
      'title' => 'Data Pendaftaran Akta Kematian || Admin Disdukcapil',
      'pendaftaran_aktakematian' => $this->aktakematianModel->getDataKematian()
    ];
    return view('admin/pendaftaran_aktakematian_admin', $data);
  }

  // Menampilkan detail data Pendaftaran Akta Kematian pada halaman admin
  public function detail_pendaftaranaktakematian_admin($namaPemohonAktakematian)
  {
    $data = [
      'title' => 'Detail Data Pendaftaran Akta Kematian || Admin Disdukcapil',
      'pendaftaran_aktakematian' => $this->aktakematianModel->getDataKematian($namaPemohonAktakematian)
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
      'perbaikan_data' => $this->perbaikandataModel->getDataPerbaikan()
    ];
    return view('admin/perbaikan_data_admin', $data);
  }

  // Menampilkan detail Perbaikan Data pada Halaman Admin
  public function detail_perbaikandata_admin($namaPemohonPerbaikan)
  {
    $data = [
      'title' => 'Detail Data Pendaftaran Perbaikan Data || Admin Disdukcapil',
      'perbaikan_data' => $this->perbaikandataModel->getDataPerbaikan($namaPemohonPerbaikan)
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
      'pengaduan_update' => $this->pengaduanupdateModel->getDataPengaduan()
    ];
    return view('admin/pengaduan_update_admin', $data);
  }

  // Menampilkan detail Data Pengaduan pada halaman Admin
  public function detail_datapengaduan_admin($namaPemohonPengaduan)
  {
    $data = [
      'title' => 'Detail Data Pengaduan Update || Admin Disdukcapil',
      'pengaduan_update' => $this->pengaduanupdateModel->getDataPengaduan($namaPemohonPengaduan)
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
      'perbaikan_nik' => $this->perbaikannikModel->getDataPerbaikan()
    ];
    return view('admin/perbaikan_nik_admin', $data);
  }

  // Menampilkan detail Perbaikan NIK pada halaman Admin
  public function detail_perbaikannik_admin($namaPemohonPerbaikan)
  {
    $data = [
      'title' => 'Detail Data Perbaikan NIK || Admin Disdukcapil',
      'perbaikan_nik' => $this->perbaikannikModel->getDataPerbaikan($namaPemohonPerbaikan)
    ];
    return view('detailAdmin/detail_perbaikannik_admin', $data);
  }
}

<?php

namespace App\Controllers;

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

class CreateAdmin extends BaseController
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









  // Form Halaman Tambah Berita
  public function create_berita_admin()
  {
    $data = [
      'title' => 'Form Tambah Berita || Admin Disdukcapil',
      'validation' => \Config\Services::validation()
    ];
    return view('createadmin/create_berita_admin', $data);
  }

  // Untuk Validasi Halaman Tambah berita
  // Digunakan untuk validasi form berita
  public function saveBerita()
  {
    // Validasi Input
    if (!$this->validate([

      // Foto berita
      'fotoberita' => [
        'rules' => 'max_size[fotoberita,1024]|is_image[fotoberita]|mime_in[fotoberita,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'Ukuran Gambar terlalu besar !!',
          'is_image' => 'Yang anda pilih bukan gambar !!',
          'mime_in' => 'Yang anda pilih bukan gambar'
        ]
      ],
      // Judul berita
      'judulberita' => [
        'rules' => 'required[berita.judulberita]',
        'errors' => [
          'required' => 'Judul Berita Harus Diisi !!'
        ]
      ],
      // Keterangan berita
      'keteranganberita' => [
        'rules' => 'required[berita.keteranganberita]',
        'errors' => [
          'required' => 'Keterangan Berita Harus Diisi !!'
        ]
      ]

    ])) {
      // $validation = \Config\Services::validation();
      return redirect()->to(base_url() . '/CreateAdmin/create_berita_admin/')->withInput();
    }

    // Cara Memanggil Gambar
    $fileFotoBerita = $this->request->getFile('fotoberita');
    if ($fileFotoBerita->getError() == 4) {
      $namaFotoBerita = 'beritadef.PNG';
    } else {
      // Generate nama foto berita random
      $namaFotoBerita = $fileFotoBerita->getRandomName();
      // Memindahkan File Gambar ke Folder img/Berita
      $fileFotoBerita->move('img/berita', $namaFotoBerita);
    }

    $this->beritaModel->save([
      'fotoberita' => $namaFotoBerita,
      'judulberita' => $this->request->getVar('judulberita'),
      'keteranganberita' => $this->request->getVar('keteranganberita')
    ]);

    session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
    return redirect()->to('/Admin/berita_admin');
  }










  // Form Halaman Tambah Inovasi 
  public function create_inovasi_admin()
  {
    $data = [
      'title' => 'Form Tambah Inovasi || Admin Disdukcapil',
      'validation' => \Config\Services::validation()
    ];
    return view('createAdmin/create_inovasi_admin', $data);
  }

  // Digunakan Untuk Form Halaman Tambah Inovasi
  public function saveInovasi()
  {
    if (!$this->validate([

      // Foto Inovasi
      'fotoinovasi' => [
        'rules' => 'max_size[fotoinovasi,1024]|is_image[fotoinovasi]|mime_in[fotoinovasi,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'Ukuran Gambar terlalu besar !!',
          'is_image' => 'Yang anda pilih bukan gambar !!',
          'mime_in' => 'Yang anda pilih bukan gambar'
        ]
      ],
      // Judul Inovasi
      'judulinovasi' => [
        'rules' => 'required[inovasi.judulinovasi]',
        'errors' => [
          'required' => 'Judul Inovasi Harus diisi !!'
        ]
      ],
      // Keterangan Inovasi
      'keteranganinovasi' => [
        'rules' => 'required[inovasi.keteranganinovasi]',
        'errors' => [
          'required' => 'Keterangan Inovasi Harus diisi !!'
        ]
      ]
    ])) {
      // $validation = \Config\Services::validation();
      return redirect()->to(base_url() . '/CreateAdmin/create_inovasi_admin/')->withInput();
    }
    // Cara Memanggil Gambar
    $fileFotoInovasi = $this->request->getFile('fotoinovasi');
    // Jika terdapat Foto Inovasi yang tidak di upload 
    if ($fileFotoInovasi->getError() == 4) {
      $namaFotoInovasi = 'inovasidef.PNG';
    } else {
      // Generate nama foto random inovasi
      $namaFotoInovasi = $fileFotoInovasi->getRandomName();
      // Memindahkan FIle Gambar ke Folder img/Inovasi
      $fileFotoInovasi->move('img/inovasi', $namaFotoInovasi);
    }

    $this->inovasiModel->save([
      'fotoinovasi' => $namaFotoInovasi,
      'judulinovasi' => $this->request->getVar('judulinovasi'),
      'keteranganinovasi' => $this->request->getVar('keteranganinovasi')
    ]);
    session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
    return redirect()->to('admin/inovasi_admin');
  }










  // Form Halaman Tambah Akun Admin
  public function create_akun_admin()
  {
    $data = [
      'title' => 'Form Tambah Akun Admin || Admin Disdukcapil',
      'validation' => \Config\Services::validation()
    ];
    return view('createAdmin/create_akun_admin', $data);
  }

  public function saveAkun()
  {
    if (!$this->validate([

      // Nama
      'nama' => [
        'rules' => 'required[admin.nama]',
        'errors' => [
          'required' => 'Nama Harus Diisi !!'
        ]
      ],
      // Email
      'email' => [
        'rules' => 'required[admin.email]|valid_email|is_unique[admin.email]',
        'errors' => [
          'required' => 'Email Harus Diisi !!',
          'valid_email' => 'Mohon cek kembali format email yang digunakan !!'
        ]
      ],
      // Password
      'password' => [
        'rules' => 'required[admin.password]|min_length[10]|max_length[100]|alpha_numeric_punct',
        'errors' => [
          'required' => 'Password Harus Diisi !!',
          'min_length' => 'Password Karakter harus lebih dari 10 !!'
        ]
      ],
      // Level Akun
      'level' => [
        'rules' => 'required[admin.level]',
        'errors' => [
          'required' => 'Dipilih sesuai dengan Kebutuhan !!'
        ]
      ],
      // Foto Admin
      'foto_admin' => [
        'rules' => 'uploaded[admin.foto_admin]|is_image[foto_admin]|mime_in[foto_admin,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'uploaded' => 'Foto Admin Harus Diisi !!',
          'is_image' => 'Yang anda pilih bukan Gambar !!',
          'mime_in' => 'Yang anda pilih bukan Gambar !!'
        ]
      ]

    ])) {
      return redirect()->to(base_url() . '/createAdmin/create_akun_admin/')->withInput();
    }

    //
    $fotoAdmin = $this->request->getFile('foto_admin');
    if ($fotoAdmin->getError() == 4) {
      $namaFotoAdmin = 'img/akun.png';
    } else {
      $namaFotoAdmin = $fotoAdmin->getClientName();
      $fotoAdmin->move('img/imgAkunAdmin', $namaFotoAdmin);
    }

    $this->adminModel->save([
      'nama' => $this->request->getVar('nama'),
      'email' => $this->request->getVar('email'),
      'password' => $this->request->getVar('password'),
      'level' => $this->request->getVar('level'),
    ]);
    session()->setFlashdata('pesan', 'Selamat Anda Berhasil Melakukan Pendaftaran  !!');
    return redirect()->to('/admin/data_admin');
  }










  // Form Halaman Tambah Pelayanan
  public function create_persyaratansilancar_admin()
  {
    $data = [
      'title' => 'Form Halaman Tambah Persyaratan Si Lancar || Admin Disdukcapil',
      'validation' => \Config\Services::validation()
    ];
    return view('createAdmin/create_persyaratansilancar_admin', $data);
  }

  public function savePersyaratanSilancar()
  {
    if (!$this->validate([

      // Judul Persyaratan
      'judulpersyaratan' => [
        'rules' => 'required[persyaratansilancar.judulpersyaratan]',
        'errors' => [
          'required' => 'Judul Persyaratan Harus Di isi !!'
        ]
      ],
      // Foto Persyaratan
      'fotopersyaratan' => [
        'rules' => 'max_size[fotopersyaratan,2048]|is_image[fotopersyaratan]|mime_in[fotopersyaratan,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'Ukuran Gambar terlalu besar !!',
          'is_image' => 'Yang anda pilih bukan gambar !!',
          'mime_in' => 'Yang anda pilih bukan gambar'
        ]
      ],
      // Keterangan Persyaratan
      'keteranganpersyaratan' => [
        'rules' => 'required[persyaratansilancar.keteranganpersyaratan]',
        'errors' => [
          'required' => 'Keterangan Persyaratan Si Lancar Harus diisi !!'
        ]
      ]
    ])) {
      return redirect()->to(base_url() . '/CreateAdmin/create_persyaratansilancar_admin/')->withInput();
    }

    // Cara Memanggil Gambar
    $fileFotoPersyaratan = $this->request->getFile('fotopersyaratan');
    // Jika terdapat Foto Inovasi yang tidak di upload 
    if ($fileFotoPersyaratan->getError() == 4) {
      $namaFotoPersyaratan = 'inovasidef.PNG';
    } else {
      // Generate nama foto random inovasi
      $namaFotoPersyaratan = $fileFotoPersyaratan->getRandomName();
      // Memindahkan FIle Gambar ke Folder img/Inovasi
      $fileFotoPersyaratan->move('img/persyaratansilancar', $namaFotoPersyaratan);
    }

    $this->persyaratansilancarModel->save([
      'fotopersyaratan' => $namaFotoPersyaratan,
      'judulpersyaratan' => $this->request->getVar('judulpersyaratan'),
      'keteranganpersyaratan' => $this->request->getVar('keteranganpersyaratan')
    ]);

    session()->setFlashdata('pesan', 'Data Persyaratan Si Lancar Berhasil Ditambahkan');
    return redirect()->to('admin/persyaratansilancar_admin');
  }















  // Form Halaman Tambah Foto Pendaftaran Kartu Keluarga
  public function create_cardpendaftarankk_admin()
  {
    $data = [
      'title' => 'Form Tambah Foto Pendaftaran KK || Admin Disdukcapil',
      'validation' => \Config\Services::validation()
    ];
    return view('createAdmin/create_cardpendaftarankk_admin', $data);
  }

  // Digunakan untuk Validasi Halaman Pendaftaran KK
  public function saveCardPendaftaranKK()
  {
    if (!$this->validate([

      // Foto Pendaftaran KK
      'fotopelayanan' => [
        'rules' => 'max_size[fotopelayanan,2048]|is_image[fotopelayanan]|mime_in[fotopelayanan,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'Ukuran Foto Pendaftaran KK terlalu besar !!',
          'is_image' => 'File Foto Pendaftaran KK harus berupa Gambar !!',
          'mime_in' => 'Yang anda pilih bukan Gambar !!'
        ]
      ],
      // Judul Pendaftaran KK
      'judulpelayanan' => [
        'rules' => 'required[pelayanan_kk.judulpelayanan]',
        'errors' => [
          'required' => 'Judul Pelayanan KK Harus Di isi !!'
        ]
      ]

    ])) {
      return redirect()->to(base_url() . '/CreateAdmin/create_cardpendaftarankk_admin/')->withInput();
    }

    // Cara Memanggil Gambar
    $fileFotoPelayananKK = $this->request->getFile('fotopelayanan');
    if ($fileFotoPelayananKK->getError() == 4) {
      $namaFotoPelayananKK = '';
    } else {
      // Generate nama Foto Pelayanan
      $namaFotoPelayananKK = $fileFotoPelayananKK->getRandomName();
      // Memindahkan File Gambar ke Folder img/PelayananKK
      $fileFotoPelayananKK->move('img/pelayananKK', $namaFotoPelayananKK);
    }

    $this->pelkkModel->save([
      'judulpelayanan' => $this->request->getVar('judulpelayanan'),
      'fotopelayanan' => $namaFotoPelayananKK
    ]);
    session()->setFlashdata('pesan', 'Data Pelayanan KK berhasil Di tambahkan !!');
    return redirect()->to('/Admin/pelayanan');
  }
}

<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BeritaModel;
use App\Models\InovasiModel;
use App\Models\VisiMisiModel;
use App\Models\PersyaratansilancarModel;

use App\Models\Pendaftaran_kia_Model;
use App\Models\Pendaftaran_kk_Model;
use App\Models\Pendaftaran_ktp_Model;
use App\Models\Pendaftaran_aktakelahiran_Model;
use App\Models\Pendaftaran_aktakematian_Model;
use App\Models\Perbaikan_data_Model;
use App\Models\Pengaduan_update_Model;
use App\Models\Perbaikan_nik_Model;

use App\Models\Pelayanan_kk_Model;
use App\Models\Pelayanan_ktp_Model;
use App\Models\Pelayanan_kia_Model;
use App\Models\Pelayanan_aktakelahiran_Model;
use App\Models\Pelayanan_aktakematian_Model;
use App\Models\Pelayanan_perbaikandata_Model;
use App\Models\Pelayanan_pengaduanupdate_Model;
use App\Models\Pelayanan_perbaikannik_Model;

class EditUpdateAdmin extends BaseController
{

  protected $adminModel;
  protected $beritaModel;
  protected $inovasiModel;
  protected $visimisiModel;
  protected $persyaratansilancarModel;

  protected $kkModel;
  protected $ktpModel;
  protected $kiaModel;
  protected $aktakelahiranModel;
  protected $aktakematianModel;
  protected $perbaikandataModel;
  protected $pengaduanupdateModel;
  protected $perbaikannikModel;

  protected $pelkkModel;
  protected $pelktpModel;
  protected $pelkiaModel;
  protected $pelaktakelahiranModel;
  protected $pelaktakematianModel;
  protected $pelperbaikandataModel;
  protected $pelpengaduanupdateModel;
  protected $pelperbaikannikModel;

  public function __construct()
  {
    $this->adminModel = new AdminModel();
    $this->beritaModel = new BeritaModel();
    $this->inovasiModel = new InovasiModel();
    $this->visimisiModel = new VisiMisiModel();
    $this->persyaratansilancarModel = new PersyaratansilancarModel();

    $this->kkModel = new Pendaftaran_kk_Model();
    $this->ktpModel = new Pendaftaran_ktp_Model();
    $this->kiaModel = new Pendaftaran_kia_Model();
    $this->aktakelahiranModel = new Pendaftaran_aktakelahiran_Model();
    $this->aktakematianModel = new Pendaftaran_aktakematian_Model();
    $this->perbaikandataModel = new Perbaikan_data_Model();
    $this->pengaduanupdateModel = new Pengaduan_update_Model();
    $this->perbaikannikModel = new Perbaikan_nik_Model();

    $this->pelkkModel = new Pelayanan_kk_Model();
    $this->pelktpModel = new Pelayanan_ktp_Model();
    $this->pelkiaModel = new Pelayanan_kia_Model();
    $this->pelaktakelahiranModel = new Pelayanan_aktakelahiran_Model();
    $this->pelaktakematianModel = new Pelayanan_aktakematian_Model();
    $this->pelperbaikandataModel = new Pelayanan_perbaikandata_Model();
    $this->pelpengaduanupdateModel = new Pelayanan_pengaduanupdate_Model();
    $this->pelperbaikannikModel = new Pelayanan_perbaikannik_Model();
  }









  // Halaman Inovasi
  // Menampilkan Form untuk mengedit data berita
  public function editInovasi($judulInovasi)
  {
    $data = [
      'title' => 'Form Edit Data Inovasi || Disdukcapil Majalengka',
      'validation' => \Config\Services::validation(),
      'inovasi' => $this->inovasiModel->getInovasi($judulInovasi)
    ];
    return view('editAdmin/edit_inovasi_admin', $data);
  }

  public function updateInovasi($id)
  {
    // Digunakan untuk operasi judul berita 
    $inovasiLama = $this->inovasiModel->getInovasi($this->request->getVar('judulinovasi'));
    if ($inovasiLama['judulinovasi'] == $this->request->getVar('judulinovasi')) {
      $rule_judul = 'required';
    } else {
      $rule_judul = 'required|is_unique[inovasi.judulinovasi]';
    }

    // Validasi Input
    if (!$this->validate([
      // Judul inovasi
      'judulinovasi' => [
        'rules' => $rule_judul,
        'errors' => [
          'required' => 'Judul Inovasi Harus diisi !! ',
          'is_unique' => 'Judul Inovasi Sudah terdaftar !!'
        ]
      ],
      // Foto inovasi
      'fotoinovasi' => [
        'rules' => 'max_size[fotoinovasi,1024]|is_image[fotoinovasi]|mime_in[fotoinovasi,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'Ukuran Gambar terlalu besar !!',
          'is_image' => 'Yang anda pilih bukan gambar !!',
          'mime_in' => 'Yang anda pilih bukan gambar'
        ]
      ],
      // Keterangan Berita
      'keteranganinovasi' => [
        'rules' => 'required[inovasi.keteranganinovasi]',
        'errors' => [
          'required' => 'Keterangan Inovasi Harus Diisi !!'
        ]
      ]
    ])) {
      return redirect()->to(base_url() . '/EditUpdateAdmin/editInovasi/' . $this->request->getVar('judulinovasi'))->withInput();
    }

    $fileFotoInovasi = $this->request->getFile('fotoinovasi');

    if ($fileFotoInovasi->getError() == 4) {
      $namaFotoInovasi = $this->request->getVar('fotolama');
    } else {
      // Generate nama File Random
      $namaFotoInovasi = $fileFotoInovasi->getRandomName();
      // Memindahkan File Random 
      $fileFotoInovasi->move('img/inovasi', $namaFotoInovasi);
      // Menghapus File lama 
      unlink('img/inovasi/' . $this->request->getVar('fotolama'));
    }

    $this->inovasiModel->save(
      [
        'id' => $id,
        'fotoinovasi' => $namaFotoInovasi,
        'judulinovasi' => $this->request->getVar('judulinovasi'),
        'keteranganinovasi' => $this->request->getVar('keteranganinovasi')
      ]
    );
    session()->setFlashdata('pesan', 'Data Inovasi berhasil diubah !!');
    return redirect()->to('admin/inovasi_admin');
  }









  // Halaman Berita
  // Menampilkan Form untuk mengedit data berita
  public function editBerita($judulBerita)
  {
    $data = [
      'title' => 'Form Edit Data Berita || Disdukcapil Majalengka',
      'validation' => \Config\Services::validation(),
      'berita' => $this->beritaModel->getBerita($judulBerita)
    ];
    return view('editAdmin/edit_berita_admin', $data);
  }

  public function updateBerita($id)
  {
    // Digunakan untuk operasi judul berita 
    $beritaLama = $this->beritaModel->getBerita($this->request->getVar('judulberita'));
    if ($beritaLama['judulberita'] == $this->request->getVar('judulberita')) {
      $rule_judul = 'required';
    } else {
      $rule_judul = 'required|is_unique[berita.judulberita]';
    }

    // Validasi Input
    if (!$this->validate([
      // Judul berita
      'judulberita' => [
        'rules' => $rule_judul,
        'errors' => [
          'required' => 'Judul Berita Harus diisi !! ',
          'is_unique' => 'Judul Berita Sudah terdaftar !!'
        ]
      ],
      // Foto berita
      'fotoberita' => [
        'rules' => 'max_size[fotoberita,1024]|is_image[fotoberita]|mime_in[fotoberita,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'Ukuran Gambar terlalu besar !!',
          'is_image' => 'Yang anda pilih bukan gambar !!',
          'mime_in' => 'Yang anda pilih bukan gambar'
        ]
      ],
      // Keterangan Berita
      'keteranganberita' => [
        'rules' => 'required[berita.keteranganberita]',
        'errors' => [
          'required' => 'Keterangan Berita Harus Diisi !!'
        ]
      ]
    ])) {
      return redirect()->to(base_url() . '/EditUpdateAdmin/editBerita/' . $this->request->getVar('judulberita'))->withInput();
    }

    $fileFotoBerita = $this->request->getFile('fotoberita');

    if ($fileFotoBerita->getError() == 4) {
      $namaFotoBerita = $this->request->getVar('fotolama');
    } else {
      // Generate nama File Random
      $namaFotoBerita = $fileFotoBerita->getRandomName();
      // Memindahkan File Random 
      $fileFotoBerita->move('img/berita', $namaFotoBerita);
      // Menghapus File lama 
      unlink('img/berita/' . $this->request->getVar('fotolama'));
    }

    $this->beritaModel->save(
      [
        'id' => $id,
        'fotoberita' => $namaFotoBerita,
        'judulberita' => $this->request->getVar('judulberita'),
        'keteranganberita' => $this->request->getVar('keteranganberita')
      ]
    );
    session()->setFlashdata('pesan', 'Data Berita berhasil diubah !!');
    return redirect()->to('admin/berita_admin');
  }










  // Halaman Visi Misi 
  public function editVisiMisi($visimisi)
  {
    $data = [
      'title' => 'Form Edit Visi Misi || Disdukcapil Majalengka',
      'validation' => \Config\Services::validation(),
      'visimisi' => $this->visimisiModel->getVisiMisi($visimisi)
    ];
    return view('editAdmin/edit_visimisi_admin', $data);
  }

  public function updateVisiMisi($id)
  {
    if (!$this->validate([
      // Foto Visi Misi
      'fotovisimisi' => [
        'rules' => 'max_size[fotovisimisi,1024]|is_image[fotovisimisi]|mime_in[fotovisimisi,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'Ukuran Gambar terlalu besar !!',
          'is_image' => 'Yang anda pilih bukan gambar !!',
          'mime_in' => 'Yang anda pilih bukan gambar'
        ]
      ]
    ])) {

      return redirect()->to(base_url() . '/EditUpdateAdmin/editVisiMisi/' . $this->request->getVar('visi'))->withInput();
    }

    $fileFotoVisiMisi = $this->request->getFile('fotovisimisi');

    if ($fileFotoVisiMisi->getError() == 4) {
      $namaFotoVisiMisi = $this->request->getVar('fotolama');
    } else {
      // Generate nama File Random
      $namaFotoVisiMisi = $fileFotoVisiMisi->getRandomName();
      // Memindahkan File Random
      $fileFotoVisiMisi->move('img/visimisi', $namaFotoVisiMisi);
      // Menghapus File Lama
      unlink('img/visimisi/' . $this->request->getVar('fotolama'));
    }

    $this->visimisiModel->save(
      [
        'id' => $id,
        'fotovisimisi' => $namaFotoVisiMisi
      ]
    );
    session()->setFlashdata('pesan', 'Visi Misi Berhasil Diubah !!');
    return redirect()->to('admin/visimisi_admin');
  }










  // Halaman Persyaratan
  public function editPersyaratan($persyaratansilancar)
  {
    $data = [
      'title' => 'Form Edit Persyaratan || Admin Disdukcapil',
      'validation' => \Config\Services::validation(),
      'persyaratansilancar' => $this->persyaratansilancarModel->getPersyaratan($persyaratansilancar)
    ];
    return view('editAdmin/editPersyaratan', $data);
  }

  public function updatePersyaratan($id)
  {

    $persyaratanlama = $this->persyaratansilancarModel->getPersyaratan($this->request->getVar('judulpersyaratan'));
    if ($persyaratanlama['judulpersyaratan'] == $this->request->getVar('judulpersyaratan')) {
      $rule_judul = 'required';
    } else {
      $rule_judul = 'required|[persyaratansilancar.judulpersyaratan]';
    }

    if (!$this->validate([

      // Judul Persyaratan
      'judulpersyaratan' => [
        'rules' => $rule_judul,
        'errors' => [
          'required' => 'Judul Persyaratan harus diisi !!'
        ]
      ],
      // Foto Persyaratan
      'fotopersyaratan' => [
        'rules' => 'max_size[fotopersyaratan,2048]|is_image[fotopersyaratan]|mime_in[fotopersyaratan,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'File Gambar terlalu besar !!',
          'is_image' => 'Yang anda pilih bukan Gambar !!',
          'mime_in' => 'Gunakan Format JPG, JPEG dan PNG'
        ]
      ],
      // Keterangan Persyaratan
      'keteranganpersyaratan' => [
        'rules' => 'required[persyaratansilancar.keteranganpersyaratan]',
        'errors' => [
          'required' => 'Keterangan Persyaratan Harus Diisi !!'
        ]
      ]

    ])) {
      return redirect()->to(base_url() . 'EditUpdateAdmin/editPersyaratan/' . $this->request->getVar('judulpersyaratan'))->withInput();
    }

    $fileFotoPersyaratan = $this->request->getFile('fotopersyaratan');

    if ($fileFotoPersyaratan->getError() == 4) {
      $namaFotoPersyaratan = $this->request->getVar('fotolama');
    } else {
      // Generate nama File Random
      $namaFotoPersyaratan = $fileFotoPersyaratan->getRandomName();
      // Memindahkan File Random
      $fileFotoPersyaratan->move('img/persyaratan', $namaFotoPersyaratan);
      // Menghapus File lama
      unlink('img/persyaratan/' . $this->request->getVar('fotolama'));
    }

    $this->persyaratansilancarModel->save(
      [
        'id' => $id,
        'fotopersyaratan' => $namaFotoPersyaratan,
        'judulpersyaratan' => $this->request->getVar('judulpersyaratan'),
        'keteranganpersyaratan' => $this->request->getVar('keteranganpersyaratan')
      ]
    );
    session()->setFlashdata('pesan', 'Data Persyaratan berhasil diubah !!');
    return redirect()->to('admin/persyaratan');
  }










  // Halaman Edit Card Pelayanan KK
  public function edit_pelayanan_kk()
  {
    $data = [
      'title' => 'Form Edit Card Pelayanan Kartu Keluarga || Disdukcapil Majalengka',
      'validation' => \Config\Services::validation(),
      'pelayanan_kk' => $this->pelkkModel->getDataPelayananKK()
    ];
    return view('editAdmin/edit_pelayanan_kk', $data);
  }

  public function updatePelayanankk($id)
  {
    if (!$this->validate([
      'judulpelayanan' => [
        'rules' => 'required[pelayanan_kk.judulpelayanan]',
        'errors' => [
          'required' => 'Judul Pelayanan Harus Diisi !!'
        ]
      ],
      'fotopelayanan' => [
        'rules' => 'max_size[fotoberita,1024]|is_image[fotoberita]|mime_in[fotoberita,image/jpg,image/jpeg,image/png]',
        'errors' => [
          'max_size' => 'Ukuran Gambar terlalu besar !!',
          'is_image' => 'Yang anda pilih bukan gambar !!',
          'mime_in' => 'Yang anda pilih bukan gambar'
        ]
      ],
      'keteranganpelayanan' => [
        'rules' => 'required[pelayanan_kk.keteranganpelayanan]',
        'errors' => [
          'required' => 'Keterangan Pelayanan Harus Diisi !!'
        ]
      ]
    ])) {
      # code...
    }
  }











  // Halaman Edit Card Pelayanan KTP











  // Halaman Edit Card Pelayanan KIA










  // Halaman Edit Card Pelayanan Akta Kelahiran










  // Halaman Edit Card Pelayanan Akta Kematian










  // Halaman Edit Card Pelayanan Perbaikan Data











  // Halaman Edit Card Pelayanan Pengaduan Update











  // Halaman Edit Card Pelayanan Perbaikan NIK
}

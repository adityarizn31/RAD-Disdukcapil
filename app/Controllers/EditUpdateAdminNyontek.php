<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BeritaModel;
use App\Models\InovasiModel;
use App\Models\VisiMisiModel;

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

  public function updateBerita($judulBerita)
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
      'fotoberita' => [
        'rules' => $rule_judul,
        'errors' => [
          'required' => 'Foto Berita Harus diisi !! ',
          'is_unique' => 'Foto Berita Sudah terdaftar !!'
        ]
      ],
      'judulberita' => [
        'rules' => 'required[berita.judulberita]',
        'errors' => [
          'required' => 'Judul Berita Harus Diisi !!'
        ]
      ],
      'keteranganberita' => [
        'rules' => 'required[berita.keteranganberita]',
        'errors' => [
          'required' => 'Keterangan Berita Harus Diisi !!'
        ]
      ]
    ])) {
      return redirect()->to(base_url() . '/EditUpdateAdmin/editBerita/' . $this->request->getVar('judulberita'))->withInput();
    }
    $this->beritaModel->save(
      [
        'id' => $judulBerita,
        'fotoberita' => $this->request->getVar('fotoberita'),
        'judulberita' => $this->request->getVar('judulberita'),
        'keteranganberita' => $this->request->getVar('keteranganberita')
      ]
    );
    session()->setFlashdata('pesan', 'Data berhasil diubah !!');
    return redirect()->to('admin/berita_admin');
  }










  // Halaman Inovasi
  // Digunakan untuk menampilkan Form Edit Data
  public function editInovasi($judulInovasi)
  {
    $data = [
      'title' => 'Form Edit Data Inovasi || Disdukcapil Majalengka',
      'validation' => \Config\Services::validation(),
      'inovasi' => $this->inovasiModel->getInovasi($judulInovasi)
    ];
    return view('editAdmin/edit_inovasi_admin/', $data);
  }

  public function updateInovasi($judulInovasi)
  {
    // Digunakan untuk operasi Judul Inovasi
    $inovasiLama = $this->inovasiModel->getInovasi($this->request->getVar('judulinovasi'));
    if ($inovasiLama['judulinovasi'] == $this->request->getVar('judulinovasi')) {
      $rule_judul = 'required';
    } else {
      $rule_judul = 'required|is_unique[inovasi.judulinovasi]';
    }

    // Validasi Input
    if (!$this->validate([
      'fotoinovasi' => [
        'rules' => $rule_judul,
        'errors' => [
          'required' => 'Foto Inovasi Harus diisi !!',
          'is_unique' => 'Foto Inovasi Sudah terdaftar !!'
        ]
      ],
      'judulinovasi' => [
        'rules' => 'required[inovasi.judulinovasi]',
        'errors' => [
          'required' => 'Judul Inovasi Harus Diisi !!'
        ]
      ],
      'keteranganinovasi' => [
        'rules' => 'required[inovasi.keteranganinovasi]',
        'errors' => [
          'required' => 'Keterangan Inovasi Harus Diisi !!'
        ]
      ]
    ])) {
      return redirect()->to(base_url() . '/editAdmin/edit_inovasi_admin' . $this->request->getVar('judulinovasi'))->withInput();
    }
    $this->inovasiModel->save(
      [
        'id' => $judulInovasi,
        'fotoinovasi' => $this->request->getVar('fotoinovasi'),
        'judulinovasi' => $this->request->getVar('judulinovasi'),
        'keteranganinovasi' => $this->request->getVar('keteranganinovasi')
      ]
    );
    session()->setFlashdata('pesan', 'Data Inovasi berhasil dihapus !!');
    return redirect()->to('admin/inovasi_admin');
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

  public function updateVisiMisi($visimisi)
  {
    if (!$this->validate([
      'visi' => [
        'rules' => 'required[visimisi.visi]',
        'errors' => [
          'required' => '{field} Harus Diisi !!'
        ]
      ],
      'misi' => [
        'rules' => 'required[visimisi.misi]',
        'errors' => [
          'required' => '{field} Harus Diisi !!'
        ]
      ]
    ])) {
      $validation = \Config\Services::validation();
      return redirect()->to(base_url() . '/editAdmin/edit_visimisi_admin' . $this->request->getVar('visi'))->withInput();
    }
    $this->visimisiModel->save(
      [
        'id' => $visimisi,
        'visi' => $this->request->getVar('visi'),
        'misi' => $this->request->getVar('misi')
      ]
    );
    session()->setFlashdata('pesan', 'Visi Misi Berhasil Diubah !!');
    return redirect()->to('admin/visimisi_admin');
  }










  // Halaman Edit Card Pelayanan KK
  public function edit_pelayanan_kk($judulPelayanan_KK)
  {
    $data = [
      'title' => 'Form Edit Card Pelayanan Kartu Keluarga || Disdukcapil Majalengka',
      'validation' => \Config\Services::validation(),
      'pelayanan_kk' => $this->pelkkModel->getDataPelayananKK($judulPelayanan_KK)
    ];
    return view('editAdmin/edit_pelayanan_kk', $data);
  }











  // Halaman Edit Card Pelayanan KTP











  // Halaman Edit Card Pelayanan KIA










  // Halaman Edit Card Pelayanan Akta Kelahiran










  // Halaman Edit Card Pelayanan Akta Kematian










  // Halaman Edit Card Pelayanan Perbaikan Data











  // Halaman Edit Card Pelayanan Pengaduan Update











  // Halaman Edit Card Pelayanan Perbaikan NIK
}

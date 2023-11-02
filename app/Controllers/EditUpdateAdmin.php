<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\BeritaModel;
use App\Models\InovasiModel;
use App\Models\Pendaftaran_aktakelahiran_Model;
use App\Models\VisiMisiModel;
use App\Models\Pendaftaran_aktakematian_Model;
use App\Models\Pendaftaran_aktalahir_Model;
use App\Models\Pendaftaran_kia_Model;
use App\Models\Pendaftaran_kk_Model;
use App\Models\Pendaftaran_ktp_Model;
use App\Models\Perbaikan_data_Model;
use App\Models\Pengaduan_update_Model;
use App\Models\Perbaikan_nik_Model;

class EditUpdateAdmin extends BaseController
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
}

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

class DeleteAdmin extends BaseController
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










  // Halaman Berita
  // Digunakan untuk menghapus data berita
  public function deleteBerita($id)
  {
    // Mencari Gambar berdasarkan ID
    $berita = $this->beritaModel->find($id);
    // Mengecek Jika Gambarnya Default
    if ($berita['fotoberita'] != 'default.jpg') {
      // Hapus Gambar
      unlink('img/berita/' . $berita['fotoberita']);
    }
    $beritaModel = new BeritaModel();
    $beritaModel->delete($id);
    session()->setFlashdata('pesan', 'Data berhasil dihapus !!');
    return redirect()->to('admin/berita_admin');
  }










  // Halaman Inovasi
  // Digunakan untuk menghapus data inovasi
  public function deleteInovasi($id)
  {
    // Mencari Foto Inovasi Berdasarkan ID
    $inovasi = $this->inovasiModel->find($id);
    // Pengecekan Foto Inovasi
    if ($inovasi['fotoinovasi'] != 'inovasidef.PNG') {
      // Hapus Foto Inovasi
      unlink('img/inovasi/' . $inovasi['fotoinovasi']);
    }

    $inovasiModel = new InovasiModel();
    $inovasiModel->delete($id);
    session()->setFlashdata('pesan', 'Data Inovasi berhasil dihapus !!');
    return redirect()->to('admin/inovasi_admin');
  }
}

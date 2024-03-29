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

class DeleteAdmin extends BaseController
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

    $this->beritaModel->delete($id);
    session()->setFlashdata('pesan', 'Data berhasil dihapus !!');
    return redirect()->to('admin/berita_admin');
  }









  // Kodingan Delete Benar
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

    $this->inovasiModel->delete($id);
    session()->setFlashdata('pesan', 'Data Inovasi berhasil dihapus !!');
    return redirect()->to('admin/inovasi_admin');
  }









  // Kodingan Delete Benar
  // Halaman Persyaratan Si Lancar
  // Digunakan untuk menghapus data Persyaratan
  public function deletePersyaratan($id)
  {
    // Mencari Foto Persyaratan Berdasarkan ID
    $persyaratansilancar = $this->persyaratansilancarModel->find($id);
    // Pengecekan Foto Persyaratan
    if ($persyaratansilancar['fotopersyaratan'] != '') {
      // Hapus Foto Persyaratan
      unlink('img/persyaratansilancar/' . $persyaratansilancar['fotopersyaratan']);
    }


    $this->persyaratansilancarModel->delete($id);
    session()->setFlashdata('pesan', 'Data Persyaratan Si Lancar berhasil dihapus !!');
    return redirect()->to('admin/persyaratansilancar_admin');
  }
}

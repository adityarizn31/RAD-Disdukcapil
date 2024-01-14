<?php

// Controller untuk Export masing masing dataa

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

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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


class ExportExcel extends BaseController
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













  // Halaman Pendaftaran KK
  public function export_pendaftarankk()
  {
    $pendaftaranKK = new Pendaftaran_kk_Model();
    $dataPendaftaranKK = $pendaftaranKK->findAll();

    $spreadsheetPendaftaranKK = new Spreadsheet();
    $spreadsheetPendaftaranKK->setActiveSheetIndex(0)
      ->setCellValue('A1', 'Nama Pemohon')
      ->setCellValue('B1', 'Email Pemohon')
      ->setCellValue('C1', 'Nomor Pemohon')
      ->setCellValue('D1', 'Alamat Pemohon')
      ->setCellValue('E1', 'Formulir Desa')
      ->setCellValue('F1', 'Kartu Keluarga Suami')
      ->setCellValue('G1', 'Kartu Keluarga Istri')
      ->setCellValue('H1', 'Surat Nikah')
      ->setCellValue('I1', 'Surat Pindah');

    $column = 2;
    foreach ($dataPendaftaranKK as $KK) {
      $spreadsheetPendaftaranKK->setActiveSheetIndex(0)
        ->setCellValue('A' . $column, $KK['namapemohon'])
        ->setCellValue('B' . $column, $KK['emailpemohon'])
        ->setCellValue('C' . $column, $KK['nomorpemohon'])
        ->setCellValue('D' . $column, $KK['alamatpemohon'])
        ->setCellValue('E' . $column, $KK['formulirdesa'])
        ->setCellValue('F' . $column, $KK['kartukeluargasuami'])
        ->setCellValue('G' . $column, $KK['kartukeluargaistri'])
        ->setCellValue('H' . $column, $KK['suratnikah'])
        ->setCellValue('I' . $column, $KK['suratpindah']);
      $column++;
    }
    // Menuliskan dalam format
    $writerKK = new Xlsx($spreadsheetPendaftaranKK);
    $fileNameKK = 'Data Pendaftaran KK';

    // Redirect hasil generate Xlsx ke web
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename=' . $fileNameKK . '.xlsx');
    header('Cache-Control: max-age=0');

    $writerKK->save('php://output');
  }













  // Halaman Pendaftaran KIA
  public function export_pendaftarankia()
  {
    $pendaftaranKIA = new Pendaftaran_kia_Model();
    $dataPendaftaranKIA = $pendaftaranKIA->findAll();

    $spreadsheetPendaftaranKIA = new Spreadsheet();
    $spreadsheetPendaftaranKIA->setActiveSheetIndex(0)
      ->setCellValue('A1', 'Nama Pemohon')
      ->setCellValue('B1', 'Email Pemohon')
      ->setCellValue('C1', 'Nomor Pemohon')
      ->setCellValue('D1', 'Alamat Pemohon')
      ->setCellValue('E1', 'Akta Kelahiran')
      ->setCellValue('F1', 'Kartu Keluarga')
      ->setCellValue('G1', 'Pas Foto');

    $column = 2;
    foreach ($dataPendaftaranKIA as $KIA) {
      $spreadsheetPendaftaranKIA->setActiveSheetIndex(0)
        ->setCellValue('A' . $column, $KIA['namapemohon'])
        ->setCellValue('B' . $column, $KIA['emailpemohon'])
        ->setCellValue('C' . $column, $KIA['nomorpemohon'])
        ->setCellValue('D' . $column, $KIA['alamatpemohon'])
        ->setCellValue('E' . $column, $KIA['aktakelahiran'])
        ->setCellValue('F' . $column, $KIA['kartukeluarga'])
        ->setCellValue('G' . $column, $KIA['pasfoto']);
      $column++;
    }
    // Menuliskan dalam format
    $writerKIA = new Xlsx($spreadsheetPendaftaranKIA);
    $fileNameKIA = 'Data Pendaftaran KIA';

    // Redirect hasil generate Xlsx ke web
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename=' . $fileNameKIA . '.xlsx');
    header('Cache-Control: max-age=0');

    $writerKIA->save('php://output');
  }













  // Halaman Pendaftaran Surat Perpindahan
  public function export_pendaftaranSuratPerpindahan()
  {
    $pendaftaranSuratPerpindahan = new Pendaftaran_suratperpindahan_Model();
    $dataPendaftaranSuratPerpindahan = $pendaftaranSuratPerpindahan->findAll();

    $spreadsheetPendaftaranSuratPerpindahan = new Spreadsheet();
    $spreadsheetPendaftaranSuratPerpindahan->setActiveSheetIndex(0)
      ->setCellValue('A1', 'Nama Pemohon')
      ->setCellValue('B1', 'Email Pemohon')
      ->setCellValue('C1', 'Nomor Pemohon')
      ->setCellValue('D1', 'Alamat Pemohon')
      ->setCellValue('E1', 'formulirf102ktp')
      ->setCellValue('F1', 'kartukeluarga');

    $column = 2;
    foreach ($dataPendaftaranSuratPerpindahan as $Surpin) {
      $spreadsheetPendaftaranSuratPerpindahan->setActiveSheetIndex(0)
        ->setCellValue('A' . $column, $Surpin['namapemohon'])
        ->setCellValue('B' . $column, $Surpin['emailpemohon'])
        ->setCellValue('C' . $column, $Surpin['nomorpemohon'])
        ->setCellValue('D' . $column, $Surpin['alamatpemohon'])
        ->setCellValue('E' . $column, $Surpin['formulirf102ktp'])
        ->setCellValue('F' . $column, $Surpin['kartukeluarga']);
      $column++;
    }

    $writerSuratPerpindahan = new Xlsx($spreadsheetPendaftaranSuratPerpindahan);
    $fileNameSuratPerpindahan = 'Data Pendaftaran Surat Perpindahan';

    // Redirect hasil generate Xlsx ke web
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename=' . $fileNameSuratPerpindahan . '.xlsx');
    header('Cache-Control: max-age=0');

    $writerSuratPerpindahan->save('php://output');
  }












  // Halaman Pendaftaran Akta Kelahiran
  public function export_pendaftaranaktakelahiran()
  {
    $pendaftaranAkla = new Pendaftaran_aktakelahiran_Model();
    $dataPendaftaranAkla = $pendaftaranAkla->findAll();

    $spreadsheetPendaftaranAkla = new Spreadsheet();
    $spreadsheetPendaftaranAkla->setActiveSheetIndex(0)
      ->setCellValue('A1', 'Nama Pemohon')
      ->setCellValue('B1', 'Email Pemohon')
      ->setCellValue('C1', 'Nomor Pemohon')
      ->setCellValue('D1', 'Alamat Pemohon')
      ->setCellValue('E1', 'Formulir F201 Akta')
      ->setCellValue('F1', 'Surat Keterangan Lahir')
      ->setCellValue('G1', 'Kartu Keluarga')
      ->setCellValue('H1', 'KTP Ayah')
      ->setCellValue('I1', 'KTP Ibu');

    $column = 2;
    foreach ($dataPendaftaranAkla as $Akla) {
      $spreadsheetPendaftaranAkla->setActiveSheetIndex(0)
        ->setCellValue('A' . $column, $Akla['namapemohon'])
        ->setCellValue('B' . $column, $Akla['emailpemohon'])
        ->setCellValue('C' . $column, $Akla['nomorpemohon'])
        ->setCellValue('D' . $column, $Akla['alamatpemohon'])
        ->setCellValue('E' . $column, $Akla['formulirf201akta'])
        ->setCellValue('F' . $column, $Akla['suratketeranganlahir'])
        ->setCellValue('G' . $column, $Akla['kartukeluarga'])
        ->setCellValue('H' . $column, $Akla['ktpayah'])
        ->setCellValue('I' . $column, $Akla['ktpibu']);
      $column++;
    }
    // Menuliskan dalam format
    $writerAkla = new Xlsx($spreadsheetPendaftaranAkla);
    $fileNameAkla = 'Data Pendaftaran Akta Kelahiran';

    // Redirect hasil generate Xlsx ke web
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename=' . $fileNameAkla . '.xlsx');
    header('Cache-Control: max-age=0');

    $writerAkla->save('php://output');
  }













  // Halaman Pendaftaran Akta Kematian
  public function export_pendaftaranaktakematian()
  {
    $pendaftaranAkke = new Pendaftaran_aktakematian_Model();
    $dataPendaftaranAkke = $pendaftaranAkke->findAll();

    $spreadsheetPendaftaranAkke = new Spreadsheet();
    $spreadsheetPendaftaranAkke->setActiveSheetIndex(0)
      ->setCellValue('A1', 'Nama Pemohon')
      ->setCellValue('B1', 'Email Pemohon')
      ->setCellValue('C1', 'Nomor Pemohon')
      ->setCellValue('D1', 'Alamat Pemohon')
      ->setCellValue('E1', 'Kartu Keluarga')
      ->setCellValue('F1', 'Surat Kematian');

    $column = 2;
    foreach ($dataPendaftaranAkke as $Akke) {
      $spreadsheetPendaftaranAkke->setActiveSheetIndex(0)
        ->setCellValue('A' . $column, $Akke['namapemohon'])
        ->setCellValue('B' . $column, $Akke['emailpemohon'])
        ->setCellValue('C' . $column, $Akke['nomorpemohon'])
        ->setCellValue('D' . $column, $Akke['alamatpemohon'])
        ->setCellValue('E' . $column, $Akke['kartukeluarga'])
        ->setCellValue('F' . $column, $Akke['suratkematian']);
      $column++;
    }
    // Menuliskan dalam format
    $writerAkke = new Xlsx($spreadsheetPendaftaranAkke);
    $fileNameAkke = 'Data Pendaftaran Akta Kematian';

    // Redirect hasil generate Xlsx ke web
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename=' . $fileNameAkke . '.xlsx');
    header('Cache-Control: max-age=0');

    $writerAkke->save('php://output');
  }













  // Halaman Pendaftaran Perbaikan Data
  public function export_perbaikandata()
  {
    $pendaftaranPerbaikan = new Perbaikan_data_Model();
    $dataPendaftaranPerbaikan = $pendaftaranPerbaikan->findAll();

    $spreadsheetPendaftaranPerbaikan = new Spreadsheet();
    $spreadsheetPendaftaranPerbaikan->setActiveSheetIndex(0)
      ->setCellValue('A1', 'Nama Pemohon')
      ->setCellValue('B1', 'Email Pemohon')
      ->setCellValue('C1', 'Nomor Pemohon')
      ->setCellValue('D1', 'Alamat Pemohon')
      ->setCellValue('E1', 'Penjelasan Perbaikan')
      ->setCellValue('F1', 'Berkas Perbaikan 1')
      ->setCellValue('G1', 'Berkas Perbaikan 2')
      ->setCellValue('H1', 'Berkas Perbaikan 3');

    $column = 2;
    foreach ($dataPendaftaranPerbaikan as $Perdat) {
      $spreadsheetPendaftaranPerbaikan->setActiveSheetIndex(0)
        ->setCellValue('A' . $column, $Perdat['namapemohon'])
        ->setCellValue('B' . $column, $Perdat['emailpemohon'])
        ->setCellValue('C' . $column, $Perdat['nomorpemohon'])
        ->setCellValue('D' . $column, $Perdat['alamatpemohon'])
        ->setCellValue('E' . $column, $Perdat['penjelasanperbaikan'])
        ->setCellValue('F' . $column, $Perdat['berkasperbaikan1'])
        ->setCellValue('G' . $column, $Perdat['berkasperbaikan2'])
        ->setCellValue('H' . $column, $Perdat['berkasperbaikan3']);
      $column++;
    }
    // Menuliskan dalam format
    $writerPerdat = new Xlsx($spreadsheetPendaftaranPerbaikan);
    $fileNamePerdat = 'Data Pendaftaran Perbaikan Data';

    // Redirect hasil generate Xlsx ke web
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename=' . $fileNamePerdat . '.xlsx');
    header('Cache-Control: max-age=0');

    $writerPerdat->save('php://output');
  }













  // Halaman Pendaftaran Pengaduan Update
  public function export_pendaftaranpengaduanupdate()
  {
    $pendaftaranPengaduanUpdate = new Pengaduan_update_Model();
    $dataPengaduanUpdate = $pendaftaranPengaduanUpdate->findAll();

    $spreadsheetPengaduanUpdate = new Spreadsheet();
    $spreadsheetPengaduanUpdate->setActiveSheetIndex(0)
      ->setCellValue('A1', 'Nama Pemohon')
      ->setCellValue('B1', 'Email Pemohon')
      ->setCellValue('C1', 'Nomor Pemohon')
      ->setCellValue('D1', 'Alamat Pemohon')
      ->setCellValue('E1', 'Penjelasan Pengaduan')
      ->setCellValue('F1', 'Kartu Tanda Penduduk')
      ->setCellValue('G1', 'Kartu Keluarga');

    $column = 2;
    foreach ($dataPengaduanUpdate as $Pengdat) {
      $spreadsheetPengaduanUpdate->setActiveSheetIndex(0)
        ->setCellValue('A' . $column, $Pengdat['namapemohon'])
        ->setCellValue('B' . $column, $Pengdat['emailpemohon'])
        ->setCellValue('C' . $column, $Pengdat['nomorpemohon'])
        ->setCellValue('D' . $column, $Pengdat['alamatpemohon'])
        ->setCellValue('E' . $column, $Pengdat['pengaduanupdate'])
        ->setCellValue('F' . $column, $Pengdat['kartutandapenduduk'])
        ->setCellValue('G' . $column, $Pengdat['kartukeluarga']);
      $column++;
    }
    // Menuliskan dalam format
    $writerPengaduanUpdate = new Xlsx($spreadsheetPengaduanUpdate);
    $fileNamePengaduanUpdate = 'Data Pendaftaran Pengaduan Update';

    // Redirect hasil generate Xlsx ke web
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename=' . $fileNamePengaduanUpdate . '.xlsx');
    header('Cache-Control: max-age=0');

    $writerPengaduanUpdate->save('php://output');
  }
}

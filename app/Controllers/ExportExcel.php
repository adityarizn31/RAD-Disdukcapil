<?php

// Controller untuk Export masing masing dataa

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

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ExportExcel extends BaseController
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











  // Halaman Pendaftaran KTP
  public function export_pendaftaranktp()
  {
    $pendaftaranKTP = new Pendaftaran_ktp_Model();
    $dataPendaftaranKTP = $pendaftaranKTP->findAll();

    $spreadsheetPendaftaranKTP = new Spreadsheet();
    $spreadsheetPendaftaranKTP->setActiveSheetIndex(0)
      ->setCellValue('A1', 'Nama Pemohon')
      ->setCellValue('B1', 'Email Pemohon')
      ->setCellValue('C1', 'Nomor Pemohon')
      ->setCellValue('D1', 'Alamat Pemohon')
      ->setCellValue('E1', 'formulirf102ktp')
      ->setCellValue('F1', 'kartukeluarga');

    $column = 2;
    foreach ($dataPendaftaranKTP as $KTP) {
      $spreadsheetPendaftaranKTP->setActiveSheetIndex(0)
        ->setCellValue('A' . $column, $KTP['namapemohon'])
        ->setCellValue('B' . $column, $KTP['emailpemohon'])
        ->setCellValue('C' . $column, $KTP['nomorpemohon'])
        ->setCellValue('D' . $column, $KTP['alamatpemohon'])
        ->setCellValue('E' . $column, $KTP['formulirf102ktp'])
        ->setCellValue('F' . $column, $KTP['kartukeluarga']);
      $column++;
    }

    $writerKTP = new Xlsx($spreadsheetPendaftaranKTP);
    $fileNameKTP = 'Data Pendaftaran KTP';

    // Redirect hasil generate Xlsx ke web
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename=' . $fileNameKTP . '.xlsx');
    header('Cache-Control: max-age=0');

    $writerKTP->save('php://output');
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
      ->setCellValue('E1', 'Formulir Desa')
      ->setCellValue('F1', 'Kartu Keluarga Suami')
      ->setCellValue('G1', 'Kartu Keluarga Istri')
      ->setCellValue('H1', 'Surat Nikah')
      ->setCellValue('I1', 'Surat Pindah');
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















  // Halaman Perbaikan NIK
  public function export_pendaftaranPerbaikanNIK()
  {
    $pendaftaranPerbaikanNIK = new Perbaikan_nik_Model();
    $dataPendaftaranPerbaikanNIK = $pendaftaranPerbaikanNIK->findAll();

    $spreadsheetPendaftaranPerbaikanNIK = new Spreadsheet();
    $spreadsheetPendaftaranPerbaikanNIK->setActiveSheetIndex(0)
      ->setCellValue('A1', 'Nama Pemohon')
      ->setCellValue('B1', 'Email Pemohon')
      ->setCellValue('C1', 'Nomor Pemohon')
      ->setCellValue('D1', 'Alamat Pemohon')
      ->setCellValue('E1', 'Kartu Tanda Penduduk')
      ->setCellValue('F1', 'Kartu Keluarga');

    $column = 2;
    foreach ($dataPendaftaranPerbaikanNIK as $PerNIK) {
      $spreadsheetPendaftaranPerbaikanNIK->setActiveSheetIndex(0)
        ->setCellValue('A' . $column, $PerNIK['namapemohon'])
        ->setCellValue('B' . $column, $PerNIK['emailpemohon'])
        ->setCellValue('C' . $column, $PerNIK['nomorpemohon'])
        ->setCellValue('D' . $column, $PerNIK['alamatpemohon'])
        ->setCellValue('E' . $column, $PerNIK['formulirdesa'])
        ->setCellValue('F' . $column, $PerNIK['kartukeluargasuami'])
        ->setCellValue('G' . $column, $PerNIK['kartukeluargaistri'])
        ->setCellValue('H' . $column, $PerNIK['suratnikah'])
        ->setCellValue('I' . $column, $PerNIK['suratpindah']);
      $column++;
    }
    // Menuliskan dalam format
    $writerPerNIK = new Xlsx($spreadsheetPendaftaranPerbaikanNIK);
    $fileNamePerNIK = 'Data Pendaftaran KK';

    // Redirect hasil generate Xlsx ke web
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename=' . $fileNamePerNIK . '.xlsx');
    header('Cache-Control: max-age=0');

    $writerPerNIK->save('php://output');
  }
}
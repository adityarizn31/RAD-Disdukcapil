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



}

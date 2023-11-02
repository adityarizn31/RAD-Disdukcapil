<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4" style="margin-top: 25px;">
    <div class="card-header py-3" style="border: none; border: 0; outline: none; box-shadow: none;">
      <h6 class="m-0 font-weight-bold text-primary">Detail Data Pendaftaran Kartu Keluarga</h6>
    </div>

    <div class="col-sm-12 col-md-12" style="padding: 20px;">
      <div class="card card-outline card-primary">

        <div class="card-header">
          <div class="card-title"> Data Pemohon </div>
        </div>

        <div class="card-body">
          <table>

            <tr>
              <th width="150px">Nama</th>
              <th width="20px">:</th>
              <td><?= $pendaftaran_aktakelahiran['namapemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Email</th>
              <th width="">:</th>
              <td><?= $pendaftaran_aktakelahiran['emailpemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Nomor Pemohon</th>
              <th width="">:</th>
              <td><?= $pendaftaran_aktakelahiran['nomorpemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Alamat Pemohon</th>
              <th width="">:</th>
              <th><?= $pendaftaran_aktakelahiran['alamatpemohon']; ?></th>
            </tr>

          </table>

        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title"> Berkas Formulir F201 Akta Kelahiran </div>

            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/aktakelahiran/' . $pendaftaran_aktakelahiran['formurlirf201']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title"> Berkas Surat Keterangan Lahir </div>
            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/aktakelahiran/' . $pendaftaran_aktakelahiran['suratketeranganlahir']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title"> Berkas Kartu Keluarga </div>
            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/aktakelahiran/' . $pendaftaran_aktalahir['kartukeluarga']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title"> Berkas KTP Ayah </div>
            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/aktakelahiran/' . $pendaftaran_aktalahir['ktpayah']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title"> Berkas KTP Ibu </div>
            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/aktakelahiran/' . $pendaftaran_aktalahir['ktpibu']) ?>" frameborder="0" height="200" width="100%"></iframe>
            </div>

          </div>
        </div>


      </div>
    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
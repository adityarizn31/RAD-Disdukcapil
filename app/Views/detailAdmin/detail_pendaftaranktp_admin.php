<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4" style="margin-top: 25px;">

    <div class="card-header py-3" style="border: none; border: 0; outline: none; box-shadow: none;">
      <h4 class="m-0 font-weight-bold text-primary text-center">Detail Data Pendaftaran Kartu Tanda Penduduk</h4>
    </div>

    <div class="col-sm-12 col-md-12" style="padding: 10px;">
      <div class="card card-outline card-primary">

        <div class="card-header">
          <div class="card-title"> Data Pemohon </div>
        </div>

        <div class="card-body">
          <table>

            <tr>
              <th width="150px">Nama</th>
              <th width="20px">:</th>
              <td><?= $pendaftaran_ktp['namapemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Email</th>
              <th width="">:</th>
              <td><?= $pendaftaran_ktp['emailpemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Nomor Pemohon</th>
              <th width="">:</th>
              <td><?= $pendaftaran_ktp['nomorpemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Alamat Pemohon</th>
              <th width="">:</th>
              <td><?= $pendaftaran_ktp['alamatpemohon']; ?></td>
            </tr>

          </table>

        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title"> Berkas Formulir F102 KTP </div>

            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/ktp/' . $pendaftaran_ktp['formulirf102ktp']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title"> Berkas Kartu Keluarga </div>
            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/ktp/' . $pendaftaran_ktp['kartukeluarga']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
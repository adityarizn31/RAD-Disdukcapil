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

    <div class="container">
      <div class="row">
        <?php if (session()->getFlashdata('pesan')) : ?>

          <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
          </div>

        <?php endif; ?>
      </div>
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
              <td><?= $pendaftaran_aktakelahiran['alamatpemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Status</th>
              <th width="">:</th>
              <td><?= $pendaftaran_aktakelahiran['status']; ?></td>
            </tr>

          </table>

          <div class="grid-container2 align-items-center justify-content-center">

            <div class="div">
              <a href="<?= base_url('/DetailAdmin/selesaiAktaKelahiran/' . $pendaftaran_aktakelahiran['namapemohon']) ?>" class="btn btn-success" data-popup="tooltip" data-placement="top" title="Selesai"><i class="bi bi-check-square" aria-hidden="true"></i></a>
            </div>

            <div class="div">
              <a href="<?= base_url('/DetailAdmin/belumSelesaiAktaKelahiran/' . $pendaftaran_aktakelahiran['namapemohon']) ?>" class="btn btn-danger" data-popup="tooltip" data-placement="top" title="Tidak Selesai"><i class="bi bi-x-square" aria-hidden="true"></i></a>
            </div>

          </div>

        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title"> Berkas Formulir F201 Akta Kelahiran </div>
            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/aktakelahiran/' . $pendaftaran_aktakelahiran['formulirf201akta']) ?>" frameborder="0" height="500" width="100%"></iframe>
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
              <iframe src="<?= base_url('/pelayanan/aktakelahiran/' . $pendaftaran_aktakelahiran['kartukeluarga']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title"> Berkas KTP Ayah </div>
            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/aktakelahiran/' . $pendaftaran_aktakelahiran['ktpayah']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title"> Berkas KTP Ibu </div>
            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/aktakelahiran/' . $pendaftaran_aktakelahiran['ktpibu']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>


      </div>
    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4" style="margin-top: 25px;">

    <div class="card-header py-3" style="border: none; border: 0; outline: none; box-shadow: none;">
      <h4 class="m-0 font-weight-bold text-primary text-center">Detail Data Pengaduan Update</h4>
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
              <td><?= $pengaduan_update['namapemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Email</th>
              <th width="">:</th>
              <td><?= $pengaduan_update['emailpemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Nomor Pemohon</th>
              <th width="">:</th>
              <td><?= $pengaduan_update['nomorpemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Alamat Pemohon</th>
              <th width="">:</th>
              <td><?= $pengaduan_update['alamatpemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Pengaduan Update</th>
              <th width="">:</th>
              <td><?= $pengaduan_update['pengaduanupdate']; ?></td>
            </tr>

            <tr>
              <th width="">Status</th>
              <th width="">:</th>
              <td><?= $pengaduan_update['status']; ?></td>
            </tr>

          </table>

          <div class="grid-container2 align-items-center justify-content-center">

            <div class="div">
              <a href="<?= base_url('/DetailAdmin/selesaiPengaduanUpdate/' . $pengaduan_update['namapemohon']) ?>" class="btn btn-success" data-popup="tooltip" data-placement="top" title="Selesai"><i class="bi bi-check-square" aria-hidden="true"></i></a>
            </div>

            <div class="div">
              <a href="<?= base_url('/DetailAdmin/belumSelesaiPengaduanUpdate/' . $pengaduan_update['namapemohon']) ?>" class="btn btn-danger" data-popup="tooltip" data-placement="top" title="Tidak Selesai"><i class="bi bi-x-square" aria-hidden="true"></i></a>
            </div>

          </div>

        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title"> Berkas Kartu Tanda Penduduk </div>

            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/pengaduan_update/' . $pengaduan_update['kartutandapenduduk']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title"> Berkas Kartu Keluarga </div>
            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/pengaduan_update/' . $pengaduan_update['kartukeluarga']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
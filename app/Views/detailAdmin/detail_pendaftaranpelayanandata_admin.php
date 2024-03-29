<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4" style="margin-top: 25px;">

    <div class="card-header py-3" style="border: none; border: 0; outline: none; box-shadow: none;">
      <h4 class="m-0 font-weight-bold text-primary text-center">Detail Data Pendaftaran Pelayanan Pemanfaatan Data & Inovasi dan Pengaduan Antar Lembaga</h4>
    </div>

    <div class="col-sm-12 col-md-12" style="padding: 10px;">
      <div class="card card-outline card-primary">

        <div class="card-header">
          <div class="card-title fw-semibold"> Data Pemohon </div>
        </div>

        <div class="card-body">
          <table>

            <tr>
              <th width="150px">Nama</th>
              <th width="20px">:</th>
              <td><?= $pendaftaran_pelayanandata['namapemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Email</th>
              <th width="">:</th>
              <td><?= $pendaftaran_pelayanandata['emailpemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Nomor Pemohon</th>
              <th width="">:</th>
              <td><?= $pendaftaran_pelayanandata['nomorpemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Alamat Pemohon</th>
              <th width="">:</th>
              <td><?= $pendaftaran_pelayanandata['alamatpemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Status</th>
              <th width="">:</th>
              <td><?= $pendaftaran_pelayanandata['status']; ?></td>
            </tr>

          </table>

          <div class="grid-container2 align-items-center justify-content-center">
            <div class="div">
              <a href="<?= base_url('/DetailAdmin/selesaiPelayananData/' . $pendaftaran_pelayanandata['namapemohon']) ?>" class="btn btn-success" data-popup="tooltip" data-placement="top" title="Selesai"><i class="bi bi-check-square" aria-hidden="true"></i></a>
            </div>

            <div class="div">
              <a href="<?= base_url('/DetailAdmin/belumSelesaiPelayananData/' . $pendaftaran_pelayanandata['namapemohon']) ?>" class="btn btn-danger" data-popup="tooltip" data-placement="top" title="Tidak Selesai"><i class="bi bi-x-square" aria-hidden="true"></i></a>
            </div>
          </div>

        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title fw-semibold"> Berkas Pelayanan 1 </div>

            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/pelayanandata/' . $pendaftaran_pelayanandata['berkaspelayanan1']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title fw-semibold"> Berkas Pelayanan 2 </div>

            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/pelayanan_data/' . $pendaftaran_pelayanandata['berkaspelayanan2']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title fw-semibold"> Berkas Pelayanan 3 </div>

            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/pelayanan_data/' . $pendaftaran_pelayanandata['berkaspelayanan3']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title fw-semibold"> Berkas Pelayanan 4 </div>

            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/pelayanan_data/' . $pendaftaran_pelayanandata['berkaspelayanan4']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title fw-semibold"> Berkas Pelayanan 5 </div>

            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/pelayanan_data/' . $pendaftaran_pelayanandata['berkaspelayanan5']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title fw-semibold"> Berkas Pelayanan 6 </div>

            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/pelayanan_data/' . $pendaftaran_pelayanandata['berkaspelayanan6']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title fw-semibold"> Berkas Pelayanan 7 </div>

            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/pelayanan_data/' . $pendaftaran_pelayanandata['berkaspelayanan7']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title fw-semibold"> Berkas Pelayanan 8 </div>

            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/pelayanan_data/' . $pendaftaran_pelayanandata['berkaspelayanan8']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title fw-semibold"> Berkas Pelayanan 9 </div>

            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/pelayanan_data/' . $pendaftaran_pelayanandata['berkaspelayanan9']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title fw-semibold"> Berkas Pelayanan 10 </div>

            </div>P

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/pelayanan_data/' . $pendaftaran_pelayanandata['berkaspelayanan10']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>


      </div>
    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
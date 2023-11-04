<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4" style="margin-top: 25px;">

    <div class="card-header py-3" style="border: none; border: 0; outline: none; box-shadow: none;">
      <h4 class="m-0 font-weight-bold text-primary text-center">Detail Data Perbaikan Data</h4>
    </div>

    <div class="col-sm-12 col-md-12" style="padding: 20px;">
      <div class="card card-outline card-primary">

        <div class="card-header">
          <div class="card-title"> Data Pemohon </div>
        </div>

        <div class="card-body">
          <table>

            <tr>
              <th width="170px">Nama</th>
              <th width="20px">:</th>
              <td><?= $perbaikan_data['namapemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Email</th>
              <th width="">:</th>
              <td><?= $perbaikan_data['emailpemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Nomor Pemohon</th>
              <th width="">:</th>
              <td><?= $perbaikan_data['nomorpemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Alamat Pemohon</th>
              <th width="">:</th>
              <td><?= $perbaikan_data['alamatpemohon']; ?></td>
            </tr>

            <tr>
              <th width="">Penjelasan Perbaikan</th>
              <th width="">:</th>
              <td><?= $perbaikan_data['penjelasanperbaikan']; ?></td>
            </tr>

          </table>

        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title"> Berkas Perbaikan 1 </div>

            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/perbaikan_data/' . $perbaikan_data['berkasperbaikan1']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title"> Berkas Perbaikan 2 </div>
            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/perbaikan_data/' . $perbaikan_data['berkasperbaikan2']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

        <div class="col-sm-12 col-md-12" style="padding: 20px;">
          <div class="card card-outline card-primary">

            <div class="card-header">
              <div class="card-title"> Berkas Perbaikan 3 </div>
            </div>

            <div class="col-sm-12">
              <iframe src="<?= base_url('/pelayanan/perbaikan_data/' . $perbaikan_data['berkasperbaikan3']) ?>" frameborder="0" height="500" width="100%"></iframe>
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
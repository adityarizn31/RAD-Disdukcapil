<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4" style="margin-top: 25px;">

    <!-- <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran KK</h6>
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div> -->

    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h4 class="m-0 font-weight-bold text-primary">Data Pendaftaran KK</h4>
        <a href="<?= base_url('ExportExcel/export_pendaftarankk') ?>" method="POST" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-2"><i class="fas fa-download fa-sm text-white-50"></i> Downloads Data</a>
      </div>
    </div>

    <div class="card-body">

      <table class="table table-fixed table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pemohon</th>
            <th scope="col">Email Pemohon</th>
            <th scope="col">No Whatsapp</th>
            <th scope="col">Permohonan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($pendaftaran_kk as $kk) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $kk['namapemohon']; ?></td>
              <td><?= $kk['emailpemohon']; ?></td>
              <td><?= $kk['nomorpemohon']; ?></td>
              <td>Pendaftaran KK</td>
              <td>
                <a href="/DetailAdmin/detail_pendaftarankk_admin/<?= $kk['namapemohon']; ?>" class="btn btn-success">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>

    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
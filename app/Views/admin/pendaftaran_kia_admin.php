<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4" style="margin-top: 25px;">

    <!-- <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran KIA</h6>
    </div> -->

    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h4 class="m-0 font-weight-bold text-primary">Data Pendaftaran KIA</h4>
        <a href="<?= base_url('ExportExcel/export_pendaftarankia') ?>" method="POST" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-2"><i class="fas fa-download fa-sm text-white-50"></i> Downloads Data</a>
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
          <tr>
            <?php $i = 1; ?>
            <?php foreach ($pendaftaran_kia as $kia) : ?>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $kia['namapemohon']; ?></td>
              <td><?= $kia['emailpemohon']; ?></td>
              <td><?= $kia['nomorpemohon']; ?></td>
              <td>Pendaftaran KIA</td>
              <td>
                <a href="/DetailAdmin/detail_pendaftarankia_admin/<?= $kia['namapemohon']; ?>" class="btn btn-success">Detail</a>
              </td>
            <?php endforeach; ?>
          </tr>
        </tbody>

      </table>

    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4" style="margin-top: 25px;">

    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h4 class="m-0 font-weight-bold text-primary">Data Pendaftaran Akta Kematian</h4>
        <a href="<?= base_url('ExportExcel/export_pendaftaranaktakematian') ?>" method="POST" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-2"><i class="fas fa-download fa-sm text-white-50"></i> Downloads Data</a>
      </div>
    </div>

    <div class="card-body">

      <table class="table table-fixed table-hover">

        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pemohon</th>
            <th scope="col">Whatsapp Pemohon</th>
            <th scope="col">Email Pemohon</th>
            <th scope="col">Permohonan</th>
            <th scope="col">Waktu</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php $i = 1 + (10 * ($currentPage - 1)); ?>
          <?php foreach ($pendaftaran_aktakematian as $kema) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $kema['namapemohon']; ?></td>
              <td><?= $kema['emailpemohon']; ?></td>
              <td><?= $kema['nomorpemohon']; ?></td>
              <td>Akta Kematian</td>
              <td><?= $kema['created_at']; ?></td>
              <td>
                <a href="/DetailAdmin/detail_pendaftaranaktakematian_admin/<?= $kema['namapemohon']; ?>" class="btn btn-success">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
      <?= $pager->links('pendaftaran_aktakematian', 'aktakematian_pagination'); ?>
    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
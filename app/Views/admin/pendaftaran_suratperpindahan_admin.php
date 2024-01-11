<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4" style="margin-top: 25px;">

    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h4 class="m-0 font-weight-bold text-primary">Data Pendaftaran Surat Perpindahan Majalengka Menuju Luar</h4>
        <a href="<?= base_url('ExportExcel/export_pendaftaransuratperpindahan') ?>" method="POST" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-2"><i class="fas fa-download fa-sm text-white-50"></i> Downloads Data</a>
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
            <th scope="col">Waktu</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php $i = 1 + (10 * ($currentPage - 1)); ?>
          <?php foreach ($pendaftaran_suratperpindahan as $surpin) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $surpin['namapemohon']; ?></td>
              <td><?= $surpin['emailpemohon']; ?></td>
              <td><?= $surpin['nomorpemohon']; ?></td>
              <td>Pendaftaran Surat Perpindahan</td>
              <td><?= $surpin['created_at']; ?></td>
              <td>
                <a href="/DetailAdmin/detail_pendaftaransuratperpindahan_admin/<?= $surpin['namapemohon']; ?>" class="btn btn-success">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
      <?= $pager->links('pendaftaran_suratperpindahan', 'suratperpindahan_pagination'); ?>
    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
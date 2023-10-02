<!-- Halaman List Inovasi Admin -->

<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4 border-2" style="margin-top: 25px;">
    <div class="card-header py-3">

      <div class="d-sm-flex align-items-center justify-content-between" style="padding-top: 10px;">
        <h6 class="m-0 font-weight-bold text-primary">Inovasi Disdukcapil Majalengka</h6>

        <!-- Methode Create untuk Menampilkna Form Insert Data -->
        <a href="/admin/create_inovasi_admin/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Inovasi</a>

      </div>

    </div>

    <div class="card-body">
      <table class="table table-fixed table-hover">

        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Foto Inovasi</th>
            <th scope="col">Judul</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($inovasi as $inov) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><img src="/img/inovasi/<?= $inov['fotoinovasi']; ?>" class="foto_inovasi" alt="Foto Inovasi"></td>
              <td><?= $inov['judulinovasi']; ?></td>
              <td><?= $inov['keteranganinovasi']; ?></td>
              <td>
                <a href="/admin/detail_inovasi_admin/<?= $inov['judulinovasi']; ?>" class="btn btn-success">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
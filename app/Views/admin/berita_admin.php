<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4" style="margin-top: 25px;">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Berita Disdukcapil Majalengka</h6>
    </div>

    <div class="card-body">
      <table class="table table-fixed table-hover">

        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Foto Berita</th>
            <th scope="col">Judul</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($berita as $b) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><img src="/img/berita/<?= $b['foto_berita']; ?>" class="foto_berita" alt="" srcset=""></td>
              <td><?= $b['judul']; ?></td>
              <td><?= $b['keterangan']; ?></td>
              <td><a href="/admin/berita_admin/<?= $b['judul']; ?>" class="btn btn-success">Detail</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
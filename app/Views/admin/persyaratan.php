<!-- Halaman Pelayanan untuk Admin == Mengubah Judul, Gambar dan Keterangan -->

<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4 border-2" style="margin-top: 25px;">

    <div class="card-header py-3">

      <div class="d-sm-flex align-items-center justify-content-between" style="padding-top: 10px;">
        <h6 class="m-0 font-weight-bold text-primary">Pelayanan Persyaratan Disdukcapil Majalengka</h6>
      </div>

    </div>

    <div class="container mt-4">
      <div class="row">
        <div class="col">

          <?php if (session()->getFlashdata('pesan')) : ?>

            <div class="alert alert-success" role="alert">
              <?= session()->getFlashdata('pesan'); ?>
            </div>

          <?php endif; ?>

        </div>
      </div>
    </div>

    <div class="card-body">
      <table class="table table-fixed table-hover">

        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Foto Persyaratan</th>
            <th scope="col">Judul Persyaratan</th>
            <th scope="col">Keterangan Persyaratan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($persyaratansilancar as $pely) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><img src="/img/persyaratan/<?= $pely['fotopersyaratan']; ?>" class="fotopersyaratan" alt="Foto persyaratan"></td>
              <td><?= $pely['judulpersyaratan']; ?></td>
              <td><?= $pely['keteranganpersyaratan']; ?></td>
              <td>
                <a href="/DetailAdmin/detailPersyaratan/<?= $pely['judulpersyaratan']; ?>" class="btn btn-success">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
    </div>

  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
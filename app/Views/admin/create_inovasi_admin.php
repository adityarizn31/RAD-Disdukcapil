<!-- Halaman Tambah Inovasi Admin -->

<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4 border-2" style="margin-top: 25px; padding: 20px;">
    <div class="container">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Inovasi Admin</h6>
      </div>

      <form action="/admin/saveInovasi" method="post">

        <?= csrf_field(); ?>

        <div class="row">
          <div class="mb-3">
            <label for="judulinovasi" class="form-label fw-semibold">Judul Inovasi</label>
            <input type="text" class="form-control" name="judulinovasi" id="judulinovasi">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="fotoinovasi" class="form-label fw-semibold">Foto Inovasi</label>
            <input type="file" class="form-control" name="fotoinovasi" id="fotoinovasi">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="keteranganinovasi" class="form-label fw-semibold">Keterangan Inovasi</label>
            <br>
            <textarea class=" form-control text-area" name="keteranganinovasi" id="keteranganinovasi"></textarea>
          </div>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
          <input type="submit" value="Submit" id="submit" class="btn-primary rounded-md">
        </div>

      </form>

    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
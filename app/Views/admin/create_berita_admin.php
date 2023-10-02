<!-- Halaman Tambah Berita Admin -->

<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4 border-2" style="margin-top: 25px; padding: 20px;">
    <div class="container">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Berita admin</h6>
      </div>

      <?= $validation->listErrors(); ?>

      <form action="/admin/saveBerita" method="post">

        <!-- Keamanan -->
        <?= csrf_field(); ?>

        <div class="row">
          <div class="mb-3">
            <label for="judulberita" class="form-label fw-semibold">Judul Berita</label>
            <input type="text" class="form-control <?= ($validation->hasError('judulberita')) ? 'is-invalid' : ''; ?>" name="judulberita" id="judulberita" autofocus>
            <div class="invalid-feedback">
              <?= $validation->getError('judulberita'); ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="fotoberita" class="form-label fw-semibold">Foto Berita</label>
            <!-- <input type="text" class="form-control" src="Foto Berita" alt="Foto Berita"> -->
            <input type="text" class="form-control" name="fotoberita" id="fotoberita" alt="Foto Berita">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="keteranganberita" class="form-label fw-semibold">Keterangan</label>
            <br>
            <textarea name="keteranganberita" id="keteranganberita" class="form-control text-area"></textarea>
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
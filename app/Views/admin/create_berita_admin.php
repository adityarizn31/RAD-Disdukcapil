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

      <form action="/admin/saveBerita" method="post" enctype="multipart/form-data">

        <!-- Keamanan -->
        <?= csrf_field(); ?>

        <!-- Form Judul Berita -->
        <div class="row">
          <div class="mb-3">
            <label for="judulberita" class="form-label fw-semibold">Judul Berita</label>
            <input type="text" class="form-control <?= ($validation->hasError('judulberita')) ? 'is-invalid' : ''; ?>" name="judulberita" id="judulberita" autofocus value="<?= old('judulberita'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('judulberita'); ?>
            </div>
          </div>
        </div>

        <!-- Form Upload File -->
        <div class="row">
          <div class="mb-3">
            <label for="fotoberita" class="form-label fw-semibold">Foto Berita</label>
            <div class="mb-3">
              <input class="form-control <?= ($validation->hasError('fotoberita')) ? 'is-invalid' : ''; ?>" type="file" name="fotoberita" id="fotoberita">
              <div class="invalid-feedback">
                <?= $validation->getError('fotoberita'); ?>
              </div>
            </div>
          </div>
        </div>

        <!-- Form Keterangan Berita -->
        <div class="row">
          <div class="mb-3">
            <label for="keteranganberita" class="form-label fw-semibold">Keterangan</label>
            <br>
            <textarea name="keteranganberita" id="keteranganberita" class="form-control text-area <?= ($validation->hasError('keteranganberita')) ? 'is-invalid' : ''; ?>" value="<?= old('keteranganberita'); ?>"></textarea>
            <div class="invalid-feedback">
              <?= $validation->getError('keteranganberita'); ?>
            </div>
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Tambah Berita</button>
          </div>
        </div>
      </form>

    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
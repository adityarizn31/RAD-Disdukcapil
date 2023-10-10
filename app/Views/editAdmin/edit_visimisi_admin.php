<!-- Halaman Ubah Berita Admin -->

<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4 border-2" style="margin-top: 25px; padding: 20px;">
    <div class="container">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Ubah Visi Misi admin</h6>
      </div>

      <form action="/admin/updateBerita/<?= $visimisi['id']; ?>" method="post">

        <!-- Keamanan -->
        <?= csrf_field(); ?>

        <div class="row">
          <div class="mb-3">
            <label for="visi" class="form-label fw-semibold">Visi</label>
            <input type="text" class="form-control <?= ($validation->hasError('visi')) ? 'is-invalid' : ''; ?>" name="visi" id="visi" autofocus value="<?= (old('visi')) ? old('judul') : $berita['visi'] ?>" ?>
            <div class="invalid-feedback">
              <?= $validation->getError('visi'); ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="misi" class="form-label fw-semibold">Misi</label>
            <input type="text" class="form-control <?= ($validation->hasError('misi')) ? 'is-invalid' : ''; ?>" name="misi" id="misi" value="<?= $berita['misi']; ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('misi'); ?>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="misi" class="form-label fw-semibold">Keterangan</label>
            <br>
            <textarea name="misi" id="misi" class="form-control text-area <?= ($validation->hasError('misi')) ? 'is-invalid' : ''; ?>" value="<?= $berita['misi']; ?>"></textarea>
            <div class="invalid-feedback">
              <?= $validation->getError('misi'); ?>
            </div>
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
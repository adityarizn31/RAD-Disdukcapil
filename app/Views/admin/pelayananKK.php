<!-- Halaman Ubah Foto, Judul dan Keterangan Admin -->

<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4 border-2" style="margin-top: 25px;">
    <div class="m-0 font-weight-bold text-primary"> Pelayanan Kartu Keluarga</div>
  </div>

  <div class="card shadow mb-4 border-2" style="margin-top: 25px; padding: 20px;">
    <div class="container">
      <div class="card-header py-3">
        <div class="m-0 font-weight-bold text-primary">Ubah Pelayanan Kartu Keluarga</div>
      </div>

      <!-- Diarahkan ke Method baru yang terdapat dalam Controller EditUpdateAdmin -->
      <form action="/EditUpdateAdmin/updateInovasi/<?= $inovasi['id']; ?>" method="post" enctype="multipart/form-data">

        <!-- Keamanan -->
        <?= csrf_field(); ?>

        <input type="hidden" name="fotolama" value="<?= $inovasi['fotoinovasi']; ?>">

        <!-- Form Judul Pelayanan -->
        <div class="row">
          <div class="mb-3">
            <label for="judulpelayanan" class="form-label fw-semibold">Judul Pelayanan KK</label>
            <input type="text" class="form-control <?= ($validation->hasError('judulpelayanan')) ? 'is-invalid' : ''; ?>" name="judulpelayanan" id="judulpelayanan" autofocus value="<?= $inovasi['judulpelayanan']; ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('judulpelayanan'); ?>
            </div>
          </div>
        </div>

        <!-- Form Foto Inovasi -->
        <div class="row">
          <div class="mb-3">
            <label for="fotoinovasi" class="form-label fw-semibold">Foto </label>
            <input type="file" class="form-control <?= ($validation->hasError('fotoinovasi')) ? 'is-invalid' : ''; ?>" name="fotoinovasi" id="fotoinovasi" value="<?= old('fotoinovasi'); ?>" onchange="previewImgInovasi()">
            <div class="invalid-feedback">
              <?= $validation->getError('fotoinovasi'); ?>
            </div>
            <div class="col-sm-2 my-4">
              <img src="/img/inovasi/<?= $inovasi['fotoinovasi']; ?>" class="img-thumbnail img-preview" srcset="">
            </div>
          </div>
        </div>

        <!-- Form Keterangan Inovasi -->
        <div class="row">
          <div class="mb-3">
            <label for="keteranganpelayanan" class="form-label fw-semibold">Keterangan Inovasi</label>
            <br>
            <textarea class=" form-control text-area <?= ($validation->hasError('keteranganpelayanan')) ? 'is-invalid' : '' ?>" name="keteranganpelayanan" id="keteranganpelayanan" value="<?= $inovasi['keteranganpelayanan']; ?>"></textarea>
            <div class="invalid-feedback">
              <?= $validation->getError('keteranganpelayanan'); ?>
            </div>
          </div>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-primary">Ubah Inovasi</button>
        </div>

      </form>

    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
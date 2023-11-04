<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Pendaftaran Perbaikan Data -->
<div class="container" style="padding: 10px;">
  <div class="card shadow mb-4" style="padding: 20px;">
    <div class="container">
      <h4 class="text-center mt-2 mb-2">Layanan Perbaikan Data</h4>
    </div>

    <?php if (session()->getFlashdata('pesan')) : ?>

      <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
      </div>

    <?php endif; ?>

    <form action="/pelayanan/savePerbaikanData" method="post" enctype="multipart/form-data">

      <!-- Keamanan -->
      <?= csrf_field(); ?>

      <!-- Form Nama Pemohon -->
      <div class="row">
        <div class="mb-3">
          <label for="namapemohon" class="form-label fw-semibold">Nama Pemohon</label>
          <input type="text" class="form-control <?= ($validation->hasError('namapemohon')) ? 'is-invalid' : ''; ?>" name="namapemohon" id="namapemohon" autofocus value="<?= old('namapemohon'); ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('namapemohon') ?>
          </div>
        </div>
      </div>

      <!-- Form Email Pemohon  -->
      <div class="row">
        <div class="mb-3">
          <label for="emailpemohon" class="form-label fw-semibold">Email Pemohon</label>
          <input type="text" class="form-control <?= ($validation->hasError('emailpemohon')) ? 'is-invalid' : ''; ?>" name="emailpemohon" id="emailpemohon" value="<?= old('emailpemohon'); ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('emailpemohon'); ?>
          </div>
        </div>
      </div>

      <!-- Form Nomor Pemohon -->
      <div class="row">
        <div class="mb-3">
          <label for="nomorpemohon" class="form-label fw-semibold">Nomor Whatsapp</label>
          <input type="text" class="form-control <?= ($validation->hasError('nomorpemohon')) ? 'is-invalid' : ''; ?>" name="nomorpemohon" id="nomorpemohon" value="<?= old('nomorpemohon'); ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('nomorpemohon'); ?>
          </div>
        </div>
      </div>

      <!-- Form Alamat Pemohon -->
      <div class="row">
        <div class="mb-3">
          <label for="alamatpemohon" class="form-label fw-semibold">Alamat Pemohon</label>
          <br>
          <textarea class=" form-control text-area <?= ($validation->hasError('alamatpemohon')) ? 'is-invalid' : ''; ?>" name="alamatpemohon" id="alamatpemohon" value="<?= old('alamatpemohon'); ?>"></textarea>
          <div class="invalid-feedback">
            <?= $validation->getError('alamatpemohon'); ?>
          </div>
        </div>
      </div>

      <hr>

      <!-- Form Berkas Perbaikan 1 -->
      <div class="row">
        <div class="mb-3">
          <label for="berkasperbaikan1" class="form-label fw-semibold">Berkas Perbaikan 1</label>
          <input type="file" class="form-control <?= ($validation->hasError('berkasperbaikan1')) ? 'is-invalid' : ''; ?>" name="berkasperbaikan1" id="berkasperbaikan1" value="<?= old('berkasperbaikan1'); ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('berkasperbaikan1'); ?>
          </div>
        </div>
      </div>

      <!-- Form Berkas Perbaikan 2 -->
      <div class="row">
        <div class="mb-3">
          <label for="berkasperbaikan2" class="form-label fw-semibold">Berkas Perbaikan 2</label>
          <input type="file" class="form-control <?= ($validation->hasError('berkasperbaikan2')) ? 'is-invalid' : ''; ?>" name="berkasperbaikan2" id="berkasperbaikan2" value="<?= old('berkasperbaikan2'); ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('berkasperbaikan2'); ?>
          </div>
        </div>
      </div>

      <!-- Form Berkas Perbaikan 3 -->
      <div class="row">
        <div class="mb-3">
          <label for="berkasperbaikan3" class="form-label fw-semibold">Berkas Perbaikan 3</label>
          <input type="file" class="form-control <?= ($validation->hasError('berkasperbaikan3')) ? 'is-invalid' : ''; ?>" name="berkasperbaikan3" id="berkasperbaikan3" value="<?= old('berkasperbaikan3'); ?>">
          <div class="invalid-feedback">
            <?= $validation->getError('berkasperbaikan3'); ?>
          </div>
        </div>
      </div>

      <!-- Form Penjelasan Perbaikan -->
      <div class="row">
        <div class="mb-3">
          <label for="penjelasanperbaikan" class="form-label fw-semibold">Penjelasan Perbaikan</label>
          <br>
          <textarea class=" form-control text-area <?= ($validation->hasError('penjelasanperbaikan')) ? 'is-invalid' : ''; ?>" name="penjelasanperbaikan" id="penjelasanperbaikan" value="<?= old('penjelasanperbaikan'); ?>"></textarea>
          <div class="invalid-feedback">
            <?= $validation->getError('penjelasanperbaikan'); ?>
          </div>
        </div>
      </div>

      <hr>

      <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" value="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
      </div>

    </form>

  </div>
</div>

<?= $this->endSection('content'); ?>
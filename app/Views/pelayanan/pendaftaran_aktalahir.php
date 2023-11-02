<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container" style="padding: 10px;">
  <div class="card shadow mb-4" style="padding: 20px;">
    <div class="container">
      <h4 class="text-center mt-2 mb-2">Pendaftaran Akta Kelahiran</h4>

      <?php if (session()->getFlashdata('pesan')) : ?>

        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>

      <?php endif; ?>

      <form action="/pelayanan/saveAktakelahiran" method="post" enctype="multipart/form-data">

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

        <!-- Form F201 -->
        <div class="row">
          <div class="mb-3">
            <label for="formulirf201" class="form-label fw-semibold">Formulir Desa</label>
            <input type="file" class="form-control <?= ($validation->hasError('formulirf201')) ? 'is-invalid' : ''; ?>" name="formulirf201" id="formulirf201" value="<?= old('formulirf201'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('formulirf201'); ?>
            </div>
          </div>
        </div>

        <!-- Form Surat Kelahiran -->
        <div class="row">
          <div class="mb-3">
            <label for="suratketeranganlahir" class="form-label fw-semibold">Formulir Desa</label>
            <input type="file" class="form-control <?= ($validation->hasError('suratketeranganlahir')) ? 'is-invalid' : ''; ?>" name="suratketeranganlahir" id="suratketeranganlahir" value="<?= old('suratketeranganlahir'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('suratketeranganlahir'); ?>
            </div>
          </div>
        </div>

        <!-- Form KK -->
        <div class="row">
          <div class="mb-3">
            <label for="kartukeluarga" class="form-label fw-semibold">Formulir Desa</label>
            <input type="file" class="form-control <?= ($validation->hasError('kartukeluarga')) ? 'is-invalid' : ''; ?>" name="kartukeluarga" id="kartukeluarga" value="<?= old('kartukeluarga'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('kartukeluarga'); ?>
            </div>
          </div>
        </div>

        <!-- Form KTP Ayah -->
        <div class="row">
          <div class="mb-3">
            <label for="ktpayah" class="form-label fw-semibold">Formulir Desa</label>
            <input type="file" class="form-control <?= ($validation->hasError('ktpayah')) ? 'is-invalid' : ''; ?>" name="ktpayah" id="ktpayah" value="<?= old('ktpayah'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('ktpayah'); ?>
            </div>
          </div>
        </div>

        <!-- Form KTP Ibu -->
        <div class="row">
          <div class="mb-3">
            <label for="ktpibu" class="form-label fw-semibold">Formulir Desa</label>
            <input type="file" class="form-control <?= ($validation->hasError('ktpibu')) ? 'is-invalid' : ''; ?>" name="ktpibu" id="ktpibu" value="<?= old('ktpibu'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('ktpibu'); ?>
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

</div>

<?= $this->endSection('content') ?>
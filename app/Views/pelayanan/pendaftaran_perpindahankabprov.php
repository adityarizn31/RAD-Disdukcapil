<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container" style="padding: 10px;">
  <div class="card shadow mb-4" style="padding: 20px;">
    <div class="container">

      <h4 class="text-center mt-2 mb-2"> Pendaftaran Perpindahan Pendatang Kabupaten & Provinsi </h4>

      <?php if (session()->getFlashdata('pesan')) : ?>

        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>

      <?php endif; ?>

      <form action="/pelayanan/savePerpindahanKabProv" method="post" enctype="multipart/form-data">

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

        <h5 class="text-center mt-2 mb-2">Perpindahan Pendatang Ke Luar Kabupaten & Provinsi </h5>

        <!-- Form Kartu Keluarga -->
        <div class="row">
          <div class="mb-3">
            <label for="kartukeluarga" class="form-label fw-semibold">Kartu Keluarga</label>
            <input type="file" class="form-control <?= ($validation->hasError('kartukeluarga')) ? 'is-invalid' : ''; ?>" name="kartukeluarga" id="kartukeluarga" value="<?= old('kartukeluarga'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('kartukeluarga'); ?>
            </div>
          </div>
        </div>

        <!-- Form Kartu Tanda Penduduk -->
        <div class="row">
          <div class="mb-3">
            <label for="kartutandapenduduk" class="form-label fw-semibold">Kartu Tanda Penduduk</label>
            <input type="file" class="form-control <?= ($validation->hasError('kartutandapenduduk')) ? 'is-invalid' : ''; ?>" name="kartutandapenduduk" id="kartutandapenduduk" value="<?= old('kartutandapenduduk'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('kartutandapenduduk'); ?>
            </div>
          </div>
        </div>

        <hr>

        <h5 class="text-center mt-2 mb-2">Perpindahan Pendatang Dari Kabupaten & Provinsi </h5>

        <!-- Form SKPWNI -->
        <div class="row">
          <div class="mb-3">
            <label for="skpwni" class="form-label fw-semibold">SKPWNI</label>
            <input type="file" class="form-control <?= ($validation->hasError('skpwni')) ? 'is-invalid' : ''; ?>" name="skpwni" id="skpwni" value="<?= old('skpwni'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('skpwni'); ?>
            </div>
          </div>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" value="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
        </div>

      </form>

    </div>
  </div>
</div>

<?= $this->endSection('content') ?>
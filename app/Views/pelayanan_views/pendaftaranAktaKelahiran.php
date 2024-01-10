<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Form Pendaftaran Akta Kelahiran -->
<div class="container" style="padding: 10px;">
  <div class="card shadow mb-4" style="padding: 20px;">
    <div class="container">
      <h4 class="text-center fw-bold"> Pendaftaran Akta Kelahiran </h4>

      <?php if (session()->getFlashdata('pesan')) : ?>

        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>

      <?php endif; ?>

      <form action="/PelayananSilancar/saveAktakelahiran" method="post" enctype="multipart/form-data">

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

        <!-- Berkas Formulir F201 Akta Kelahiran -->
        <div class="row">
          <div class="mb-3">
            <label for="formulirf201akta" class="form-label fw-semibold">Formulir F201 Akta</label>
            <input type="file" class="form-control <?= ($validation->hasError('formulirf201akta')) ? 'is-invalid' : ''; ?>" name="formulirf201akta" id="formulirf201akta" value="<?= old('formulirf201akta'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('formulirf201akta'); ?>
            </div>
          </div>
        </div>

        <!-- Berkas Surat Keterangan Lahir -->
        <div class="row">
          <div class="mb-3">
            <label for="suratketeranganlahir" class="form-label fw-semibold">Surat Keterangan Lahir</label>
            <input type="file" class="form-control <?= ($validation->hasError('suratketeranganlahir')) ? 'is-invalid' : ''; ?>" name="suratketeranganlahir" id="suratketeranganlahir" value="<?= old('suratketeranganlahir'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('suratketeranganlahir'); ?>
            </div>
          </div>
        </div>

        <!-- Berkas Kartu Keluarga -->
        <div class="row">
          <div class="mb-3">
            <label for="kartukeluarga" class="form-label fw-semibold">Kartu Keluarga</label>
            <input type="file" class="form-control <?= ($validation->hasError('kartukeluarga')) ? 'is-invalid' : ''; ?>" name="kartukeluarga" id="kartukeluarga" value="<?= old('kartukeluarga'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('kartukeluarga'); ?>
            </div>
          </div>
        </div>

        <!-- Berkas Buku Nikah -->
        <div class="row">
          <div class="mb-3">
            <label for="bukunikah" class="form-label fw-semibold">Buku Nikah</label>
            <input type="file" class="form-control <?= ($validation->hasError('bukunikah')) ? 'is-invalid' : ''; ?>" name="bukunikah" id="bukunikah" value="<?= old('bukunikah'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('bukunikah'); ?>
            </div>
          </div>
        </div>

        <!-- Berkas KTP Ayah -->
        <div class="row">
          <div class="mb-3">
            <label for="ktpayah" class="form-label fw-semibold">KTP Ayah</label>
            <input type="file" class="form-control <?= ($validation->hasError('ktpayah')) ? 'is-invalid' : ''; ?>" name="ktpayah" id="ktpayah" value="<?= old('ktpayah'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('ktpayah'); ?>
            </div>
          </div>
        </div>

        <!-- Berkas KTP Ibu -->
        <div class="row">
          <div class="mb-3">
            <label for="ktpibu" class="form-label fw-semibold">KTP Ibu</label>
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

<?= $this->endSection('content'); ?>
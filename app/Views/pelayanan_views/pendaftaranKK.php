<?php
// Mendapatkan waktu saat ini
$JamSekarang = date('H');

// Menentukan rentang waktu yang diizinkan (dalam contoh ini, dari jam 8 pagi hingga jam 11 siang)
$WaktuPembukaan = 8;
$WaktuPenutupan = 11;

// Menentukan apakah waktu saat ini berada dalam rentang waktu yang diizinkan
$isWithinAllowedTime = ($JamSekarang >= $WaktuPembukaan && $JamSekarang < $WaktuPenutupan);
?>

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container" style="padding: 10px;">
  <?php if ($isWithinAllowedTime) : ?>
    <div class="card shadow mb-4" style="padding: 20px;">
      <div class="container">
        <h4 class="text-center fw-bold"> Pendaftaran Kartu Keluarga Baru </h4>

        <?php if (session()->getFlashdata('pesan')) : ?>
          <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
          </div>
        <?php endif; ?>

        <form action="/PelayananSilancar/saveKK" method="post" enctype="multipart/form-data">

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
              <textarea class="form-control text-area <?= ($validation->hasError('alamatpemohon')) ? 'is-invalid' : ''; ?>" name="alamatpemohon" id="alamatpemohon" value="<?= old('alamatpemohon'); ?>"></textarea>
              <div class="invalid-feedback">
                <?= $validation->getError('alamatpemohon'); ?>
              </div>
            </div>
          </div>

          <hr>

          <!-- Form Desa -->
          <div class="row">
            <div class="mb-3">
              <label for="formulirdesa" class="form-label fw-semibold">Formulir Desa</label>
              <input type="file" class="form-control <?= ($validation->hasError('formulirdesa')) ? 'is-invalid' : ''; ?>" name="formulirdesa" id="formulirdesa" value="<?= old('formulirdesa'); ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('formulirdesa'); ?>
              </div>
            </div>
          </div>

          <!-- Form KK Suami -->
          <div class="row">
            <div class="mb-3">
              <label for="kartukeluargasuami" class="form-label fw-semibold">Kartu Keluarga Suami(masing-masing)</label>
              <input type="file" class="form-control <?= ($validation->hasError('kartukeluargasuami')) ? 'is-invalid' : ''; ?>" name="kartukeluargasuami" id="kartukeluargasuami" value="<?= old('kartukeluargasuami'); ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('kartukeluargasuami'); ?>
              </div>
            </div>
          </div>

          <!-- Form KK Istri -->
          <div class="row">
            <div class="mb-3">
              <label for="kartukeluargaistri" class="form-label fw-semibold">Kartu Keluarga Istri(masing-masing)</label>
              <input type="file" class="form-control <?= ($validation->hasError('kartukeluargaistri')) ? 'is-invalid' : ''; ?>" name="kartukeluargaistri" id="kartukeluargaistri" value="<?= old('kartukeluargaistri'); ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('kartukeluargaistri'); ?>
              </div>
            </div>
          </div>

          <!-- Form Surat Nikah -->
          <div class="row">
            <div class="mb-3">
              <label for="suratnikah" class="form-label fw-semibold">Surat Nikah</label>
              <input type="file" class="form-control <?= ($validation->hasError('suratnikah')) ? 'is-invalid' : ''; ?>" name="suratnikah" id="suratnikah" value="<?= old('suratnikah'); ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('suratnikah'); ?>
              </div>
            </div>
          </div>

          <!-- Form Surat Pindah -->
          <div class="row">
            <div class="mb-3">
              <label for="suratpindah" class="form-label fw-semibold">Surat Pindah (Jika alamat berbeda)</label>
              <input type="file" class="form-control <?= ($validation->hasError('suratpindah')) ? 'is-invalid' : ''; ?>" name="suratpindah" id="suratpindah" value="<?= old('suratpindah'); ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('suratpindah'); ?>
              </div>
            </div>
          </div>

          <hr>

          <div class="d-grid gap-2 col-6 mx-auto">
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
  <?php else : ?>
    <div class="alert alert-warning" role="alert">
      Formulir hanya dapat diakses antara jam 8 pagi hingga 11 siang.
    </div>
  <?php endif; ?>
</div>

<?= $this->endSection('content'); ?>
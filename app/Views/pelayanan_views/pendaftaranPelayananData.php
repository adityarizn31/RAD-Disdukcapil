<?php

// Get the current time in the server's time zone
$waktuSekarang = new DateTime('now', new DateTimeZone('Asia/Jakarta'));
$jamSekarang = $waktuSekarang->format('G');

// Check if the access time is within the allowed range (8 AM to 11 AM)
if ($jamSekarang >= 8 && $jamSekarang < 14) {
  // Allow access to the form
?>

  <?= $this->extend('layout/template'); ?>

  <?= $this->section('content'); ?>

  <!-- Pendaftaran Perbaikan Data -->
  <div class="container" style="padding: 10px;">
    <div class="card shadow mb-4" style="padding: 20px;">
      <div class="container">
        <h4 class="text-center mt-2 mb-2 fw-bold">Pendaftaran Pelayanan Pemanfaatan Data dan Inovasi</h4>
      </div>

      <?php if (session()->getFlashdata('pesan')) : ?>

        <div class="alert alert-success" role="alert">
          <?= session()->getFlashdata('pesan'); ?>
        </div>

      <?php endif; ?>

      <form action="/PelayananSilancar/savePelayananData" method="post" enctype="multipart/form-data">

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

        <!-- Form Berkas Pelayanan 1 -->
        <div class="row">
          <div class="mb-3">
            <label for="berkasperbaikan1" class="form-label fw-semibold">Berkas Pelayanan 1</label>
            <input type="file" class="form-control <?= ($validation->hasError('berkasperbaikan1')) ? 'is-invalid' : ''; ?>" name="berkasperbaikan1" id="berkasperbaikan1" value="<?= old('berkasperbaikan1'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('berkasperbaikan1'); ?>
            </div>
          </div>
        </div>

        <!-- Form Berkas Pelayanan 2 -->
        <div class="row">
          <div class="mb-3">
            <label for="berkasperbaikan2" class="form-label fw-semibold">Berkas Pelayanan 2</label>
            <input type="file" class="form-control <?= ($validation->hasError('berkasperbaikan2')) ? 'is-invalid' : ''; ?>" name="berkasperbaikan2" id="berkasperbaikan2" value="<?= old('berkasperbaikan2'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('berkasperbaikan2'); ?>
            </div>
          </div>
        </div>

        <!-- Form Berkas Pelayanan 3 -->
        <div class="row">
          <div class="mb-3">
            <label for="berkasperbaikan3" class="form-label fw-semibold">Berkas Pelayanan 3</label>
            <input type="file" class="form-control <?= ($validation->hasError('berkasperbaikan3')) ? 'is-invalid' : ''; ?>" name="berkasperbaikan3" id="berkasperbaikan3" value="<?= old('berkasperbaikan3'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('berkasperbaikan3'); ?>
            </div>
          </div>
        </div>

        <!-- Form Berkas Pelayanan 4 -->
        <div class="row">
          <div class="mb-3">
            <label for="berkasperbaikan4" class="form-label fw-semibold">Berkas Pelayanan 4</label>
            <input type="file" class="form-control <?= ($validation->hasError('berkasperbaikan4')) ? 'is-invalid' : ''; ?>" name="berkasperbaikan4" id="berkasperbaikan4" value="<?= old('berkasperbaikan4'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('berkasperbaikan4'); ?>
            </div>
          </div>
        </div>

        <!-- Form Berkas Pelayanan 5 -->
        <div class="row">
          <div class="mb-3">
            <label for="berkasperbaikan5" class="form-label fw-semibold">Berkas Pelayanan 5</label>
            <input type="file" class="form-control <?= ($validation->hasError('berkasperbaikan5')) ? 'is-invalid' : ''; ?>" name="berkasperbaikan5" id="berkasperbaikan5" value="<?= old('berkasperbaikan5'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('berkasperbaikan5'); ?>
            </div>
          </div>
        </div>

        <!-- Form Berkas Pelayanan 6 -->
        <div class="row">
          <div class="mb-3">
            <label for="berkasperbaikan6" class="form-label fw-semibold">Berkas Pelayanan 6</label>
            <input type="file" class="form-control <?= ($validation->hasError('berkasperbaikan6')) ? 'is-invalid' : ''; ?>" name="berkasperbaikan6" id="berkasperbaikan6" value="<?= old('berkasperbaikan6'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('berkasperbaikan6'); ?>
            </div>
          </div>
        </div>

        <!-- Form Berkas Pelayanan 7 -->
        <div class="row">
          <div class="mb-3">
            <label for="berkasperbaikan7" class="form-label fw-semibold">Berkas Pelayanan 7</label>
            <input type="file" class="form-control <?= ($validation->hasError('berkasperbaikan7')) ? 'is-invalid' : ''; ?>" name="berkasperbaikan7" id="berkasperbaikan7" value="<?= old('berkasperbaikan7'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('berkasperbaikan7'); ?>
            </div>
          </div>
        </div>

        <!-- Form Berkas Pelayanan 8 -->
        <div class="row">
          <div class="mb-3">
            <label for="berkasperbaikan8" class="form-label fw-semibold">Berkas Pelayanan 8</label>
            <input type="file" class="form-control <?= ($validation->hasError('berkasperbaikan8')) ? 'is-invalid' : ''; ?>" name="berkasperbaikan8" id="berkasperbaikan8" value="<?= old('berkasperbaikan8'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('berkasperbaikan8'); ?>
            </div>
          </div>
        </div>

        <!-- Form Berkas Pelayanan 9 -->
        <div class="row">
          <div class="mb-3">
            <label for="berkasperbaikan9" class="form-label fw-semibold">Berkas Pelayanan 9</label>
            <input type="file" class="form-control <?= ($validation->hasError('berkasperbaikan9')) ? 'is-invalid' : ''; ?>" name="berkasperbaikan9" id="berkasperbaikan9" value="<?= old('berkasperbaikan9'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('berkasperbaikan9'); ?>
            </div>
          </div>
        </div>

        <!-- Form Berkas Pelayanan 10 -->
        <div class="row">
          <div class="mb-3">
            <label for="berkasperbaikan10" class="form-label fw-semibold">Berkas Pelayanan 10</label>
            <input type="file" class="form-control <?= ($validation->hasError('berkasperbaikan10')) ? 'is-invalid' : ''; ?>" name="berkasperbaikan10" id="berkasperbaikan10" value="<?= old('berkasperbaikan10'); ?>">
            <div class="invalid-feedback">
              <?= $validation->getError('berkasperbaikan10'); ?>
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

<?php
} else {
  // Redirect to a message page or display a message
  header('Location: /PelayananSilancar/errorPage');
  exit;
}

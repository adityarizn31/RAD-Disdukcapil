<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container" style="padding: 10px;">
  <div class="card shadow mb-4" style="padding: 20px;">
    <div class="container">
      <h4 class="text-center mt-2 mb-2"> Pendaftaran KTP Baru </h4>

      <form action="post" method="post">

        <div class="row">
          <div class="mb-3">
            <label for="namapemohon" class="form-label fw-semibold">Nama Pemohon</label>
            <input type="text" class="form-control" name="namapemohon" id="namapemohon">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="emailpemohon" class="form-label fw-semibold">Email Pemohon</label>
            <input type="text" class="form-control" name="emailpemohon" id="emailpemohon">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="nomorpemohon" class="form-label fw-semibold">Nomor Whatsapp</label>
            <input type="text" class="form-control" name="nomorpemohon" id="nomorpemohon">
          </div>
        </div>

        <hr>

        <div class="row">
          <div class="mb-3">
            <label for="FormControlInput1" class="form-label fw-semibold">Download Formulir F1.02 KTP</label>
            <br>
            <a href="lokasi/file_anda.pdf" download>Unduh File PDF</a>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="FormF102" class="form-label fw-semibold">Formulir F1.02 KTP</label>
            <input type="file" class="form-control" name="FormF102" id="FormF102">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="FormKK" class="form-label fw-semibold">Kartu Keluarga</label>
            <input type="file" class="form-control" name="FormKK" id="FormKK">
          </div>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

      </form>

    </div>
  </div>
</div>

<?= $this->endSection('content') ?>
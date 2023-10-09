<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container" style="padding: 10px;">
  <div class="card shadow mb-4" style="padding: 20px;">
    <div class="container">
      <h4 class="text-center mt-2 mb-2">Layanan Perbaikan Data</h4>
    </div>

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
          <label for="nomorpemohon" class="form-label fw-semibold">Whatsapp Pemohon</label>
          <input type="text" class="form-control" name="nomorpemohon" id="nomorpemohon">
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="mb-3">
          <label for="Formnamapelapor" class="form-label fw-semibold">Nama Pelapor</label>
          <input type="text" class="form-control" name="Formnamapelapor" id="Formnamapelapor">
        </div>
      </div>

      <div class="row">
        <div class="mb-3">
          <label for="Formberkasperbaikan" class="form-label fw-semibold">Berkas Perbaikan</label>
          <input type="file" class="form-control" name="Formberkasperbaikan" id="Formberkasperbaikan">
        </div>
      </div>

      <div class="row">
        <div class="mb-3">
          <label for="Formpenjelasanperbaikan" class="form-label fw-semibold">Penjelasan Perbaikan</label>
          <br>
          <textarea name="Formpenjelasanperbaikan" id="Formpenjelasanperbaikan" class=" form-control text-area"></textarea>
        </div>
      </div>

      <div class="d-grid gap-2 col-6 mx-auto">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>

    </form>

  </div>
</div>

<?= $this->endSection('content'); ?>
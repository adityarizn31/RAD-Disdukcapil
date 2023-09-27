<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container" style="padding: 10px;">
  <div class="card shadow mb-4" style="padding: 20px;">
    <div class="container">
      <h4 class="text-center mt-2 mb-2"> Layanan Perbaikan NIK</h4>

      <form action="post" method="post">

        <div class="row">
          <div class="mb-3">
            <label for="Nama Pemohon" class="form-label fw-semibold">Nama Pemohon</label>
            <input type="text" class="form-control" name="Nama" id="Nama" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="Email Pemohon" class="form-label fw-semibold">Email Pemohon</label>
            <input type="text" class="form-control" name="Email Pemohon" id="Email Pemohon" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="Whatsapp Pemohon" class="form-label fw-semibold">Whatsapp Pemohon</label>
            <input type="text" class="form-control" name="Whatsapp Pemohon" id="Whatsapp Pemohon" required>
          </div>
        </div>

        <hr>

        <div class="row">
          <div class="mb-3">
            <label for="Kartu Tanda Penduduk" class="form-label fw-semibold">Kartu Tanda Penduduk</label>
            <input type="file" class="form-control" name="Kartu Tanda Penduduk" id="Kartu Tanda Penduduk" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="Kartu Keluarga" class="form-label fw-semibold">Kartu Keluarga</label>
            <input type="file" class="form-control" name="Kartu Keluarga" id="Kartu Keluarga" required>
          </div>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
          <input type="submit" value="Submit" id="Submit" class="btn-primary rounded-md">
        </div>


      </form>

    </div>
  </div>
</div>

<?= $this->endSection('content'); ?>
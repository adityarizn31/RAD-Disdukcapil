<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container" style="padding: 10px;">
  <div class="card shadow mb-4" style="padding: 20px;">
    <div class="container">
      <h4 class="text-center mt-2 mb-2"> Layanan Pengaduan</h4>

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
            <label for="nomorpemohon" class="form-label fw-semibold">WhatsApp Pemohon</label>
            <input type="text" class="form-control" name="nomorpemohon" id="nomorpemohon">
          </div>
        </div>

        <hr>

        <div class="row">
          <div class="mb-3">
            <label for="Formpelapor" class="form-label fw-semibold">Nama Pelapor</label>
            <input type="text" class="form-control" name="Formpelapor" id="Formpelapor">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="FormKTPpelapor" class="form-label fw-semibold">Kartu Tanda Penduduk Pelapor</label>
            <input class="form-control" type="file" name="FormKTPpelapor" id="FormKTPpelapor">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="FormKKpelapor" class="form-label fw-semibold">Kartu Keluarga Pelapor</label>
            <input class="form-control" type="file" name="FormKKpelapor" id="FormKKpelapor">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="Formpengaduan" class="form-label fw-semibold">Pengaduan</label>
            <br>
            <textarea name="Formpengaduan" id="Formpengaduan" class=" form-control text-area"></textarea>
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
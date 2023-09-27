<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container" style="padding: 10px;">
  <div class="card shadow mb-4" style="padding: 20px;">
    <div class="container">
      <h4 class="text-center mt-2 mb-2"> Layanan Pengaduan</h4>

      <form action="post" method="post">

        <div class="row">
          <div class="mb-3">
            <label for="Nama Pemohon" class="form-label fw-semibold">Nama Pemohon</label>
            <input type="text" class="form-control" name="nama" id="nama" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="Email Pemohon" class="form-label fw-semibold">Email Pemohon</label>
            <input type="text" class="form-control" name="email" id="email" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="Whatsapp pemohon" class="form-label fw-semibold">WhatsApp Pemohon</label>
            <input type="text" class="form-control" name="whatsapp" id="whatsapp" required>
          </div>
        </div>

        <hr>

        <div class="row">
          <div class="mb-3">
            <label for="Nama Pelapor" class="form-label fw-semibold">Nama Pelapor</label>
            <input type="text" class="form-control" name="pelapor" id="pelapor" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="" class="form-label fw-semibold">Kartu Tanda Penduduk Pelapor</label>
            <input class="form-control" type="file" id="formFile" name="ktp" id="ktp" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="" class="form-label fw-semibold">Kartu Keluarga Pelapor</label>
            <input class="form-control" type="file" id="formFile" name="kartukeluarga" id="kartukeluarga" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="" class="form-label fw-semibold">Pengaduan</label>
            <input type="textarea" class="form-control" name="pengaduan" id="pengaduan" required>
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
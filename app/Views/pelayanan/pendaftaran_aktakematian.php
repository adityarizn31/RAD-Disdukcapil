<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container" style="padding: 10px;">
  <div class="card shadow mb-4" style="padding: 20px;">
    <div class="container">
      <h4 class="text-center mt-2 mb-2">Pendaftaran Akta Kematian</h4>

      <form action="post" method="post" enctype="multipart/form-data">

        <?= csrf_field(); ?>

        <div class="row">
          <div class="mb-3">
            <label for="namapemohon" class="form-label fw-semibold">Nama Pemohon</label>
            <input type="text" class="form-control" name="namapemohon" id="namapemohon">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="emailpemohon" class="form-label fw-semibold">Email Pemohon</label>
            <input type="email" class="form-control" name="emailpemohon" id="emailpemohon">
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
            <label for="FormKKPelapor" class="form-label fw-semibold"> Kartu Keluarga Pelapor</label>
            <input type="file" class="form-control" name="FormKKPelapor" id="FormKKPelapor">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="FormKTPMeninggal" class="form-label fw-semibold">KTP Orang Meninggal</label>
            <input type="file" class="form-control" name="FormKTPMeninggal" id="FormKTPMeninggal">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="FormSuratKematian" class="form-label fw-semibold">Surat Kematian dari RS</label>
            <input type="file" class="form-control" name="FormSuratKematian" id="FormSuratKematian">
          </div>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

      </form>

    </div>
  </div>
</div>

<?= $this->endSection('content'); ?>
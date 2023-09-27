<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container" style="padding: 10px;">
  <div class="card shadow mb-4" style="padding: 20px;">
    <div class="container">
      <h4 class="text-center mt-2 mb-2">Pendaftaran Akta Kematian</h4>

      <form action="post" method="post">

        <div class="row">
          <div class="mb-3">
            <label for="FormControlInputPemohon" class="form-label fw-semibold">Nama Pemohon</label>
            <input type="text" class="form-control" name="pemohon" id="nama" required="">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="FormControlInputEmail" class="form-label fw-semibold">Email Pemohon</label>
            <input type="email" class="form-control" name="email" id="email" required="">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="FormControlInputNomor" class="form-label fw-semibold">Nomor Whatsapp</label>
            <input type="text" class="form-control" name="nomor" id="nomor" required>
          </div>
        </div>

        <hr>

        <div class="row">
          <div class="mb-3">
            <label for="FormKKPelapor" class="form-label fw-semibold">Fc Kartu Keluarga Pelapor</label>
            <input type="file" class="form-control" id="FcKKPelapor">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="FormKTPMeninggal" class="form-label fw-semibold">KTP Orang Meninggal</label>
            <input type="file" class="form-control" id="KTPMeninggal">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="FormSuratKematian" class="form-label fw-semibold">Surat Kematian dari RS</label>
            <input type="file" class="form-control" id="SuratKematian">
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
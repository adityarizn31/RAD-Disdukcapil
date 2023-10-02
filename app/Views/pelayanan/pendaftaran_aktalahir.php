<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container" style="padding: 10px;">
  <div class="card shadow mb-4" style="padding: 20px;">
    <div class="container">
      <h4 class="text-center mt-2 mb-2">Pendaftaran Akta Kelahiran</h4>

      <form action="post" method="post">

        <div class="row">
          <div class="mb-3">
            <label for="namapemohon" class="form-label fw-semibold">Nama Pemohon</label>
            <input type="text" class="form-control" name="namapemohon" id="namapemohon">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="emailpemohon" class="form-label fw-semibold">Email</label>
            <input type="email" class="form-control" name="emailpemohon" id="emailpemohon">
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
            <label for="Formaktalahir" class="form-label fw-semibold">Formulir F2.01</label>
            <input type="file" class="form-control" name="Formaktalahir" id="Formaktalahir">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="Formsuratketerangan" class="form-label fw-semibold">Surat Keterangan Lahir</label>
            <input type="file" class="form-control" name="Formsuratketerangan" id="Formsuratketerangan">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="FormKK" class="form-label fw-semibold">Kartu Keluarga</label>
            <input type="file" class="form-control" name="FormKK" id="FormKK">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="FormKTPAyah" class="form-label fw-semibold">Kartu Tanda Penduduk Ayah</label>
            <input class="form-control" type="file" name="FormKTPAyah" id="FormKTPAyah">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="FormKTPIbu" class="form-label fw-semibold">Kartu Tanda Penduduk Ibu</label>
            <input class="form-control" type="file" name="FormKTPIbu" id="FormKTPIbu">
          </div>
        </div>

        <div class="d-grid gap-2 col-6 mx-auto">
          <input type="submit" value="Submit" id="Submit" class="btn-primary rounded-md">
        </div>

      </form>
    </div>
  </div>

</div>

<?= $this->endSection('content') ?>
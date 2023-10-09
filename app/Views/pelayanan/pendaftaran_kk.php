<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Form Pendaftaran KK -->
<div class="container" style="padding: 10px;">
  <div class="card shadow mb-4" style="padding: 20px;">
    <div class="container">
      <h4 class="text-center"> Pendaftaran Kartu Keluarga Baru </h4>

      <form action="admin/create_kk_admin" method="post" enctype="multipart/form-data">

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
            <label for="Formdesa" class="form-label fw-semibold">Formulir Desa</label>
            <input class="form-control" type="file" name="Formdesa" id="Formdesa">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="FormKKsuami" class="form-label fw-semibold">Kartu Keluarga Suami(masing-masing)</label>
            <input class="form-control" type="file" name="FormKKsuami" id="FormKKsuami">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="FormKKistri" class="form-label fw-semibold">Kartu Keluarga Istri(masing-masing)</label>
            <input class="form-control" type="file" name="FormKKistri" id="FormKKistri">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="Formsuratnikah" class="form-label fw-semibold">Surat Nikah</label>
            <input class="form-control" type="file" name="Formsuratnikah" id="Formsuratnikah">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="Formsuratpindah" class="form-label fw-semibold">Surat Pindah (Jika alamat berbeda)</label>
            <input class="form-control" type="file" name="Formsuratpindah" id="Formsuratpindah">
          </div>
        </div>

        <hr>

        <div class="d-grid gap-2 col-6 mx-auto">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>

      </form>

    </div>
  </div>
</div>

<?= $this->endSection('content'); ?>
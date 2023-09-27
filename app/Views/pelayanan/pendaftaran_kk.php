<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Form Pendaftaran KK -->
<div class="container" style="padding: 10px;">
  <div class="card shadow mb-4" style="padding: 20px;">
    <div class="container">
      <h4 class="text-center"> Pendaftaran Kartu Keluarga Baru </h4>

      <form action="post" method="post">

        <div class="row">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold">Nama Pemohon</label>
            <input type="text" class="form-control" id="nama" required="Harap di isi bidang ini!!">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold">Email Pemohon</label>
            <input type="text" class="form-control" id="email" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label fw-semibold">Nomor Whatsapp</label>
            <input type="text" class="form-control" id="nomor" required>
          </div>
        </div>

        <hr>

        <div class="row">
          <div class="mb-3">
            <label for="formFile" class="form-label fw-semibold">Formulir Desa</label>
            <input class="form-control" type="file" id="formFile" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="formFile" class="form-label fw-semibold">Kartu Keluarga Suami(masing-masing)</label>
            <input class="form-control" type="file" id="formFile" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="formFile" class="form-label fw-semibold">Kartu Keluarga Istri(masing-masing)</label>
            <input class="form-control" type="file" id="formFile" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="formFile" class="form-label fw-semibold">Surat Nikah</label>
            <input class="form-control" type="file" id="formFile" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="formFile" class="form-label fw-semibold">Surat Pindah (Jika alamat berbeda)</label>
            <input class="form-control" type="file" id="formFile">
          </div>
        </div>

        <hr>

        <div class="d-grid gap-2 col-6 mx-auto">
          <input type="submit" value="Submit" id="Submit" class="btn-primary rounded-md">
        </div>

      </form>

    </div>
  </div>
</div>

<?= $this->endSection('content'); ?>
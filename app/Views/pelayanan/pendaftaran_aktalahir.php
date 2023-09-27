<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container" style="padding: 10px;">
  <div class="card shadow mb-4" style="padding: 20px;">
    <div class="container">
      <h4 class="text-center mt-2 mb-2">Pendaftaran Akta Kelahiran</h4>

      <form action="post" method="post">

        <div class="row">
          <div class="mb-3">
            <label for="Nama Pemohon" class="form-label fw-semibold">Nama Pemohon</label>
            <input type="text" class="form-control" name="nama" id="nama" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="Email Pemohon" class="form-label fw-semibold">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="Whatsapp pemohon" class="form-label fw-semibold">WhatsApp Pemohon</label>
            <input type="text" class="form-control" name="whatsapp pemohon" id="whatsapp pemohon">
          </div>
        </div>

        <hr>

        <div class="row">
          <div class="mb-3">
            <label for="Formulir AktaLahir" class="form-label fw-semibold">Formulir F2 01</label>
            <input type="file" class="form-control" name="Fomulir AktaLahir" id="Fomulir AktaLahir">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="Surat Keterangan" class="form-label fw-semibold">Surat Keterangan Lahir</label>
            <input type="file" class="form-control" name="Surat Keterangan" id="Surat Keterangan">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="Kartu Keluarga" class="form-label fw-semibold">Kartu Keluarga</label>
            <input type="file" class="form-control" name="Kartu Keluarga" id="Kartu Keluarga">
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="KTP Ayah" class="form-label fw-semibold">Kartu Tanda Penduduk Ayah</label>
            <input class="form-control" type="file" id="formFile" name="KTP Ayah" id="KTP Ayah" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3">
            <label for="KTP Ibu" class="form-label fw-semibold">Kartu Tanda Penduduk Ibu</label>
            <input class="form-control" type="file" id="formFile" name="KTP Ibu" id="KTP Ibu" required>
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
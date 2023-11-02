<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<center>
  <div class="justify-content-center mt-4 mb-4">
    <div class="sampulsilancar">
      <div class="card text-bg-dark">
        <img src="/img/silancar/SiLancar.png" class="card-img" alt="...">
        <div class="card-img-overlay">
        </div>
      </div>
    </div>
  </div>
</center>


<div class="container card" style="padding: 20px; padding-left: 100px;">

  <div class="row">
    <!-- Pendaftaran Kartu Keluarga -->
    <div class="card shadow border-2" style="width: 18rem; padding: 30px; margin: 20px;">
      <a href="/pelayanan/pendaftaran_kk">
        <img src="/img/KK.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black text-center">Pendaftaran Kartu Keluarga</h5>
        </div>
      </a>
    </div>


    <!-- Pendaftaran KTP -->
    <div class="card shadow border-2" style="width: 18rem; padding: 10px; margin: 20px;">
      <a href="/pelayanan/pendaftaran_ktp">
        <img src="/img/KTP.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black text-center">Pendaftaran Kartu Tanda Penduduk</h5>
        </div>
      </a>
    </div>

    <!-- Pendaftaran Kartu Identitas Anak -->
    <div class="card shadow border-2" style="width: 18rem; padding: 10px; margin: 20px;">
      <a href="/pelayanan/pendaftaran_kia">
        <img src="/img/KIA.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black">Pendaftaran Kartu Identitas Anak</h5>
          <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </a>
    </div>

    <!-- Pendaftaran Akta Kelahiran -->
    <div class="card shadow border-2" style="width: 18rem; padding: 10px; margin: 20px;">
      <a href="/pelayanan/pendaftaran_aktakelahiran">
        <img src="/img/AKTAKEL.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black">Pendaftaran Akta Kelahiran</h5>
          <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </a>
    </div>

    <!-- Pendaftaran Akta Kematian -->
    <div class="card shadow border-2" style="width: 18rem; padding: 10px; margin: 20px;">
      <a href="/pelayanan/pendaftaran_aktakematian">
        <img src="/img/AKTAKET.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black">Pendaftaran Akta Kematian</h5>
          <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </a>
    </div>

    <!-- Perbaikan Data -->
    <div class="card shadow border-2" style="width: 18rem; padding: 10px; margin: 20px;">
      <a href="/pelayanan/perbaikan_data">
        <img src="/img/DATA.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black">Perbaikan Data</h5>
          <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </a>
    </div>

    <!-- Pengaduan Update -->
    <div class="card shadow border-2" style="width: 18rem; padding: 10px; margin: 20px;">
      <a href="/pelayanan/pengaduan_update">
        <img src="/img/PENGADUAN.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black">Pengaduan Update</h5>
          <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </a>
    </div>

    <!-- Perbaikan NIK -->
    <div class="card shadow border-2" style="width: 18rem; padding: 10px; margin: 20px;">
      <a href="/pelayanan/perbaikan_nik">
        <img src="/img/PERBAIKANNIK.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black">Perbaikan Nik</h5>
          <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </a>
    </div>
  </div>
</div>

<?= $this->endSection('content'); ?>
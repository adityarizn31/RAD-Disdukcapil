<!-- Halaman Index untuk Pelayanan Masyarakat == Masyarakat Input - Input -->

<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<center>
  <div class="sampulsilancar">
    <div class="justify-content-center mt-4 mb-4">
      <div class="card text-bg-dark">
        <img src="/img/silancar/SiLancar.png" class="card-img" alt="...">
        <div class="card-img-overlay">
        </div>
      </div>
    </div>
  </div>
</center>

<div class="pelayanan">
  <div class="container">

    <div class="container">
      <h4 class="text-center">Pelayanan Pendaftaran Baru Si Lancar</h4>

      <div class="row" style="padding-left: 3%;">

        <!-- Pendaftaran Kartu Keluarga Si Lancar 1-->
        <div class="card shadow border-2" style="width: 19rem; padding: 2%; margin: 2%;">
          <a href="/pelayanan/pendaftaran_kk">
            <img src="/img/silancar/Kartu Keluarga.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black text-center">Pendaftaran Kartu Keluarga</h5>
            </div>
          </a>
        </div>

        <!-- Pendaftaran KTP Si Lancar 1-->
        <div class="card shadow border-2" style="width: 19rem; padding: 2%; margin: 2%;">
          <a href="/pelayanan/pendaftaran_ktp">
            <img src="/img/KTP.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black text-center">Pendaftaran Kartu Tanda Penduduk</h5>
            </div>
          </a>
        </div>

        <!-- Pendaftaran Kartu Identitas Anak Si Lancar 1-->
        <div class="card shadow border-2" style="width: 19rem; padding: 2%; margin: 2%;">
          <a href="/pelayanan/pendaftaran_kia">
            <img src="/img/KIA.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black text-center">Pendaftaran Kartu Identitas Anak</h5>
              <p class="card-text text-black pt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </a>
        </div>

        <!-- Pendaftaran Perpindahan Datang Kab dan Provinsi Si Lancar 1-->
        <div class="card shadow border-2" style="width: 19rem; padding: 2%; margin: 2%;">
          <a href="/pelayanan/pendaftaran_perpindahankabprov">
            <img src="/img/KIA.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black text-center">Pendaftaran Perpindahan Datang Kabupaten dan Provinsi</h5>
              <p class="card-text text-black pt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </a>
        </div>

        <!-- Pendaftaran Akta Kelahiran Si Lancar 2-->
        <div class="card shadow border-2" style="width: 19rem; padding: 2%; margin: 2%;">
          <a href="/pelayanan/pendaftaran_aktakelahiran">
            <img src="/img/AKTAKEL.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black text-center">Pendaftaran Akta Kelahiran</h5>
              <p class="card-text text-black pt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </a>
        </div>

        <!-- Pendaftaran Akta Kematian Si Lancar 2-->
        <div class="card shadow border-2" style="width: 19rem; padding: 2%; margin: 2%;">
          <a href="/pelayanan/pendaftaran_aktakematian">
            <img src="/img/AKTAKET.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black text-center">Pendaftaran Akta Kematian</h5>
              <p class="card-text text-black pt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </a>
        </div>

        <!-- Pendaftaran Perbaikan Data Si Lancar 4-->
        <div class="card shadow border-2" style="width: 19rem; padding: 2%; margin: 2%;">
          <a href="/pelayanan/pendaftaran_perbaikandata">
            <img src="/img/DATA.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black text-center">Pendaftaran Perbaikan Data</h5>
              <p class="card-text text-black pt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </a>
        </div>

        <!-- Pendaftaran Pengaduan Data Si Lancar 4-->
        <div class="card shadow border-2" style="width: 19rem; padding: 2%; margin: 2%;">
          <a href="/pelayanan/pendaftaran_pengaduanupdate">
            <img src="/img/DATA.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black text-center">Pendaftaran Pengaduan Data</h5>
              <p class="card-text text-black pt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </a>
        </div>

        <!-- Pendaftaran Pengaduan Data Si Lancar 4-->
        <div class="card shadow border-2" style="width: 19rem; padding: 2%; margin: 2%;">
          <a href="/pelayanan/pendaftaran_perbaikannik">
            <img src="/img/PERBAIKANNIK.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black text-center">Pendaftaran Perbaikan NIK</h5>
              <p class="card-text text-black pt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </a>
        </div>


      </div>

    </div>

  </div>
</div>

<?= $this->endSection('content'); ?>
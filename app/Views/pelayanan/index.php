<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<center>
  <div class="justify-content-center">
    <div class="sampulsilancar">
      <div class="card text-bg-dark">
        <img src="/img/silancar/SiLancar.png" class="card-img" alt="...">
        <div class="card-img-overlay">
          <!-- <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
          <p class="card-text"><small>Last updated 3 mins ago</small></p> -->
        </div>
      </div>
    </div>
  </div>
</center>


<div class="container" style="padding: 20px; padding-left: 100px;">
  <div class="row">
    <!-- Pendaftaran Kartu Keluarga -->
    <div class="card" style="width: 18rem; padding: 30px; margin: 20px;">
      <a href="/pelayanan/pendaftaran_kk">
        <img src="/img/KK.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black text-center">Pendaftaran Kartu Keluarga</h5>
        </div>
      </a>
    </div>


    <!-- Pendaftaran KTP -->
    <div class="card" style="width: 18rem; padding: 10px; margin: 20px;">
      <a href="/pelayanan/pendaftaran_ktp">
        <img src="/img/KTP.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black text-center">Pendaftaran Kartu Tanda Penduduk</h5>
        </div>
      </a>
    </div>

    <!-- Pendaftaran Kartu Identitas Anak -->
    <div class="card" style="width: 18rem; padding: 10px; margin: 20px;">
      <a href="/pelayanan/pendaftaran_kia">
        <img src="/img/KIA.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black">Pendaftaran Kartu Identitas Anak</h5>
          <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </a>
    </div>

    <!-- Pendaftaran Akta Kelahiran -->
    <div class="card" style="width: 18rem; padding: 10px; margin: 20px;">
      <a href="/pelayanan/pendaftaran_aktakelahiran">
        <img src="/img/AKTAKEL.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black">Pendaftaran Akta Kelahiran</h5>
          <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </a>
    </div>

    <!-- Pendaftaran Akta Kematian -->
    <div class="card" style="width: 18rem; padding: 10px; margin: 20px;">
      <a href="/pelayanan/pendaftaran_aktakematian">
        <img src="/img/AKTAKET.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black">Pendaftaran Akta Kematian</h5>
          <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </a>
    </div>

    <!-- Pelayanan Pemanfaatan Data Pengaduan -->
    <div class="card" style="width: 18rem; padding: 10px; margin: 20px;">
      <a href="/pelayanan/pelayanan_pemanfaatan_data_pengaduan">
        <img src="/img/adit.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black">Pelayanan Pemanfaatan Data, Inovasi dan Pengaduan antar Lembaga</h5>
          <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </a>
    </div>

    <!-- Perbaikan Data -->
    <div class="card" style="width: 18rem; padding: 10px; margin: 20px;">
      <a href="/pelayanan/perbaikan_data">
        <img src="/img/DATA.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black">Perbaikan Data</h5>
          <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </a>
    </div>

    <!-- Pengaduan Update -->
    <div class="card" style="width: 18rem; padding: 10px; margin: 20px;">
      <a href="/pelayanan/pengaduan_update">
        <img src="/img/PENGADUAN.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-black">Pengaduan Update</h5>
          <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </a>
    </div>

    <!-- Perbaikan NIK -->
    <div class="card" style="width: 18rem; padding: 10px; margin: 20px;">
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
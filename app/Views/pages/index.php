<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="sampul">

  <div class="container">
    <div class="row">
      <div class="col" style="padding: 15px;">

        <div class="row">

          <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Selamat Datang</h5>
                <p class="text-justify">Di Si Lancar (Sistem Layanan Administrasi Cepat dari Rumah) Situs ini digunakan untuk melayani masyarakat yang bertujuan untuk mempercepat pelayanan, memudahkan pelayanan dan mewujudkan pelayanan Administrasi Kependudukan yang membahagiakan masyarakat.</p>
                <a href="/pages/about" class="btn btn-primary">Tentang Kami</a>
              </div>
            </div>
          </div>

          <div class="col-sm-6 mb-3 mb-sm-0">
            <div class="card" style="border: none;">
              <img src="/img/silancar/LogoSindangKasih.png" alt="" style="padding: 20px;">
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
</div>

<!-- Berita -->
<div class="container mt-3 mb-3">
  <div class="row">

    <h3 class="text-center">Berita</h3>

    <div class="card-group">

      <?php foreach ($berita as $b) : ?>
        <div class="card">
          <img src="/img/berita/<?= $b['fotoberita']; ?>" class="card-img-top" alt="Foto Berita">
          <div class="card-body">
            <h5 class="card-title"> <?= $b['judulberita']; ?> </h5>
            <p class="card-text"><?= $b['keteranganberita']; ?></p>
            <p class="card-text"><small class="text-body-secondary">Last updated <?= $b['created_at']; ?> mins ago</small></p>
          </div>
        </div>
      <?php endforeach; ?>

    </div>

  </div>
</div>


<!-- Inovasi -->
<div class="container">
  <div class="row">
    <div class="col">

      <h3 class="text-center">Inovasi</h3>

      <div class="card" style="padding: 10px;">
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <?php foreach ($inovasi as $inov) : ?>
            <div class="col">

              <div class="card" style="border: none;">
                <img src="/img/inovasi/<?= $inov['fotoinovasi']; ?>" class="foto_inovasi" alt="Foto Inovasi">
                <div class="card-body">
                  <h5 class="card-title"><?= $inov['judulinovasi']; ?></h5>
                  <p class="card-text"><?= $inov['keteranganinovasi']; ?></p>
                </div>
              </div>

            </div>
          <?php endforeach; ?>

        </div>

        <hr>

      </div>

    </div>
  </div>
</div>

<br>
<br>

<!-- Visi & Misi -->
<div class="container">
  <div class="row">
    <div class="col">

      <div class="card text-center">
        <h5 class="card-title" style="padding-top: 20px;">
          Visi & Misi
        </h5>
        <h5 class="card-title">Dinas Kependudukan dan Pencatatan Sipil Majalengka</h5>
        <div class="card-body">
          <img class="logo" src="/img/visimisi/LogoSindangKasih.png" alt="">
          <p class="">Terwujudnya Pelayanan Prima yang Membahagiakan Masyarakat</p>
          <p class="">1. Meningkatkan System dan Prosedur untuk mewujudkan pelayanan yang cepat</p>
          <p class="">2. Meningkatkan Kualitas Sumber Daya Manusia Menunjang Pelayanan Yang Ramah</p>
          <p class="">3. Meningkatkan Pelayanan Kepada Masyarakat Dengan Inovatif</p>
          <p class="">4. Meningkatkan Kualitas Sarana dan Prasarana Dalam Mencapai Kemudahan Pelayanan</p>
        </div>
      </div>

    </div>
  </div>
</div>

<?= $this->endSection(); ?>
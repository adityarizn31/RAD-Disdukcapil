<!-- Halaman ini menggunakan folder layout dengan file tamplate -->
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Visi & Misi -->
<div class="container" style="padding: 3%;">
  <div class="row">
    <div class="col">

      <?php foreach ($visimisi as $v) : ?>

        <img src="/img/visimisi/<?= $v['fotovisimisi']; ?>" class="fotovisimisi" alt="Foto Visi Misi" srcset="">

      <?php endforeach; ?>

    </div>
  </div>
</div>

<div class="persyaratansilancar">
  <div class="container">
    <div class="row">
      <div class="col">

        <!-- Judul -->
        <div class="accordion accordion-flush" id="accordionFlushExample" style="margin-bottom: 2%;">

          <?php $i = 1; ?>
          <?php foreach ($persyaratansilancar as $pers) : ?>

            <!-- Judul Foto dan Keterangan Persyaratan -->
            <div class="accordion-item" style="margin-top: 1%;">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapse <?= $i++; ?>">
                  <h6 class="judulsilancar fw-bold"><?= $pers['judulpersyaratan']; ?></h6>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">

                <div class="grid-container">
                  <div>
                    <img class="fotopersyaratan" src="/img/persyaratan/<?= $pers['fotopersyaratan']; ?>" alt="" srcset="">
                  </div>
                  <div>
                    <p class="text-justify">
                      <?= $pers['keteranganpersyaratan']; ?>
                    </p>
                  </div>
                </div>

                <div class="text-justify"></div>
                <ul>
                  <ul>
                    <li>a. Perumusan kebijakan teknis bidang Administrasi Kependudukan dan Pencatatan Sipil yang meliputi Bidang Pelayanan Pendaftaran Penduduk, Bidang Pelayanan Pencatatan Sipil, Bidang Pengelolaan Informasi Administrasi Kependudukan dan Bidang Pemanfaatan Data dan Inovasi Pelayanan</li>
                    <li>b. Pengkoordinasian urusan bidang Administrasi Kependudukan dan Pencatatan Sipil yang meliputi Bidang Pelayanan Pendaftaran Penduduk, Bidang Pelayanan Pencatatan Sipil, Bidang Pengelolaan Informasi Administrasi Kependudukan dan Pemanfaatan Data dan Inovasi Pelayanan</li>
                    <li>c. Pembinaan dan evaluasi bidang Administrasi Kependudukan dan Pencatatan Sipil yang meliputi Bidang Pelayanan Pendaftaran Penduduk, Bidang Pelayanan Pencatatan Sipil, Bidang Pengelolaan Informasi Administrasi Kependudukan dan Bidang Pemanfaatan Data dan Inovasi Pelayanan</li>
                  </ul>
                </ul>

              </div>
            </div>


          <?php endforeach; ?>

        </div>

      </div>
    </div>
  </div>
</div>

<?= $this->endSection('content'); ?>
<!-- Halaman Tampilan Visi Admin  -->

<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4 border-2" style="margin-top: 25px;">

    <div class="card-header py-3 border-0">
      <div class="m-0 font-weight-bold text-primary"> Visi Misi Disdukcapil </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card mb-3" style="border: none; border: 0; outline: none; box-shadow: none;">

            <div class="card text-center">
              <h5 class="card-title" style="padding-top: 20px; border: none;">
                Visi & Misi
              </h5>

              <h5 class="card-title">Dinas Kependudukan dan Pencatatan Sipil Majalengka</h5>
              <div class="card-body">
                <img class="logo" src="/img/visimisi/LogoSindangKasih.png" alt="">
                <div class="row">

                  <?php foreach ($visimisi as $v) : ?>

                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <div class="card" style="border: none;">
                        <div class="card-body">
                          <h5 class="card-title">Visi</h5>
                          <br>
                          <p><?= $v['visi1']; ?></p>
                          <p><?= $v['visi2']; ?></p>
                          <p><?= $v['visi3']; ?></p>
                          <p><?= $v['visi4']; ?></p>
                          <p><?= $v['visi5']; ?></p>
                        </div>
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body" style="border: none; border: 0; outline: none; box-shadow: none;">
                          <h5 class="card-title">Misi</h5>
                          <br>
                          <p><?= $v['misi1']; ?></p>
                          <p><?= $v['misi2']; ?></p>
                          <p><?= $v['misi3']; ?></p>
                          <p><?= $v['misi4']; ?></p>
                          <p><?= $v['misi5']; ?></p>
                          <br>
                        </div>
                      </div>
                    </div>

                  <?php endforeach; ?>

                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
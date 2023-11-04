<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="padding-top: 20px;">
      <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
      <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="row">

      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow-h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                  Permohonan
                </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
              </div>
              <div class="col-auto">
                <img src="/img/dashboard/Permohonan.png" alt="" style="width: 50px;">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow-h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                  Permohonan Dalam Proses
                </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
              </div>
              <div class="col-auto">
                <img src="/img/dashboard/Process.png" alt="" style="width: 50px;">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow-h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                  Permohonan Yang Selesai
                </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">100</div>
              </div>
              <div class="col-auto">
                <img src="/img/dashboard/ProcessDone.png" alt="" style="width: 50px;">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

  </div>

  <div class="card mt-3 shadow border-2">

    <div class="card-body">
      <h4>Lorem Ipsum</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
        animi maxime at minima. Totam vero omnis ducimus commodi placeat
        accusamus, repudiandae nemo, harum magni aperiam esse voluptates.
        Non, sapiente vero?
      </p>
    </div>

    <div class="card-body">
      <h4>Lorem Ipsum</h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
        animi maxime at minima. Totam vero omnis ducimus commodi placeat
        accusamus, repudiandae nemo, harum magni aperiam esse voluptates.
        Non, sapiente vero?
      </p>
    </div>

    <div class="container" style="padding-left: 7%; padding-right: 5%;">
      <div class="row">
        <!-- Pendaftaran Kartu Keluarga -->
        <div class="card shadow border-2" style="width: 18rem; padding: 30px; margin: 20px;">
          <a href="/admin/pendaftaran_kk_admin">
            <img src="/img/KK.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black text-center">Pendaftaran Kartu Keluarga</h5>
            </div>
          </a>
        </div>


        <!-- Pendaftaran KTP -->
        <div class="card shadow border-2" style="width: 18rem; padding: 10px; margin: 20px;">
          <a href="/admin/pendaftaran_ktp_admin">
            <img src="/img/KTP.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black text-center">Pendaftaran Kartu Tanda Penduduk</h5>
            </div>
          </a>
        </div>

        <!-- Pendaftaran Kartu Identitas Anak -->
        <div class="card shadow border-2" style="width: 18rem; padding: 10px; margin: 20px;">
          <a href="/admin/pendaftaran_kia_admin">
            <img src="/img/KIA.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black">Pendaftaran Kartu Identitas Anak</h5>
              <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </a>
        </div>

        <!-- Pendaftaran Akta Kelahiran -->
        <div class="card shadow border-2" style="width: 18rem; padding: 10px; margin: 20px;">
          <a href="/admin/pendaftaran_aktakelahiran_admin">
            <img src="/img/AKTAKEL.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black">Pendaftaran Akta Kelahiran</h5>
              <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </a>
        </div>

        <!-- Pendaftaran Akta Kematian -->
        <div class="card shadow border-2" style="width: 18rem; padding: 10px; margin: 20px;">
          <a href="/admin/pendaftaran_aktakematian_admin">
            <img src="/img/AKTAKET.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black">Pendaftaran Akta Kematian</h5>
              <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </a>
        </div>

        <!-- Perbaikan Data -->
        <div class="card shadow border-2" style="width: 18rem; padding: 10px; margin: 20px;">
          <a href="/admin/perbaikan_data_admin">
            <img src="/img/DATA.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black">Perbaikan Data</h5>
              <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </a>
        </div>

        <!-- Pengaduan Update -->
        <div class="card shadow border-2" style="width: 18rem; padding: 10px; margin: 20px;">
          <a href="/admin/pendaftaran_pengaduanupdate_admin">
            <img src="/img/PENGADUAN.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black">Pengaduan Update</h5>
              <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </a>
        </div>

        <!-- Perbaikan NIK -->
        <div class="card shadow border-2" style="width: 18rem; padding: 10px; margin: 20px;">
          <a href="/admin/pendaftaran_perbaikannik_admin">
            <img src="/img/PERBAIKANNIK.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title text-black">Perbaikan Nik</h5>
              <p class="card-text text-black">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </a>
        </div>

      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-lg-6 mb-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary"> Si Lancar </h6>
        </div>
      </div>
    </div>

    <div class="col-lg-6 mb-4">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary"> Si Lancar </h6>
        </div>
      </div>

    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
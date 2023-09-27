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

  <div class="card mt-3">

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
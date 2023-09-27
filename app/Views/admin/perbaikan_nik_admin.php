<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4" style="margin-top: 25px;">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Perbaikan NIK</h6>
    </div>

    <div class="card-body">
      <table class="table table-fixed table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pemohon</th>
            <th scope="col">Email Pemohon</th>
            <th scope="col">Kartu Tanda Penduduk</th>
            <th scope="col">Kartu Keluarga</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
      </table>
    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4" style="margin-top: 25px;">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran KK</h6>
    </div>

    <div class="card-body">

      <table class="table table-fixed table-hover">
        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pemohon</th>
            <th scope="col">Email Pemohon</th>
            <th scope="col">No Whatsapp</th>
            <th scope="col">Formulir Desa</th>
            <th scope="col">Kartu Keluarga Suami</th>
            <th scope="col">Kartu Keluarga Istri</th>
            <th scope="col">Surat Nikah</th>
            <th scope="col">Surat Pindah</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <!-- Baris 1 -->
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>
              <a href="" class="btn btn-success">Detail</a>
            </td>
          </tr>

          <!-- Baris 2 -->
          <tr>
            <th scope="row">2</th>
          </tr>

          <!-- Baris 3 -->
          <tr>
            <th scope="row">3</th>
          </tr>

        </tbody>
      </table>

    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
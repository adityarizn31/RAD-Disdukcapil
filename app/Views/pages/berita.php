<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4" style="margin-top: 25px;">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Berita</h6>
    </div>

    <div class="card-body">
      <table class="table table-fixed table-hover">

        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Foto Berita</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <th scope="row">1</th>
            <td><img src="" alt="" srcset=""></td>
            <td>Survey Kepuasan Masyarakat</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam officiis ab cupiditate quis deleniti vero, omnis, harum, consequatur temporibus cumque aliquam adipisci. Itaque culpa minus tempora. Adipisci, deleniti. Omnis, quod.</td>
            <td>
              <a href="" class="btn btn-success">Detail</a>
            </td>
          </tr>
        </tbody>

      </table>
    </div>
  </div>

  <?= $this->endSection('contentadmin'); ?>
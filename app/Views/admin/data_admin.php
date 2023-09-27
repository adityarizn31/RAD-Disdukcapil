<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4" style="margin-top: 25px;">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Admin Disdukcapil Majalengka</h6>
    </div>

    <div class="card-body">
      <table class="table table-fixed table-hover">

        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
            <th scope="col">Tanggal Pembuatan</th>
            <th scope="col">Updated</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($admin as $adm) : ?>
            <tr>
              <th scope="row1"><?= $i++ ?></th>
              <td><?= $adm['nama']; ?></td>
              <td><?= $adm['email']; ?></td>
              <td><?= $adm['password']; ?></td>
              <td><?= $adm['level']; ?></td>
              <td><?= $adm['created_at']; ?></td>
              <td><?= $adm['updated_at']; ?></td>
              <td>
                <a href="/admin/<?= $adm['id']; ?>" class="btn btn-success">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>
    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
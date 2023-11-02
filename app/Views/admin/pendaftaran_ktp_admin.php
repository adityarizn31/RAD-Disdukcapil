<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4" style="margin-top: 25px;">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran KTP</h6>
    </div>

    <div class="card-body">

      <table class="table table-fixed table-hover">

        <thead class="table-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pemohon</th>
            <th scope="col">Email Pemohon</th>
            <th scope="col">No Whatsapp</th>
            <th scope="col">Permohonan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($pendaftaran_ktp as $ktp) :  ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $ktp['namapemohon']; ?></td>
              <td><?= $ktp['emailpemohon']; ?></td>
              <td><?= $ktp['nomorpemohon']; ?></td>
              <td>Pendaftaran KTP</td>
              <td>
                <a href="/DetailAdmin/detail_pendaftaranktp_admin/<?= $ktp['namapemohon']; ?>" class="btn btn-success">Detail</a>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>

      </table>

    </div>
  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
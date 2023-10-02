<!-- Halaman Detail Berita Admin -->
<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4 border-2" style="margin-top: 25px;">

    <div class="card-header py-3 border-0">
      <h6 class="m-0 font-weight-bold text-primary">Detail Berita</h6>
      <!-- <a href="/admin/berita_admin/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Kembali </a> -->
    </div>

    <div class="container">
      <div class="row">
        <div class="col">

          <div class="card mb-3">
            <center>
              <img src="/img/berita/<?= $berita['fotoberita']; ?>" style="width: 50%;" class="detail_berita mt-3" alt="...">
            </center>
            <div class="card-body mt-2">
              <h5 class="card-title"><?= $berita['judulberita']; ?></h5>
              <p class="card-text"><?= $berita['keteranganberita']; ?></p>
              <p class="card-text"><small class="text-body-secondary"><?= $berita['created_at'] ?></small></p>

              <a href="" class="btn btn-warning">Edit</a>

              <form action="/admin/<?= $berita['id']; ?>" method="post" class="d-inline">
                <?= csrf_field(); ?>
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ? ');">Delete</button>
              </form>

              <a href="" class="btn btn-danger">Delete</a>

              <br><br><a class="" href="/admin/berita_admin/">kembali ke Daftar Berita</a>
            </div>
          </div>

        </div>
      </div>
    </div>

  </div>

</section>

<?= $this->endSection('contentadmin'); ?>
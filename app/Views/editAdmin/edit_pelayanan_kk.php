<!-- Halaman untuk mengubah Judul, Gambar serta Keterangan Pelayanan Si Lancar -->

<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="card shadow mb-4 border-2" style="margin-top: 25px; padding: 20px;">

    <div class="card-header py-3">
      <div class="d-sm-flex align-items-center justify-content-between" style="padding-top:10px;"></div>
      <h6 class="m-0 font-weight-bold text-primary">Ubah Card Pelayanan Kartu Keluarga</h6>
    </div>

    <form action="/EditUpdateAdmin/updatePelayanankk" method="post" enctype="multipart/form-data">

      <!-- Keamanan -->
      <?= csrf_field(); ?>

      <div class="card-body">
        <div class="row">

          <!-- Judul Pelayanan -->
          <div class="col-sm-6">
            <div class="form-group">
              <label for="judulpelayanan" class="form-label fw-semibold">Judul Pelayanan</label>
              <input type="text" class="form-control <?= ($validation->hasError('judulpelayanan')) ? 'is-invalid' : '';  ?>" name="naama" id="judulpelayanan" autofocus value="<?= old('judulpelayanan');  ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('judulpelayanan'); ?>
              </div>
            </div>
          </div>

          <!-- Form Upload Foto Pelayanan KK -->
          <div class="col-sm-6">
            <div class="mb-3">
              <label for="fotopelayanan" class="form-label fw-semibold">Foto Pelayanan KK</label>
              <input type="file" class="form-control <?= ($validation->hasError('fotopelayanan')) ? 'is-invalid' : ''; ?>" name="fotopelayanan" id="fotopelayanan" value="<?= old('fotopelayanan'); ?>" onchange="previewImgBerita()">
              <div class="invalid-feedback">
                <?= $validation->getError('fotopelayanan'); ?>
              </div>
              <div class="col-sm-2 my-4">
                <img src="/img/berita/beritadef.PNG" class="img-thumbnail img-preview" srcset="">
              </div>
            </div>
          </div>

          <!-- Keterangan Pelayanan -->
          <div class="col-sm-6">
            <div class="form-group">
              <label for="keteranganpelayanan" class="form-label fw-semibold">Keterangan Pelayanan</label>
              <input type="text" class="form-control <?= ($validation->hasError('keteranganpelayanan')) ? 'is-invalid' : '';  ?>" name="naama" id="keteranganpelayanan" autofocus value="<?= old('keteranganpelayanan');  ?>">
              <div class="invalid-feedback">
                <?= $validation->getError('keteranganpelayanan'); ?>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <div class="col-sm-10">
              <button type="submit" class="btn btn-primary">Ubah Card Pelayanan KK</button>
            </div>
          </div>

        </div>
      </div>

    </form>

  </div>

</section>


<?= $this->endSection('contentadmin'); ?>
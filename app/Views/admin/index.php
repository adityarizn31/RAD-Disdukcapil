<!-- Halamaan Dashboard Admin -->

<?= $this->extend('layout/templateadmin'); ?>

<?= $this->section('contentadmin'); ?>

<section class="p-4" id="main-content">

  <button class="btn btn-primary" id="button-toggle">
    <i class="bi bi-list"></i>
  </button>

  <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4" style="padding-top: 20px;">
      <h1 class="h3 mb-0 text-gray-800 fw-bold">Dashboard</h1>
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

    <div class="pelayananrow row">

      <!-- Pendaftaran Kartu Keluarga -->
      <div class="card shadow border-2" style="width: 19rem; padding: 3%; margin: 3%; border-color: #007BFF;">
        <a href="/Admin/pendaftaran_kk_admin">
          <img src="/img/silancar/Kartu Keluarga.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-black text-center font-weight-bold">Data Pendaftaran Kartu Keluarga</h5>
          </div>
          <p class="justify-content-end text-black">Permohonan = <?= count($pendaftaran_kk) ?></p>
          <p class="justify-content-end text-black"> Tanggal : <?= date('d-m-Y') ?></p>
        </a>
      </div>

      <div class="card shadow border-2" style="width: 19rem; padding: 3%; margin: 3%; border-color: #007BFF;">
        <a href="/Admin/pendaftaran_kia_admin">
          <img src="/img/silancar/Kartu Identitas Anak.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-black text-center font-weight-bold"> Data Pendaftaran Kartu Identitas Anak</h5>
          </div>
          <?php
          $belumDiProsesCount = array_filter($pendaftaran_kia, function ($data) {
            return $data['status'] == 'Belum di Proses';
          });
          ?>
          <p class="justify-content-end text-black">Permohonan = <?= count($belumDiProsesCount) ?></p>
          <p class="justify-content-end text-black"> Tanggal : <?= date('d-m-Y') ?></p>
        </a>
      </div>

      <!-- Pendaftaran Kartu Keluarga Perceraian -->
      <div class="card shadow border-2" style="width: 19rem; padding: 3%; margin: 3%; border-color: #007BFF;">
        <a href="/Admin/pendaftaran_kkperceraian_admin">
          <img src="/img/silancar/Kartu Keluarga Perceraian.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-black text-center font-weight-bold">Data Pendaftaran Kartu Keluarga Perceraian</h5>
          </div>
          <p class="justify-content-end text-black">Permohonan = <?= count($pendaftaran_kk_perceraian) ?></p>
          <p class="justify-content-end text-black"> Tanggal : <?= date('d-m-Y') ?></p>
        </a>
      </div>

      <!-- Pendaftaran Surat Perpindahan Domisili -->
      <div class="card shadow border-2" style="width: 19rem; padding: 3%; margin: 3%; border-color: #007BFF;">
        <a href="/Admin/pendaftaran_suratperpindahan_admin">
          <img src="/img/silancar/Kartu Surat Perpindahan.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-black text-center font-weight-bold">Data Pendaftaran Surat Perpindahan Majalengka Menuju Luar</h5>
          </div>
          <p class="justify-content-end text-black">Permohonan = <?= count($pendaftaran_suratperpindahan) ?> </p>
          <p class="justify-content-end text-black"> Tanggal : <?= date('d-m-Y') ?></p>
      </div>

      <!-- Pendaftaran Surat Perpindahan Domisili -->
      <div class="card shadow border-2" style="width: 19rem; padding: 3%; margin: 3%; border-color: #007BFF;">
        <a href="/Admin/pendaftaran_suratperpindahanluar_admin">
          <img src="/img/silancar/Kartu Surat Perpindahan.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-black text-center font-weight-bold">Data Pendaftaran Surat Perpindahan Luar Menuju Majalengka</h5>
          </div>
          <p class="justify-content-end text-black">Permohonan = <?= count($pendaftaran_suratperpindahanluar) ?> </p>
          <p class="justify-content-end text-black"> Tanggal : <?= date('d-m-Y') ?></p>
        </a>
      </div>

      <!-- Pendaftaran Akta Kelahiran -->
      <div class="card shadow border-2" style="width: 19rem; padding: 3%; margin: 3%; border-color: #007BFF;">
        <a href="/Admin/pendaftaran_aktakelahiran_admin">
          <img src="/img/silancar/Kartu Akta Kelahiran.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-black text-center font-weight-bold"> Data Pendaftaran Akta Kelahiran</h5>
          </div>
          <p class="justify-content-end text-black">Permohonan = <?= count($pendaftaran_aktakelahiran) ?> </p>
          <p class="justify-content-end text-black"> Tanggal : <?= date('d-m-Y') ?></p>
        </a>
      </div>

      <!-- Pendaftaran Akta Kematian -->
      <div class="card shadow border-2" style="width: 19rem; padding: 3%; margin: 3%; border-color: #007BFF;">
        <a href="/Admin/pendaftaran_aktakematian_admin">
          <img src="/img/silancar/Kartu Akta Kematian.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-black text-center font-weight-bold"> Data Pendaftaran Akta Kematian</h5>
          </div>
          <p class="justify-content-end text-black">Permohonan = <?= count($pendaftaran_aktakematian) ?> </p>
          <p class="justify-content-end text-black"> Tanggal : <?= date('d-m-Y') ?></p>
        </a>
      </div>

      <!-- Pendaftaran Keabsahan Akta Kelahiran -->
      <div class="card shadow border-2" style="width: 19rem; padding: 3%; margin: 3%; border-color: #007BFF;">
        <a href="/Admin/pendaftaran_keabsahanakla_admin">
          <img src="/img/silancar/Keabsahan Akta Kelahiran.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-black text-center font-weight-bold"> Data Pendaftaran Keabsahan Akta Kelahiran</h5>
          </div>
          <p class="justify-content-end text-black">Permohonan = <?= count($pendaftaran_keabsahanakla) ?> </p>
          <p class="justify-content-end text-black"> Tanggal : <?= date('d-m-Y') ?></p>
        </a>
      </div>

      <!-- Pelayanan Pemanfaatan Data dan Inovasi -->
      <div class="card shadow border-2" style="width: 19rem; padding: 3%; margin: 3%; border-color: #007BFF;">
        <a href="/Admin/pendaftaran_pelayanandata_admin">
          <img src="/img/silancar/kartu Pelayanan Pemanfaatan Data.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-black text-center font-weight-bold"> Data Pendaftaran Pelayanan Pemanfaatan Data & Inovasi dan Pengaduan Antar Lembaga</h5>
          </div>
          <p class="justify-content-end text-black">Permohonan = <?= count($pendaftaran_pelayanandata) ?> </p>
          <p class="justify-content-end text-black"> Tanggal : <?= date('d-m-Y') ?></p>
        </a>
      </div>

      <!-- Perbaikan Data -->
      <div class="card shadow border-2" style="width: 19rem; padding: 3%; margin: 3%; border-color: #007BFF;">
        <a href="/Admin/perbaikan_data_admin">
          <img src="/img/silancar/Kartu Perbaikan Data.png" class="card-img-top">
          <div class="card-body">
            <h5 class="card-title text-black text-center font-weight-bold"> Data Pendaftaran Perbaikan Data</h5>
          </div>
          <p class="justify-content-end text-black">Permohonan = <?= count($pendaftaran_perbaikandata) ?> </p>
          <p class="justify-content-end text-black"> Tanggal : <?= date('d-m-Y') ?></p>
        </a>
      </div>

      <!-- Pengaduan Update -->
      <div class="card shadow border-2" style="width: 19rem; padding: 3%; margin: 3%; border-color: #007BFF;">
        <a href="/Admin/pendaftaran_pengaduanupdate_admin">
          <img src="/img/silancar/Kartu Pengaduan Update.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-black text-center font-weight-bold"> Data Pendaftaran Pengaduan Update</h5>
          </div>
          <p class="justify-content-end text-black">Permohonan = <?= count($pendaftaran_pengaduanupdate) ?> </p>
          <p class="justify-content-end text-black"> Tanggal : <?= date('d-m-Y') ?></p>
        </a>
      </div>

    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col">

        <div class="card text-white bg-primary mb-3">

          <div class="card-header">
            Laporan Grafik
          </div>
          <div class="card-body bg-white viewTampilGrafik">
            <canvas id="myChart" width="200" height="200"></canvas>
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script>
    // function isSelesaiKK(data) {
    //   return data.status === 'Selesai' & data.jenis_layanan === 'pendaftaran_kk';
    // }

    // function isSelesaiKIA(data) {
    //   return data.status === 'Selesai' & data.jenis_layanan === 'pendaftaran_kia';
    // }

    var pendaftaranKKData = <?php echo json_encode($pendaftaran_kk); ?>;
    var pendaftaranKKPerceraianData = <?php echo json_encode($pendaftaran_kk_perceraian); ?>;
    var pendaftaranKIAData = <?php echo json_encode($pendaftaran_kia); ?>;
    var pendaftaranSuratPerpindahanData = <?php echo json_encode($pendaftaran_suratperpindahan); ?>;
    var pendaftaranSuratPerpindahanLuarData = <?php echo json_encode($pendaftaran_suratperpindahanluar); ?>;
    var pendaftaranAktaKelahiranData = <?php echo json_encode($pendaftaran_aktakelahiran); ?>;
    var pendaftaranAktaKematianData = <?php echo json_encode($pendaftaran_aktakematian); ?>;
    var pendaftaranKeabsahanAklaData = <?php echo json_encode($pendaftaran_keabsahanakla); ?>;
    var pendaftaranPelayananData = <?php echo json_encode($pendaftaran_pelayanandata); ?>;
    var pendaftaranPerbaikanData = <?php echo json_encode($pendaftaran_perbaikandata); ?>;
    var pendaftaranPengaduanUpdateData = <?php echo json_encode($pendaftaran_pengaduanupdate); ?>;

    var countKKData = pendaftaranKKData.length
    var countKKPerceraianData = pendaftaranKKPerceraianData.length
    var countKIAData = pendaftaranKIAData.length
    var countSuratPerpindahanData = pendaftaranSuratPerpindahanData.length
    var countSuratPerpindahanLuarData = pendaftaranSuratPerpindahanLuarData.length
    var countAktaKelahiranData = pendaftaranAktaKelahiranData.length
    var countAktaKematianData = pendaftaranAktaKematianData.length
    var countKeabsahanAklaData = pendaftaranKeabsahanAklaData.length
    var countPelayananData = pendaftaranPelayananData.length
    var countPerbaikanData = pendaftaranPerbaikanData.length
    var countPengaduanUpdateData = pendaftaranPengaduanUpdateData.length

    var total = countKKData + countKKPerceraianData + countKIAData + countSuratPerpindahanData + countSuratPerpindahanLuarData + countAktaKelahiranData + countAktaKematianData + countKeabsahanAklaData + countPelayananData + countPerbaikanData + countPengaduanUpdateData;

    var percentKK = parseFloat((countKKData / total) * 100, 2).toFixed(2)
    var percentKKPerceraian = parseFloat((countKKPerceraianData / total) * 100, 2).toFixed(2)
    var percentKIA = parseFloat((countKIAData / total) * 100, 2).toFixed(2)
    var percentSuratPerpindahan = parseFloat((countSuratPerpindahanData / total) * 100, 2).toFixed(2)
    var percentSuratPerpindahanLuar = parseFloat((countSuratPerpindahanLuarData / total) * 100, 2).toFixed(2)
    var percentAktaKelahiran = parseFloat((countAktaKelahiranData / total) * 100, 2).toFixed(2)
    var percentAktaKematian = parseFloat((countAktaKematianData / total) * 100, 2).toFixed(2)
    var percentKeabsahanAkla = parseFloat((countKeabsahanAklaData / total) * 100, 2).toFixed(2)
    var percentPelayananData = parseFloat((countPelayananData / total) * 100, 2).toFixed(2)
    var percentPerbaikanData = parseFloat((countPerbaikanData / total) * 100, 2).toFixed(2)
    var percentPengaduanUpdateData = parseFloat((countPengaduanUpdateData / total) * 100, 2).toFixed(2)

    var labelKK = `Pendaftaran KK (${percentKK}%)`
    var labelKKPerceraian = `Pendaftaran KK Perceraian (${percentKKPerceraian}%)`
    var labelKIA = `Pendaftaran KIA (${percentKIA}%)`
    var labelSuratPerpindahan = `Pendaftaran Surat Perpindahan dari Majalengka Menuju Luar (${percentSuratPerpindahan}%)`
    var labelSuratPerpindahanLuar = `Pendaftaran Surat Perpindahan dari Luar Menuju Majalengka (${percentSuratPerpindahanLuar}%)`
    var labelAktaKelahiran = `Pendaftaran Akta Kelahiran (${percentAktaKelahiran}%)`
    var labelAktaKematian = `Pendaftaran Akta Kematian (${percentAktaKematian}%)`
    var labelKeabsahanAktaKelahiran = `Pendaftaran Keabsahan Akta Kelahiran (${percentAktaKelahiran}%)`
    var labelPelayananData = `Pendaftaran Pelayanan Data (${percentPelayananData}%)`
    var labelPerbaikanData = `Pendaftaran Perbaikan Data (${percentPerbaikanData}%)`
    var labelPengaduanUpdateData = `Pendaftaran Pengaduan Update Data (${percentPengaduanUpdateData}%)`


    const ctx = document.getElementById('myChart');
    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [labelKK, labelKKPerceraian, labelKIA, labelSuratPerpindahan, labelSuratPerpindahanLuar, labelAktaKelahiran, labelAktaKematian, labelKeabsahanAktaKelahiran, labelPelayananData, labelPerbaikanData, labelPengaduanUpdateData],
        datasets: [{
          label: 'Pendaftar Pelayanan Si Lancar',
          data: [countKKData, countKKPerceraianData, countKIAData, countSuratPerpindahanData, countSuratPerpindahanLuarData, countAktaKelahiranData, countAktaKematianData, countKeabsahanAklaData, countPelayananData, countPerbaikanData, countPengaduanUpdateData],
          borderWidth: 3
        }]
      }
      // options: {
      //   // Filter data berdasarkan status Selesai
      //   datasets: [{
      //     data: pendaftaranKKData.filter(isSelesaiKK),
      //     data: pendaftaranKIAData.filter(isSelesaiKIA)
      //   }]
      // }
    });
  </script>

  <!-- <div class="row">
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
  </div> -->

</section>

<?= $this->endSection('contentadmin'); ?>
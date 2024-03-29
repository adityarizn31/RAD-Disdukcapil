<!-- Header -->
<!doctype html>
<html lang="en">

<head>

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- My Css -->
  <link rel="stylesheet" href="/css/style.css">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

  <!-- JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <title> <?= $title; ?> </title>

</head>

<body>

  <header>
    <!-- Cara parsial dan modular -->
    <?= $this->include('layout/navbar'); ?>
  </header>

  <main>
    <!-- Bagian ini akan mencetak sebuah section yang diambil dari halaman -->
    <?= $this->renderSection('content'); ?>
  </main>

  <!-- Footer -->
  <footer>
    <div class="footer">
      <div class="container">
        <div class="col">
          <div class="row">

            <div class="card-group" style="padding: 20px;">

              <div class="card">
                <img src="/img/visimisi/LogoSindangKasih.png" alt="Logo Sindang Kasih" style="height: 50%; width: 35%; padding-top: 20px;">
                <div class="card-body">
                  <h5 class="card-title">Disdukcapil Majalengka</h5>
                  <p class="card-text">Jl. Kh. Abdul Halim, Tonjong, Kec. Majalengka, Kabupaten Majalengka, Jawa Barat 45414</p>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Jadwal Pelayanan</h5>
                  <div class="row">
                    <div class="col">
                      <div class="hari">
                        <p>Senin</p>
                        <p>Selasa</p>
                        <p>Rabu</p>
                        <p>Kamis</p>
                        <p>Jumat</p>
                      </div>
                    </div>

                    <div class="col">
                      <div class="waktu">
                        <p>08: 00 - 14:30</p>
                        <p>08: 00 - 14:30</p>
                        <p>08: 00 - 14:30</p>
                        <p>08: 00 - 14:30</p>
                        <p>08: 00 - 14:30</p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>

  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
  <script src="/public/js/script.js"></script>
  <script>
    // Halaman Pendaftaran KIA
    function previewImgPendaftaranKIA() {
      const pasfoto = document.querySelector('#pasfoto');
      const imgPreviewPasFoto = document.querySelector('.img-preview');

      const filePasFoto = new FileReader();
      filePasFoto.readAsDataURL(pasfoto.files[0]);

      filePasFoto.onload = function(e) {
        imgPreviewPasFoto.src = e.target.result;
      }
    }
  </script>

</body>

</html>
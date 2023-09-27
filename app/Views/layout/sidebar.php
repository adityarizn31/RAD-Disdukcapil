<div>
  <div class="sidebar p-3 bg-primary" id="sidebar" style="height: 100%;">
    <h4 class="mb-5 text-white text-center"> Dinas Kependudukan dan Pencatatan Sipil Kabupaten Majalengka </h4>

    <hr>

    <li>
      <a class="text-white" href="/admin">
        <i class="bi bi-house mr-2"></i>
        Dashboard
      </a>
    </li>

    <li>
      <a class="text-white" href="/admin/register">
        <i class="bi bi-universal-access-circle mr-2"></i>
        Register Admin
      </a>
      <!-- CodeIginiter akan mengkases Cotnroller dengan method register -->
    </li>

    <li>
      <a class="text-white" href="/admin/data_admin">
        <i class="bi bi-person-badge-fill mr-2"></i>
        Data Admin
      </a>
      <!-- CodeIgniter akan mengakses Controller admin dengan method data_admin -->
    </li>

    <li>
      <a class="text-white" href="/admin/berita_admin">
        <i class="bi bi-newspaper mr-2"></i>
        Berita
      </a>
      <!-- CodeIgniter akan mengakses Controller admin dengan method Index -->
    </li>

    <li>
      <a class="text-white" href="/admin/login">
        <i class="bi bi-box-arrow-right mr-2"></i>
        Logout
      </a>
      <!-- CodeIgniter akan mengakses Controller admin dengan method login -->
    </li>

    <hr>

    <div class="dropdown-center" style="padding-left: 14px;">
      <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Data dan Pelaporan
      </button>
      <ul class="dropdown-menu collapse-inner rounded">
        <li><a class="dropdown-item" href="/admin/pendaftaran_kk_admin">Pendaftaran KK</a></li>
        <li><a class="dropdown-item" href="/admin/pendaftaran_ktp_admin">Pendaftaran KTP</a></li>
        <li><a class="dropdown-item" href="/admin/pendaftaran_kia_admin">Pendaftaran KIA</a></li>
        <li><a class="dropdown-item" href="/admin/pendaftaran_aktalahir_admin">Pendaftaran Akta Kelahiran</a></li>
        <li><a class="dropdown-item" href="/admin/pendaftaran_aktakematian_admin">Pendaftaran Akta Kematian</a></li>
        <!-- <li><a class="dropdown-item" href="/admin/pendaftaran_ppip_admin">Pendaftaran Pelayanan PPIP</a></li> -->
        <li><a class="dropdown-item" href="/admin/perbaikan_data_admin">Perbaikan Data</a></li>
        <li><a class="dropdown-item" href="/admin/pengaduan_update_admin">Pengaduan Update</a></li>
        <li><a class="dropdown-item" href="/admin/perbaikan_nik_admin">Perbaikan NIK</a></li>
      </ul>
    </div>

  </div>
</div>
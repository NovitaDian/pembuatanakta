<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.111.3">
  <title></title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/dashboard/">





  <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">
  <?php
  include "header.php"
    ?>

<body>
  <?php
  include "sidebar.php"
    ?>


  <h2>TABEL MAHASISWA</h2>
  <a href="tambah.php"> <button type="button" class="btn btn-primary">TAMBAH MAHASISWA</button></a>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">NPM</th>
          <th scope="col">Jurusan</th>
          <th scope="col">Nama</th>
          <th scope="col">Tempat Lahir</th>
          <th scope="col">Tanggal Lahir</th>
          <th scope="col">Jenis Kelamin</th>
          <th scope="col">Agama</th>

          <th scope="col">Alamat</th>
          <th scope="col">Foto</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from mahasiswa");
        while ($d = mysqli_fetch_array($data)) {
          ?>
          <tr>
            <td>
              <?php echo $no++; ?>
            </td>

            <td>
              <?php echo $d['npm']; ?>
            </td>
            <td>
              <?php echo $d['program_studi']; ?>
            </td>
            <td>
              <?php echo $d['nama']; ?>
            </td>
            <td>
              <?php echo $d['tempat_lahir']; ?>
            </td>
            <td>
              <?php echo $d['tanggal_lahir']; ?>
            </td>
            <td>
              <?php echo $d['jenis_kelamin']; ?>
            </td>
            <td>
              <?php echo $d['agama']; ?>
            </td>
            <td>
              <?php echo $d['alamat']; ?>
            </td>
            <td>
              <?php echo $d['foto']; ?>
            </td>
            <td>
              <a href="edit.php?npm=<?php echo $d['npm']; ?>"><button type="button"
                  class="btn btn-outline-success btn-sm">Edit</button></a>
              <a href="hapus.php?npm=<?php echo $d['npm']; ?>"><button type="button"
                  class="btn btn-outline-danger btn-sm">Hapus</button></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>
  </main>
  </div>
  </div>


  <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.1/dist/chart.umd.min.js"
    integrity="sha384-gdQErvCNWvHQZj6XZM0dNsAoY4v+j5P1XDpNkcM3HJG1Yx04ecqIHk7+4VBOCHOG"
    crossorigin="anonymous"></script>
  <script src="dashboard.js"></script>
</body>

</html>
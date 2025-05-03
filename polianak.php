<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Poli Anak - Rumah Sakit Maboro</title>
  <meta name="description" content="Informasi Poli Anak Rumah Sakit Maboro" />
  <meta name="keywords" content="Poli Anak, Rumah Sakit Maboro, Layanan Kesehatan Anak" />

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet" />
</head>

<body class="subpage">
  <header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
        <h1 class="sitename">Rumah Sakit Maboro</h1>
      </a>
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.html">Beranda</a></li>
          <li><a href="#profil">Profil</a></li>
          <li><a href="#layanan" class="active">Layanan</a></li>
          <li><a href="#kontak">Kontak</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </header>

  <main id="main">
    <section class="about section">
      <div class="container section-title" data-aos="fade-up">
        <p><span>Pelayanan</span> <span class="description-title">Poli Anak</span></p>
      </div>

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/polianak.jpg" class="img-fluid mb-4" alt="Poli Anak" />
            <div class="book-a-table">
              <h3>Layanan Kesehatan Anak</h3>
            </div>
          </div>
          <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
            <div class="content ps-0 ps-lg-5">
              <p class="fst-italic">
                Poli Anak RS Maboro melayani pemeriksaan, imunisasi, dan pengobatan untuk bayi hingga remaja.
              </p>
              <ul>
                <li><i class="bi bi-check-circle-fill"></i> Dokter Spesialis Anak berpengalaman.</li>
                <li><i class="bi bi-check-circle-fill"></i> Imunisasi dasar dan lanjutan.</li>
                <li><i class="bi bi-check-circle-fill"></i> Konsultasi tumbuh kembang anak.</li>
              </ul>
              <p>Kami berkomitmen memberikan layanan ramah anak dengan fasilitas yang bersih dan aman.</p>
            </div>
          </div>
        </div>
      </div>

      <hr>
      <h4>💬 Komentar Pengunjung</h4>

      <!-- Form komentar -->
      <form method="post" action="">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama:</label>
          <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
          <label for="komentar" class="form-label">Komentar:</label>
          <textarea class="form-control" id="komentar" name="komentar" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Komentar</button>
      </form>

      <!-- Tampilkan komentar -->
      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nama = $_POST['nama'] ?? '';
        $komentar = $_POST['komentar'] ?? '';

        echo "<hr><h5>Komentar Terbaru:</h5>";
        echo "<p><strong>Nama:</strong> $nama</p>";        // ⚠️ Rawan XSS
        echo "<p><strong>Komentar:</strong> $komentar</p>";// ⚠️ Rawan XSS
      }
      ?>
    </section>
  </main>

  <footer id="footer" class="footer">
    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Alamat</h4>
            <p>Jl. Sehat No. 10, Bojonegoro</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Kontak</h4>
            <p>
              <strong>Telepon:</strong> +62 813-1234-5678<br />
              <strong>Email:</strong> info@maboro.id
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Layanan</h4>
            <p><strong>Senin - Sabtu:</strong> 08.00 - 16.00<br /><strong>Minggu:</strong> Tutup</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <h4>Sosial Media</h4>
          <div class="social-links d-flex">
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>
</body>
</html>

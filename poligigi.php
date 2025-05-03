<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Poli Gigi - RS Maboro</title>
  <meta name="description" content="Layanan Poli Gigi RS Maboro: perawatan kesehatan gigi dan mulut terpercaya." />
  <meta name="keywords" content="poli gigi, rumah sakit, maboro, dokter gigi" />

  <link href="assets/img/favicon.png" rel="icon" />
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />
  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Inter:wght@400;700&display=swap" rel="stylesheet" />

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

  <link href="assets/css/main.css" rel="stylesheet" />
</head>

<body class="index-page">
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

  <!-- Poli Gigi Section -->
  <section id="poli-gigi" class="about section">
    <div class="container section-title" data-aos="fade-up">
      <p><span>Layanan</span> <span class="description-title">Poli Gigi</span></p>
    </div>

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
          <img src="assets/img/poligigi.jpg" class="img-fluid mb-4" alt="Pelayanan Poli Gigi RS Maboro" />
          <div class="book-a-table">
            <h3>Kunjungi Poli Gigi Kami</h3>
          </div>
        </div>
        <div class="col-lg-5" data-aos="fade-up" data-aos-delay="250">
          <div class="content ps-0 ps-lg-5">
            <p class="fst-italic">
              Poli Gigi RS Maboro menyediakan layanan kesehatan gigi dan mulut yang lengkap dan profesional.
            </p>
            <ul>
              <li><i class="bi bi-check-circle-fill"></i> Pemeriksaan rutin kesehatan gigi dan mulut.</li>
              <li><i class="bi bi-check-circle-fill"></i> Pembersihan karang gigi (scaling) dan tambal gigi.</li>
              <li><i class="bi bi-check-circle-fill"></i> Cabut gigi, perawatan saluran akar, dan ortodonti.</li>
            </ul>
            <p>
              Dengan didukung oleh tenaga medis berpengalaman dan fasilitas modern, kami berkomitmen memberikan pelayanan terbaik untuk Anda dan keluarga.
            </p>
          </div>
        </div>
      </div>

      <hr />
      <h4>💬 Komentar Pengunjung</h4>

      <!-- Form Komentar -->
      <form method="post" action="">
        <div class="mb-3">
          <label for="nama" class="form-label">Nama:</label>
          <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
          <label for="komentar" class="form-label">Komentar:</label>
          <textarea class="form-control" id="komentar" name="komentar" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Komentar</button>
      </form>

      <!-- Komentar Rentan XSS -->
      <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $nama = $_POST['nama'] ?? '';
          $komentar = nl2br($_POST['komentar'] ?? '');
          echo "<hr><h5>Komentar Terbaru:</h5>";
          echo "<p><strong>Nama:</strong> $nama</p>";
          echo "<p><strong>Komentar:</strong> $komentar</p>";
        }
      ?>
    </div>
  </section>

  <!-- Footer -->
  <footer id="footer" class="footer dark-background">
    <div class="container">
      <div class="row gy-3">
        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-geo-alt icon"></i>
          <div class="address">
            <h4>Alamat</h4>
            <p>Jl. Kesehatan No.123, Sumberrejo, Bojonegoro</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-telephone icon"></i>
          <div>
            <h4>Kontak</h4>
            <p>
              <strong>Telepon:</strong> <span>+62 813 1234 5678</span><br />
              <strong>Email:</strong> <span>info@rsmaboro.com</span><br />
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 d-flex">
          <i class="bi bi-clock icon"></i>
          <div>
            <h4>Jam Operasional</h4>
            <p>
              <strong>Senin - Sabtu:</strong> <span>08.00 - 20.00</span><br />
              <strong>Minggu:</strong> <span>Tutup</span>
            </p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <h4>Ikuti Kami</h4>
          <div class="social-links d-flex">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">RS Maboro</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>

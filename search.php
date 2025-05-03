<?php
$q = $_GET['q'] ?? '';
$q_lower = strtolower($q);

$redirects = [
  'poli umum' => 'poliumum.php',
  'poli gigi' => 'poligigi.php',
  'poli anak' => 'polianak.php',
];

$found = false;

foreach ($redirects as $key => $url) {
  if (strpos(strtolower($key), $q_lower) !== false || strpos($q_lower, strtolower($key)) !== false) {
    header("Location: " . $url);
    $found = true;
    exit;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hasil Pencarian</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2>Hasil Pencarian</h2>
  <p>Anda mencari: <strong><?= $q ?></strong></p>
  <p>Tidak ditemukan produk yang cocok.</p>
</div>

</body>
</html>

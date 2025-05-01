<?php
$q = $_GET['q'] ?? '';
$q_lower = strtolower($q);

$redirects = [
  'Poli Umum' => 'poliumum.php',
  'Poli Gigi' => 'poligigi.php',
  'Poli Anak' => 'polianak.php',
];

if (array_key_exists($q_lower, array_change_key_case($redirects))) {
  header("Location: " . $redirects[$q_lower]);
  exit;
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

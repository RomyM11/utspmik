<?php
$mysqli = new mysqli("localhost", "root", "", "praktekxss_db");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'] ?? '';
  $email = $_POST['email'] ?? '';
  $subject = $_POST['subject'] ?? '';
  $message = $_POST['message'] ?? '';

  $stmt = $mysqli->prepare("INSERT INTO kontak (nama, email, subject, pesan) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $name, $email, $subject, $message);
  $stmt->execute();
  $stmt->close();
  $mysqli->close();

  echo "<h2>Data yang dikirim</h2>";
  echo "Nama: $name<br>"; // << vulnerable
  echo "Email: $email<br>";
  echo "Subjek: $subject<br>";
  echo "Pesan: $message<br>";
}
?>

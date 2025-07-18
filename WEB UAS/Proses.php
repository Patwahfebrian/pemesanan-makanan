<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama = $_POST['nama'] ?? '';
  $mie = $_POST['qty_mie_setan'] ?? 0;
  $iblis = $_POST['qty_mie_iblis'] ?? 0;
  $genderuwo = $_POST['qty_es_genderuwo'] ?? 0;

  // Koneksi ke database (contoh)
  $conn = new mysqli("localhost", "root", "", "db_gacoan");
  if ($conn->connect_error) die("Koneksi gagal");

  $stmt = $conn->prepare("INSERT INTO pesanan (nama, mie_setan, mie_iblis, es_genderuwo) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("siii", $nama, $mie, $iblis, $genderuwo);
  $stmt->execute();
  echo "Pesanan disimpan.";
  $stmt->close();
  $conn->close();
}
?>
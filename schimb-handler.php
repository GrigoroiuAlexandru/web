<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homemade";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexiunea a eșuat: " . $conn->connect_error);
}

$bun = $_POST['bun'];
$detalii = $_POST['detalii'];

$stmt = $conn->prepare("INSERT INTO products (bun, detalii) VALUES (?, ?)");
$stmt->bind_param("ss", $bun, $detalii);
$stmt->execute();

echo "Produs adăugat cu succes! <a href='index.php#exchange'>Înapoi la schimburi</a>";

$stmt->close();
$conn->close();
?>

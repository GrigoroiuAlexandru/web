<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homemade";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexiunea a esuat: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE name='$username'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  $row = $result->fetch_assoc();
  if (password_verify($password, $row['parola'])) {
    echo "Autentificare reușită! Bun venit, " . $row['name'];
    // poți folosi aici sesiuni PHP dacă vrei să păstrezi logarea
  } else {
    echo "Parolă incorectă.";
  }
} else {
  echo "Utilizatorul nu există.";
}

$conn->close();
?>

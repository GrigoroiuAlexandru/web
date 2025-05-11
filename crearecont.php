<?php
$servername = "localhost";
$username = "root"; // sau alt user
$password = ""; // parola ta
$dbname = "homemade";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexiunea a esuat: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$parola = password_hash($_POST['parola'], PASSWORD_DEFAULT); // criptare parolă

$sql = "INSERT INTO users (name, email, parola) VALUES ('$name', '$email', '$parola')";

if ($conn->query($sql) === TRUE) {
  echo "Cont creat cu succes! <a href='login.php'>Autentifică-te acum</a>";
} else {
  echo "Eroare: " . $conn->error;
}

$conn->close();
?>

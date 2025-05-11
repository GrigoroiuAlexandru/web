<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homemade";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Conexiunea a eșuat: " . $conn->connect_error);
}

$categorie = $_POST['categorie'];

$stmt = $conn->prepare("SELECT * FROM products WHERE detalii = ?");
$stmt->bind_param("s", $categorie);
$stmt->execute();
$result = $stmt->get_result();

echo "<h1>Produse din categoria aleasă:</h1>";

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<p><strong>Produs:</strong> " . htmlspecialchars($row['bun']) . "</p>";
  }
} else {
  echo "<p>Nu există produse disponibile în această categorie.</p>";
}

$stmt->close();
$conn->close();
?>

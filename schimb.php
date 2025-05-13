<?php
$produs_id = $_GET['id'];
$bunulmeu = $_GET['bunulmeu'];

echo "<h2>Felicitări!</h2>";
echo "<p>Ai ales să faci schimb între <strong>" . htmlspecialchars($bunulmeu) . "</strong> și produsul cu ID-ul <strong>" . htmlspecialchars($produs_id) . "</strong>.</p>";
echo "<p>(Aici poți implementa logica reală de schimb, sau salvarea într-o tabelă 'tranzactii' sau 'schimburi')</p>";
echo "<a href='Aplicatie_home-made.html#exchange'>Înapoi</a>";
?>

<?php
session_start();
session_destroy();
header("Location: index.html"); // sau pagina principală fără login
exit();
?>

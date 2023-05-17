<?php

$pdo = new PDO('mysql:host=localhost;dbname=filmes', 'root', null);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
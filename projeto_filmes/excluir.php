<?php
require_once ("conexao.php");
$id = $_GET["id"];

try {
  $stmt = $pdo->prepare('DELETE FROM cadastros WHERE id = :id');
  $stmt->bindParam(':id', $id);
  $stmt->execute();
  echo "<script>alert('Dados excluidos com sucesso!');location.href='/projeto_filmes/busca.php';</script>";
  //echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
?>
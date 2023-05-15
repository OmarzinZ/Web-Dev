<?php
require_once ("conexao.php");
$nome          = $_POST["nome"];
$classificacao = $_POST["classificacao"];
$genero        = $_POST["genero"];
$nota          = $_POST["nota"];
$assistido     = $_POST["assistido"];

try {
    $stmt = $pdo->prepare('INSERT INTO cadastros (id, nome, classificacao, genero, nota, assistido)
                           VALUES(:id, :nome, :classificacao, :genero, :nota, :assistido)');
    $stmt->execute(array(

        ':id'            => null,
        ':nome'          => $nome,
        ':classificacao' => $classificacao,
        ':genero'        => $genero,
        ':nota'          => $nota,
        ':assistido'     => $assistido
    ));
    
    echo "<script>alert('Dados salvos com sucesso!');location.href='/projeto_filmes/index.php';</script>";
}   catch(PDOException $e){
    echo 'Error: ' . $e->getMessage();
}
?>
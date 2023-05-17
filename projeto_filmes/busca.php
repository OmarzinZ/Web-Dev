<?php
require_once("conexao.php");
$cor = "#ffffff";
$consulta = $pdo->query("SELECT * FROM cadastros;");
echo "
<table border=1>
   <tr>
     <td>Nome</td>
     <td>Classificacao</td>
     <td>Genero</td>
     <td>Nota</td>
     <td>Assistido</td>
     <td></td>
     <td></td>
   </tr>
";
while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)){
if($cor == "#ffffff"){$cor = "#7049E3";}else{$cor = "#ffffff";}
echo "
    <tr bgcolor=$cor>
      <td>{$linha['nome']}</td>
      <td>{$linha['classificacao']}</td>
      <td>{$linha['genero']}</td>
      <td>{$linha['nota']}</td>
      <td>{$linha['assistido']}</td>
      <td><a href=excluir.php?id={$linha['id']}>Excluir</a></td>
      <td>Editar</td>
  </tr>   
    ";
}
echo "
</table>
<p><h3 onclick=print()>Imprimir</h3>
";
?>
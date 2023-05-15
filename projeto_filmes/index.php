<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Filmes</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    font-size: 16px;
    line-height: 1.5;
}

h1 {
    text-align: center;
    margin-top: 50px;
}

form {
    max-width: 500px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 10px;
}

p {
    margin: 10px 0;
}

select, input[type="text"], input[type="submit"], input[type="button"] {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.nota {
    display: none;
}

img{
    filter: brightness(50%);
}
img:hover{
    filter: brightness(100%)
}

.button-container{
    display: flex;
    justify-content: center;
}

    </style>
</head>
<body>
    <h1>FILMES</h1>
    <form method="post" action="salvar.php">
        <center><p>Nome: <input type="text" name="nome" maxlength="50"></p>
        <p>Classificação:
            <select name="classificacao"></center>
                <option>Livre</option>
                <option>10</option>
                <option>12</option>
                <option>14</option>
                <option>16</option>
                <option>18</option>
            </select>    
        </p>
        <center><p>Genero:
            <select name="genero"></center>
                <option>Ação</option>
                <option>Aventura</option>
                <option>Comédia</option>
                <option>Drama</option>
                <option>Fantasia</option>
                <option>Mistério</option>
                <option>Terror</option>
                <option>Romance</option>
                <option>Adulto</option>
            </select>
        </p>
        <p>Nota: <img src="imgs/3.png" onclick="nota.value = 1;">        
                 <img src="imgs/3.png" onclick="nota.value = 2;">
                 <img src="imgs/3.png" onclick="nota.value = 3;">
                 <img src="imgs/3.png" onclick="nota.value = 4;">
                 <img src="imgs/3.png" onclick="nota.value = 5;">
        </p>
        <input type="text" name="nota">
        <p>Assistido:
            <select name="assistido">
                <option>Sim</option>
                <option>Não</option>
            </select>
        </p>
        <hr>
        <div class="button-container">
        <p><input type="submit" name="bt" value="Salvar"></p>
        <p><a href=busca.php><input type="button" name="bt" value="Busca"></a></p>
        </div>
    </form>            
</body>
</html>
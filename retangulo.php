<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Calculo da área de um retângulo</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

</head>
<body>
    <div class="resposta">
    <h1>Calculo da área de um retângulo</h1>
    <form action="retangulo_resultado.php" method="post">
        <label for="comprimento">Comprimento:</label>
        <input type="number" name="comprimento" id="comprimento" required>
        <br>
        <label for="largura">Largura:</label>
        <input type="number" name="largura" id="largura" required>
        <br>
        <input type="submit" value="Calcular">
    </form>
    <a href="index.php">Voltar ao índice</a>
    </div>
</body>
</html>
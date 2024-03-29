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
    <form action="quadrado_resultado.php" method="post">
        <label for="numero 1">numero 1:</label>
        <input type="number" name="numero 1" id="numero 1" required>
        <br>
        <label for="numero 2">numero 2:</label>
        <input type="number" name="numero 2" id="numero 2" required>
        <br>
        <label for="numero 3">numero 3:</label>
        <input type="number" name="numero 3" id="numero 3" required>
        <br>

        <input type="submit" value="Calcular">
    </form>
    <a href="index.php">Voltar ao índice</a>
    </div>
</body>
</html>
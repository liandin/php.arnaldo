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
    <form action="prestacao_resultado.php" method="post">
        <label for="valor">valor:</label>
        <input type="number" name="valor" id="valor" required>
        <br>
        <label for="tempo">tempo:</label>
        <input type="number" name="tempo" id="tempo" required>
        <br>
        <label for="taxa">taxa:</label>
        <input type="number" name="taxa" id="taxa" required>
        <br>

        <input type="submit" value="Calcular">
    </form>
    <a href="index.php">Voltar ao índice</a>
    </div>
</body>
</html>
<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Calculo de anos</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

</head>
<body>
    <div class="resposta">
    <h1>Calculo dde anos da pessoa</h1>
    <form action="idade_resultado.php" method="post">
        <label for="ano">Ano:</label>
        <input type="number" name="ano" id="ano" required>
        <br>
        <input type="submit" value="Calcular">
    </form>
    <a href="index.php">Voltar ao índice</a>
    </div>
</body>
</html>
<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Calculo de horas para segundos</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />

</head>
<body>
    <div class="resposta">
    <h1>Calculo de horas para segundos</h1>
    <form action="segundos_resultado.php" method="post">
        <label for="horas">horas:</label>
        <input type="number" name="horas" id="horas" required>
        <br>
        <label for="minutos">minutos:</label>
        <input type="number" name="minutos" id="minutos" required>
        <br>
        <label for="segundos">segundos:</label>
        <input type="number" name="segundos" id="segundos" required>
        <br>
        <input type="submit" value="Calcular">
    </form>
    <a href="index.php">Voltar ao índice</a>
    </div>
</body>
</html>
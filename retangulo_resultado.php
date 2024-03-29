<?php
    echo "<div class="reposta">Resposta</div>"
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $comprimento = $_POST["comprimento"];
            $largura = $_POST["largura"];
            $area = $comprimento * $largura;
            echo "<p>A área do retângulo é: <strong>$area</strong></p>";
        }
    ?>
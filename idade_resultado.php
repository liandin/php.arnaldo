<?php
    echo "<div class="reposta">Resposta</div>"
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Anos = $_POST["ano"];
            $idade = 2024 - $Anos;
            $dias = $idade * 365;
            echo "<p>A idade é: <strong>$idade</strong></p><br><p>Em dias são: <strong>$dias</strong></p>";
        }
    ?>
<?php
    echo "<div class="reposta">Resposta</div>"
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["numero 1"];
            $num2 = $_POST["numero 2"];
            $num3 = $_POST["numero 3"];
            $quad = ($num1 + $num2 + $num3)**2;
            echo "<p>A área do retângulo é: <strong>$quad</strong></p>";
        }
    ?>
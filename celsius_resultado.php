<?php
    echo "<div class="reposta">Resposta</div>"
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $celsius = $_POST["celsius"];
            $f =($celsius * 1.8) + 32.00
            echo "<p>A temperatura em  Fahrenheit é: <strong>$f</strong></p>";
        }
    ?>
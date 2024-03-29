<?php
    echo "<div class="reposta">Resposta</div>"
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $valor = $_POST["valor"];
            $tempo = $_POST["tempo"];
            $taxa = $_POST["taxa"];
            $prestacao = $valor + ($valor * ($taxa/100) * $tempo)
            echo "<p>o valor da prestação é: <strong>$prestacao</strong></p>";
        }
    ?>
<?php
    echo "<div class="reposta">Resposta</div>"
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $H = $_POST["horas"];
            $S = $_POST["segundos"];
            $M = $_POST["minutos"];
            $horas = $H * 3600;
            $minutos = $M * 60;
            $segundos = $S;
            $segundototal = $segundos + $minutos + $horas;
            echo "<p>As horas, minutos e segundos são: <strong>$segundototal</strong></p>";
        }
    ?>
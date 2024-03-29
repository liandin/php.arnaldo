<?php

if(isset($_POST["enviar"])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $assunto = $_POST["assunto"];
        $mensagem = $_POST["mensagem"];

        echo "<p>nome: $nome</p>";
        echo "<p>email: $email</p>";
        echo "<p>assunto: $assunto</p>";
        echo "<p>mensagem: $mensagem</p>";
}

?>

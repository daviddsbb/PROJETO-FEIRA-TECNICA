<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "1234") {
        echo "Login realizado com sucesso!";
    } else {
        echo "Usuário ou senha incorretos!";
    }
}
?>

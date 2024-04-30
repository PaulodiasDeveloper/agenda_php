<?php

$host = "localhost";
$dbname = "agenda";
$user = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    // Ativar o modo de erros
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Mensagem de conexão bem-sucedida
    // echo "Conectado com sucesso à base de dados.";

} catch (PDOException $e) {
    // ERRO NA CONEXÃO
    $errorMessage = $e->getMessage();
    echo $errorMessage;
}


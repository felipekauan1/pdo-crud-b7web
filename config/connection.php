<?php
require_once 'env.exemple.php';

$dsn = "mysql:host=$ENV_HOST;dbname=$ENV_DBNAME";  // string de conexão com o banco de dados

// tratamento de erros ao conectar ao banco de dados
try {
    // cria a conexão com o banco
    $pdo = new PDO($dsn, $ENV_USERNAME, $ENV_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo 'conexão bem sucedida<br><br>';
} catch (PDOException $e) {
    echo 'erro na conexão: ' . $e->getMessage();
}
?>
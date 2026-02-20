<?php
require_once 'config/connection.php';  // para ter acesso a $pdo

// cria uma query de valores como parametros
$sql = "INSERT INTO usuarios (user_name, nome, password) VALUES (:user_name, :nome, :password)";

// prepara a stmt
$stmt = $pdo->prepare($sql);

// cria variáveis com os valores
$_user_name = 'abel';
$_nome = 'Abelão';
$_password = '12345678';

// substitui os parametros da query por valores
$stmt->bindParam(':user_name', $_user_name);
$stmt->bindParam(':nome', $_nome);
$stmt->bindParam(':password', $_password);

// executa a query no banco de dados
$stmt->execute();
?>
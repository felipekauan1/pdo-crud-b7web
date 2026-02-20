<?php
require_once 'config/connection.php';  // para ter acesso a $pdo

// cria uma query de valores como parametros
$sql = "UPDATE usuarios SET user_name = :user_name WHERE id = :id";

// prepara a statement
$stmt = $pdo->prepare($sql);

// cria variáveis com os valores
$_user_name = 'luzin';
$_id = 3;

// substitui os parametros da query por valores
$stmt->bindParam(':user_name', $_user_name);
$stmt->bindParam(':id', $_id);

// tenta executar a query no banco de dados
try {
    $stmt->execute();
    echo 'Usuário atualizado com sucesso<br>';
    echo $stmt->rowCount(). 'Linhas afetadas';
} catch (Exception $e) {
    echo 'Erro: ' . $e;
}
?>
<?php
require_once 'connection.php';  // para ter acesso a $pdo

// cria uma query
$sql = "DELETE FROM usuarios WHERE id = :id";

// prepara a statement
$stmt = $pdo->prepare($sql);

// cria variáveis com os valores
$_id = 7;

// substitui os parametros da query por valores
$stmt->bindParam(':id', $_id);

// tenta executar a query no banco de dados
try {
    $stmt->execute();
    echo 'Usuário deletado com sucesso<br>';
    echo $stmt->rowCount(). 'Linhas afetadas';
} catch (PDOException $e) {
    echo 'Erro: ' . $e;
}
?>
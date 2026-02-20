<?php
require_once 'connection.php';  // para ter acesso a $pdo

// cria uma query
$sql = "SELECT * FROM usuarios";

// prepara a statement
$stmt = $pdo->prepare($sql);

// executa a query no banco de dados
$result = $stmt->execute();


// mostra como array associativo
/*if ($result) {
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($data as $linha) {
        echo '<h1>' . $linha['nome'] . '</h1>';
        echo '<pre>';
        var_dump($linha);
        echo '<pre><br>';
    }
}*/

// mostra como objeto
if ($result) {
    $data = $stmt->fetchAll(PDO::FETCH_OBJ);

    foreach ($data as $linha) {
        echo '<h1>' . $linha->nome . '</h1>';
        echo '<pre>';
        var_dump($linha);
        echo '<pre><br>';
    }
}
?>
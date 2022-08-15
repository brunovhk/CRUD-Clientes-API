<?php
require_once('../config.php');
// Verifica se recebeu o POST, então executa a função. Caso contrário, gera um Exception.
try {
    if (isset($_POST)) {
        $id = $_POST['id'];
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("DELETE FROM clientes WHERE ID='$id'");
        $stmt->execute();

        echo json_encode(array('success' => "Cliente deletado com sucesso!"));
    }
} catch (Exception $e) {
    echo json_encode(array(
        'error' => array(
            'msg' => $e->getMessage(),
            'code' => $e->getCode(),
        )
    ));
}
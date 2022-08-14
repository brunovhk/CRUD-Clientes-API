<?php
require_once('config.php');

//Tenta a conexão com o banco de dados e executa o retorno de clientes, caso contrário gera um Exception
try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conn->prepare("SELECT * FROM clientes");
    $query->execute();
    $return = $query->fetchAll();
//    Caso o retorno de clientes seja maior que 0, executa a query e retorna os dados dos clientes.
    if (count($return) > 0) {
        $stmt = $conn->query("SELECT * FROM clientes");
        $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
} catch (Exception $e) {
    echo json_encode(array(
        'error' => array(
            'msg' => $e->getMessage(),
            'code' => $e->getCode(),
        )
    ));
}
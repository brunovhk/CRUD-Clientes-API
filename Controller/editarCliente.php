<?php
try {
    if (isset($_POST['id'])) {
        require_once('../config.php');
//    Instância das variáveis recebidas por post
        $id = $_POST['id'];
        $nome = $_POST['Nome'];
        $codigo = $_POST['Codigo'];
        $cpf_cnpj = $_POST['cpf_cnpj'];
        $logradouro = $_POST['logradouro'];
        $bairro = $_POST['bairro'];
        $localidade = $_POST['localidade'];
        $uf = $_POST['uf'];
        $complemento = $_POST['complemento'];
        $numero = $_POST['numero'];
        $endereco = $uf . ',' . $localidade . ',' . $bairro . ',' . $logradouro . ',' . $numero;
        $cep = $_POST['cep'];
        $fone = $_POST['fone'];
        $limiteCredito = $_POST['LimiteCredito'];
        $validade = $_POST['validade'];
//    Conexão com o banco de dados e alteração dos valores
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $conn->prepare("UPDATE clientes SET Nome='$nome', Codigo='$codigo', CPF_CNPJ='$cpf_cnpj', CEP='$cep', Logradouro='$logradouro', Bairro='$bairro', Cidade='$localidade', UF='$uf',Complemento='$complemento', Numero='$numero', Endereco='$endereco',Fone='$fone', LimiteCredito='$limiteCredito', Validade='$validade' WHERE ID='$id'");
        $query->execute();
        $return = $query->fetchAll(PDO::FETCH_ASSOC);
//    Retorno de requisição concluída com sucesso.
        echo json_encode(array('success' => "Cliente {$nome} alterado com sucesso!"));
    }
} catch (Exception $e) {
    echo json_encode(array(
        'error' => array(
            'msg' => $e->getMessage(),
            'code' => $e->getCode(),
        )
    ));
}
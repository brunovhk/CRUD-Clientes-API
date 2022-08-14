<?php
require_once('../config.php');
// Tenta inserir os dados, se já existirem ou houver algum erro gera um exception.
try {
    if (isset($_POST)) {
//    Conexão com o banco de dados e inserção dos valores.
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare('INSERT INTO clientes (DataHoraCadastro, Nome, CPF_CNPJ, Fone, LimiteCredito, Codigo ,Validade, CEP, Logradouro, Bairro, Cidade, UF, Complemento, Numero, Endereco) VALUES (:DataHoraCadastro, :Nome, :CPF_CNPJ, :Fone, :LimiteCredito, :Codigo, :Validade, :CEP, :Logradouro, :Bairro, :Localidade, :UF, :Complemento, :Numero, :Endereco)');
        $stmt->execute(array(
            ':DataHoraCadastro' => date('Y-m-d H:i:s'),
            ':Nome' => $_POST['nome'],
            ':CPF_CNPJ' => $_POST['cpf_cnpj'],
            ':Fone' => $_POST['fone'],
            ':LimiteCredito' => $_POST['limiteCredito'],
            ':Codigo' => $_POST['codigo'],
            ':Validade' => $_POST['validade'],
            ':CEP' => $_POST['cep'],
            ':Logradouro' => $_POST['logradouro'],
            ':Bairro' => $_POST['bairro'],
            ':Localidade' => $_POST['localidade'],
            ':UF' => $_POST['uf'],
            ':Complemento' => $_POST['complemento'],
            ':Numero' => $_POST['numero'],
            ':Endereco' => $_POST['uf'] . ',' . $_POST['localidade'] . ',' . $_POST['bairro'] . ',' . $_POST['logradouro'] . ',' . $_POST['numero']
        ));
    }
    echo json_encode(array('success' => 'Cliente cadastrado com sucesso!'));
} catch (Exception $e) {
    echo json_encode(array(
        'error' => array(
            'msg' => $e->getMessage(),
            'code' => $e->getCode(),
        )
    ));
}
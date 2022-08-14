<?php
require_once('../config.php');
// Tenta inserir os dados, se já existirem ou houver algum erro gera um exception.
try {
    if (isset($_POST)) {
        // Instanciando variáveis recebidas por "POST"
        $nome = $_POST['nome'];
        $cpf_cnpj = $_POST['cpf_cnpj'];
        $fone = $_POST['fone'];
        $limiteCredito = $_POST['limiteCredito'];
        $codigo = $_POST['codigo'];
        $validade = $_POST['validade'];
        $cep = $_POST['cep'];
        $logradouro = $_POST['logradouro'];
        $bairro = $_POST['bairro'];
        $localidade = $_POST['localidade'];
        $uf = $_POST['uf'];
        $complemento = $_POST['complemento'];
        $numero = $_POST['numero'];
//    Conexão com o banco de dados e inserção dos valores.
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare('INSERT INTO clientes (DataHoraCadastro, Nome, CPF_CNPJ, Fone, LimiteCredito, Codigo ,Validade, CEP, Logradouro, Bairro, Cidade, UF, Complemento, Numero, Endereco) VALUES (:DataHoraCadastro, :Nome, :CPF_CNPJ, :Fone, :LimiteCredito, :Codigo, :Validade, :CEP, :Logradouro, :Bairro, :Localidade, :UF, :Complemento, :Numero, :Endereco)');
        $stmt->execute(array(
            ':DataHoraCadastro' => date('Y-m-d H:i:s'),
            ':Nome' => $nome,
            ':CPF_CNPJ' => $cpf_cnpj,
            ':Fone' => $fone,
            ':LimiteCredito' => $limiteCredito,
            ':Codigo' => $codigo,
            ':Validade' => $validade,
            ':CEP' => $cep,
            ':Logradouro' => $logradouro,
            ':Bairro' => $bairro,
            ':Localidade' => $localidade,
            ':UF' => $uf,
            ':Complemento' => $complemento,
            ':Numero' => $numero,
            ':Endereco' => $uf . ',' . $localidade . ',' . $bairro . ',' . $logradouro . ',' . $numero
        ));
//    Finalizando a conexão no PDO e retornando json "success".
        $conn = null;
    }
    echo json_encode(array('success' => 'Cliente cadastrado com sucesso!'));
} catch (Exception $e) {
    if ($e->getCode() == 23000) {
        echo json_encode(array('error' => 'CPF já cadastrado no banco de dados.'));
    }
    echo json_encode(array(
        'error' => array(
            'msg' => $e->getMessage(),
            'code' => $e->getCode(),
        )
    ));
}
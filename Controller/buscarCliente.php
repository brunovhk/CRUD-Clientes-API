<?php
// Inclui as credenciais para conexão com o banco de dados.
require_once('../config.php');
// Verifica se recebeu o POST, então executa a função. Caso contrário, gera um Exception.
try {
    if (isset($_POST['pesquisar']) && $_POST['pesquisar'] != "") {
        $campo = $_POST['pesquisar'];
        $conn = new PDO($dsn, $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * FROM clientes WHERE Codigo LIKE '%$campo%' OR Nome LIKE '%$campo%' OR Cidade LIKE '%$campo%' OR CEP LIKE '%$campo%'");
        $stmt->execute();
        while ($stmt->fetch()) {
//            Retorno dos valores de acordo com a busca requisitada
            $stmt = $conn->query("SELECT * FROM clientes WHERE Codigo LIKE '%$campo%' OR Nome LIKE '%$campo%' OR Cidade LIKE '%$campo%' OR CEP LIKE '%$campo%'");
            $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            foreach ($clientes as $cliente) {
//                Instância dos valores de cada cliente
                $id = $cliente['ID'];
                $nome = $cliente['Nome'];
                $dataHoraCadastro = $cliente['DataHoraCadastro'];
                $codigo = $cliente['Codigo'];
                $cpf_cnpj = $cliente['CPF_CNPJ'];
                $cep = $cliente['CEP'];
                $endereco = $cliente['Endereco'];
                $fone = $cliente['Fone'];
                $limiteCredito = $cliente['LimiteCredito'];
                $validade = $cliente['Validade'];
// Retorno de dados dos clientes
                echo "<tr id=" . $id . ">";
                echo "<th scope='row'>" . $id . "</th>";
                echo "<td data-target='Nome'>" . $nome . "</td>";
                echo "<td>" . $dataHoraCadastro . "</td>";
                echo "<td data-target='Codigo'>" . $codigo . "</td>";
                echo "<td data-target='CPF_CNPJ'>" . $cpf_cnpj . "</td>";
                echo "<td data-target='CEP'>" . $cep . "</td>";
                echo "<td>" . $endereco . "</td>";
                echo "<td data-target='Fone'>" . $fone . "</td>";
                echo "<td data-target='LimiteCredito'>" . $limiteCredito . "</td>";
                echo "<td data-target='Validade'>" . $validade . "</td>";
                echo "<td><button type='button' class='btn btn-primary' data-bs-toggle='modal'
                            data-bs-target='#editModal' data-id='" . $id . "' data-role='update'>Editar</button></td>";
                echo "<td><button type='button' class='btn btn-danger' data-bs-toggle='modal'
                            data-bs-target='#deleteModal' data-id='" . $id . "' data-role='delete'>Excluir</button></td>";
            }
        }
    }
} catch (Exception $e) {
    echo json_encode(array(
        'error' => array(
            'msg' => $e->getMessage(),
            'code' => $e->getCode(),
        )
    ));
}
<?php

namespace App\Model;

use Exception;
use PDO;

class ClienteDAO
{
    public function create(Cliente $c)
    {
//    Cadastra um cliente
        $sql = 'INSERT INTO clientes (DataHoraCadastro, Nome, CPF_CNPJ, Fone, LimiteCredito, Codigo ,Validade, CEP, Logradouro, Bairro, Cidade, UF, Complemento, Numero, Endereco) VALUES (:DataHoraCadastro, :Nome, :CPF_CNPJ, :Fone, :LimiteCredito, :Codigo, :Validade, :CEP, :Logradouro, :Bairro, :Localidade, :UF, :Complemento, :Numero, :Endereco)';
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->execute(array(
            ':DataHoraCadastro' => $c->getDataHoraCadastro(),
            ':Nome' => $c->getNome(),
            ':CPF_CNPJ' => $c->getCpfCnpj(),
            ':Fone' => $c->getFone(),
            ':LimiteCredito' => $c->getLimiteCredito(),
            ':Codigo' => $c->getCodigo(),
            ':Validade' => $c->getValidade(),
            ':CEP' => $c->getCep(),
            ':Logradouro' => $c->getLogradouro(),
            ':Bairro' => $c->getBairro(),
            ':Localidade' => $c->getLocalidade(),
            ':UF' => $c->getUf(),
            ':Complemento' => $c->getComplemento(),
            ':Numero' => $c->getNumero(),
            ':Endereco' => $c->getEndereco()
        ));
        echo json_encode(array('success' => 'Cliente cadastrado com sucesso!'));
        exit;
    }

    public function read()
    {
//    Busca clientes
        $sql = 'SELECT * FROM clientes';
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->execute();
//    Caso o retorno de clientes seja maior que 0, retorna os dados dos clientes.
        if ($stmt->rowCount() > 0) {
            $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $clientes;
        }
        return [];
    }

    public function update(Cliente $c)
    {
//    Atualiza dados de um cliente

// Get dos valores e atualização no banco de dados
        $sql = 'UPDATE clientes SET Nome = :Nome, Codigo = :Codigo, CPF_CNPJ = :CPF_CNPJ, CEP = :CEP, Logradouro = :Logradouro, Bairro = :Bairro, Cidade = :Localidade, UF = :UF,Complemento = :Complemento, Numero = :Numero, Endereco = :Endereco,Fone = :Fone, LimiteCredito = :LimiteCredito, Validade = :Validade WHERE ID = :ID';
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindValue('ID', $c->getId(), PDO::PARAM_INT);
        $stmt->bindValue('Nome', $c->getNome(), PDO::PARAM_STR);
        $stmt->bindValue('Codigo', $c->getCodigo(), PDO::PARAM_STR);
        $stmt->bindValue('CPF_CNPJ', $c->getCpfCnpj(), PDO::PARAM_INT);
        $stmt->bindValue('CEP', $c->getCep(), PDO::PARAM_INT);
        $stmt->bindValue('Logradouro', $c->getLogradouro(), PDO::PARAM_STR);
        $stmt->bindValue('Bairro', $c->getBairro(), PDO::PARAM_STR);
        $stmt->bindValue('Localidade', $c->getLocalidade(), PDO::PARAM_STR);
        $stmt->bindValue('UF', $c->getUf(), PDO::PARAM_STR);
        $stmt->bindValue('Complemento', $c->getComplemento(), PDO::PARAM_STR);
        $stmt->bindValue('Numero', $c->getNumero(), PDO::PARAM_INT);
        $stmt->bindValue('Endereco', $c->getEndereco(), PDO::PARAM_STR);
        $stmt->bindValue('Fone', $c->getFone(), PDO::PARAM_INT);
        $stmt->bindValue('LimiteCredito', $c->getLimiteCredito(), PDO::PARAM_INT);
        $stmt->bindValue('Validade', $c->getValidade(), PDO::PARAM_STR);
        $stmt->execute();
//    Retorno de requisição concluída com sucesso.
        echo json_encode(array('success' => "Cliente {$c->getNome()} alterado com sucesso!"));
    }

    public
    function delete($id)
    {
//    Remove um cliente

        $sql = 'DELETE FROM clientes WHERE ID=?';
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        echo json_encode(array('success' => "Cliente deletado com sucesso!"));

    }

    public function search($campo)
    {
//        Busca um cliente no banco de dados
        $sql = "SELECT * FROM clientes WHERE Codigo LIKE '%$campo%' OR Nome LIKE '%$campo%' OR Cidade LIKE '%$campo%' OR CEP LIKE '%$campo%'";
        $stmt = Conexao::getConexao()->prepare($sql);
        $stmt->bindValue(':campo', $campo);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $clientes;
        }
    }
}
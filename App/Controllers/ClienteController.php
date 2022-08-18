<?php

namespace App\Controllers;

use App\Core\Application;
use Exception;

class ClienteController
{
    public function home()
    {
//        Retorna a view da home
        return Application::$app->router->renderView('home');
    }

    public function createController()
    {
//        Cria um cliente
        if (isset($_POST)) {
            try {
                $c = new \App\Model\Cliente();
                $c->setDataHoraCadastro(date('Y-m-d H:i:s'));
                $c->setCodigo($_POST['codigo']);
                $c->setNome($_POST['nome']);
                $c->setCpfCnpj($_POST['cpf_cnpj']);
                $c->setCep($_POST['cep']);
                $c->setLogradouro($_POST['logradouro']);
                $c->setBairro($_POST['bairro']);
                $c->setLocalidade($_POST['localidade']);
                $c->setUf($_POST['uf']);
                $c->setComplemento($_POST['complemento']);
                $c->setNumero($_POST['numero']);
                $c->setEndereco($_POST['uf'] . ',' . $_POST['localidade'] . ',' . $_POST['bairro'] . ',' . $_POST['logradouro'] . ',' . $_POST['numero']);
                $c->setFone($_POST['fone']);
                $c->setLimiteCredito($_POST['limiteCredito']);
                $c->setValidade(date('Y-m-d H:i:s'));

                $cDao = new \App\Model\ClienteDAO();
                $cDao->create($c);
            } catch (Exception $e) {
                echo json_encode(array(
                    'error' => array(
                        'msg' => $e->getMessage(),
                        'code' => $e->getCode(),
                    )
                ));
            }
        }
    }

    public function updateController()
    {
//        Atualiza os dados de um cliente
        if (isset($_POST['id'])) {
            try {
                $c = new \App\Model\Cliente();
                $c->setId($_POST['id']);
                $c->setCodigo($_POST['Codigo']);
                $c->setNome($_POST['Nome']);
                $c->setCpfCnpj($_POST['cpf_cnpj']);
                $c->setCep($_POST['cep']);
                $c->setLogradouro($_POST['logradouro']);
                $c->setBairro($_POST['bairro']);
                $c->setLocalidade($_POST['localidade']);
                $c->setUf($_POST['uf']);
                $c->setComplemento($_POST['complemento']);
                $c->setNumero($_POST['numero']);
                $c->setEndereco($_POST['uf'] . ',' . $_POST['localidade'] . ',' . $_POST['bairro'] . ',' . $_POST['logradouro'] . ',' . $_POST['numero']);
                $c->setFone($_POST['fone']);
                $c->setLimiteCredito($_POST['LimiteCredito']);
                $c->setValidade($_POST['validade']);

                $cDao = new \App\Model\ClienteDAO();
                $cDao->update($c);
            } catch (Exception $e) {
                echo json_encode(array(
                    'error' => array(
                        'msg' => $e->getMessage(),
                        'code' => $e->getCode(),
                    )
                ));
            }
        }
    }

    public function deleteController()
    {
//        Remove um cliente
        if (isset($_POST['id'])) {
            try {
                $cDao = new \App\Model\ClienteDAO();
                $id = $_POST['id'];
                $cDao->delete($id);
            } catch (Exception $e) {
                echo json_encode(array(
                    'error' => array(
                        'msg' => $e->getMessage(),
                        'code' => $e->getCode(),
                    )
                ));
            }
        }

    }

    public function searchController()
    {
        try {
            if (isset($_POST['pesquisar']) && $_POST['pesquisar'] != "") {
                $campo = $_POST['pesquisar'];
                $cDao = new \App\Model\ClienteDAO();
                $clientes = $cDao->search($campo);
                foreach ($clientes as $cliente) {
// Retorno de dados dos clientes
                    echo "<tr id=" . $cliente['ID'] . ">";
                    echo "<th scope='row'>" . $cliente['ID'] . "</th>";
                    echo "<td data-target='Nome'>" . $cliente['Nome'] . "</td>";
                    echo "<td>" . $cliente['DataHoraCadastro'] . "</td>";
                    echo "<td data-target='Codigo'>" . $cliente['Codigo'] . "</td>";
                    echo "<td data-target='CPF_CNPJ'>" . $cliente['CPF_CNPJ'] . "</td>";
                    echo "<td data-target='CEP'>" . $cliente['CEP'] . "</td>";
                    echo "<td>" . $cliente['Endereco'] . "</td>";
                    echo "<td data-target='Fone'>" . $cliente['Fone'] . "</td>";
                    echo "<td data-target='LimiteCredito'>" . $cliente['LimiteCredito'] . "</td>";
                    echo "<td data-target='Validade'>" . $cliente['Validade'] . "</td>";
                    echo "<td><button type='button' class='btn btn-primary' data-bs-toggle='modal'
                            data-bs-target='#editModal' data-id='" . $cliente['ID'] . "' data-role='update'>Editar</button></td>";
                    echo "<td><button type='button' class='btn btn-danger' data-bs-toggle='modal'
                            data-bs-target='#deleteModal' data-id='" . $cliente['ID'] . "' data-role='delete'>Excluir</button></td>";
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
    }


}
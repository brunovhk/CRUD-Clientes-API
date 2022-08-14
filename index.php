<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- JQuery -->
    <script src="resources/js/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap 5 -->
    <script src="/resources/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
    <title>CRUD Clientes</title>
</head>
<body>
<?php
include('resources/views/layouts/header.php');
require_once('Controller/listarClientes.php');
include('resources/views/layouts/modal/deleteModal.php');
include('resources/views/layouts/modal/editModal.php');
?>
<h2 class="text-center mt-3">Dashboard Clientes</h2>
<div class="container border border-dark shadow-lg mb-5 bg-body rounded">
    <table class="table">
        <form class="d-flex mt-5" id="form-pesquisa" action="Controller/buscarCliente.php" method="post">
            <input class="form-control me-2 mt-3" type="search" placeholder="Pesquisar por Código, Nome, Cidade ou CEP"
                   aria-label="pesquisar" name="pesquisar" id="pesquisar">
        </form>
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Data de cadastro</th>
            <th scope="col">Código</th>
            <th scope="col">CPF/CNPJ</th>
            <th scope="col">CEP</th>
            <th scope="col">Endereço</th>
            <th scope="col">Fone</th>
            <th scope="col">Limite de crédito</th>
            <th scope="col">Validade</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody id="listaClientes">
        <?php if (isset($clientes)) {
            foreach ($clientes as $cliente) { ?>
                <tr id="<?php echo $cliente['ID']; ?>">
                    <th scope="row"><?php echo $cliente['ID'] ?></th>
                    <td data-target="Nome"><?php echo $cliente['Nome'] ?></td>
                    <td><?php echo $cliente['DataHoraCadastro'] ?></td>
                    <td data-target="Codigo"><?php echo $cliente['Codigo'] ?></td>
                    <td data-target="CPF_CNPJ"><?php echo $cliente['CPF_CNPJ'] ?></td>
                    <td data-target="CEP"><?php echo $cliente['CEP'] ?></td>
                    <td><?php echo $cliente['Endereco'] ?></td>
                    <td data-target="Fone"><?php echo $cliente['Fone'] ?></td>
                    <td data-target="LimiteCredito"><?php echo $cliente['LimiteCredito'] ?></td>
                    <td data-target="Validade"><?php echo $cliente['Validade'] ?></td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary px-2" data-bs-toggle="modal"
                                data-bs-target="#editModal" data-id="<?php echo $cliente['ID'] ?>" data-role="update">
                            Editar
                        </button>
                    </td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger px-2" data-bs-toggle="modal"
                                data-bs-target="#deleteModal" data-id="<?php echo $cliente['ID'] ?>" data-role="delete">
                            Excluir
                        </button>

                    </td>
                </tr>
            <?php }
        } else {
            echo "<br><h5>Nenhum cliente cadastrado no banco de dados, <a href='/cadastrarCliente.php'>clique aqui</a> para cadastrar clientes.</h5>";
        } ?>
        </tbody>
    </table>
</div>
<!-- Adicionando Javascript -->
<script src="resources/js/apiViaCep.js">

</script>
<script src="resources/js/modalEdit.js">

</script>
<script src="resources/js/modalDelete.js">

</script>
<script src="resources/js/scriptBusca.js">

</script>
</body>
</html>
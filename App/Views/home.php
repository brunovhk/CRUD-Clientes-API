<?php
include(__DIR__ . '/layouts/modal/deleteModal.php');
include(__DIR__ . '/layouts/modal/editModal.php');
?>
<h2 class="text-center mt-3">Dashboard Clientes</h2>
<div class="container border border-dark shadow-lg mb-5 bg-body rounded">
    <table class="table">
        <form class="d-flex mt-5" id="form-pesquisa" action="/pesquisar" method="post">
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
        <?php $cDao = new \App\Model\ClienteDAO();
        $clientes = $cDao->read();
        if (isset($clientes)) {
            foreach ($clientes as $cliente) { ?>
                <tr id="<?= $cliente['ID']; ?>">
                    <th scope="row"><?= $cliente['ID'] ?></th>
                    <td data-target="Nome"><?= $cliente['Nome'] ?></td>
                    <td><?= $cliente['DataHoraCadastro'] ?></td>
                    <td data-target="Codigo"><?= $cliente['Codigo'] ?></td>
                    <td data-target="CPF_CNPJ"><?= $cliente['CPF_CNPJ'] ?></td>
                    <td data-target="CEP"><?= $cliente['CEP'] ?></td>
                    <td><?= $cliente['Endereco'] ?></td>
                    <td data-target="Fone"><?= $cliente['Fone'] ?></td>
                    <td data-target="LimiteCredito"><?= $cliente['LimiteCredito'] ?></td>
                    <td data-target="Validade"><?= $cliente['Validade'] ?></td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary px-2" data-bs-toggle="modal"
                                data-bs-target="#editModal" data-id="<?= $cliente['ID'] ?>" data-role="update">
                            Editar
                        </button>
                    </td>
                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger px-2" data-bs-toggle="modal"
                                data-bs-target="#deleteModal" data-id="<?= $cliente['ID'] ?>" data-role="delete">
                            Excluir
                        </button>

                    </td>
                </tr>
            <?php }
        } else {
            echo "<br><h5>Nenhum cliente cadastrado no banco de dados, <a href='/cadastrar'>clique aqui</a> para cadastrar clientes.</h5>";
        } ?>
        </tbody>
    </table>
</div>
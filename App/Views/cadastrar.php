<h2 class="text-center mt-3">Cadastro de clientes</h2>
<div class="container border border-dark shadow-lg mb-5 bg-body rounded">
    <form action="" method="post" id="form-cadastro">
        <div class="row m-2">
            <div class="col-6">

                <label for="nome" class="form-label fw-bold">Nome:</label>
                <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome"
                       maxlength="150">
                <label for="cpf_cnpj" class="form-label fw-bold">CPF ou CNPJ:</label>
                <input type="text" class="form-control" id="cpf_cnpj" placeholder="Digite o CPF ou CNPJ"
                       name="cpf_cnpj" maxlength="20">
                <label for="fone" class="form-label fw-bold">Telefone: </label>
                <input type="tel" class="form-control" id="fone" placeholder="Digite o telefone" name="fone"
                       maxlength="11">
                <label for="limiteCredito" class="fw-bold">Estabeleça um limite de crédito:</label>
                <div class="input-group form-control">
                    <span class="input-group-text fw-bold">R$</span>
                    <label>
                        <input type="number" step="0.01" class="form-control" placeholder="Exemplo: 250.42"
                               id="limiteCredito" name="limiteCredito">
                    </label>
                </div>
                <label for="codigo" class="form-label fw-bold">Código: </label>
                <input type="text" class="form-control" id="codigo" placeholder="Exemplo: n478BBLmFDCUfyy"
                       name="codigo" maxlength="15">
                <label for="validade" class="form-label fw-bold">Validade:</label>
                <input id="validade" class="form-control" type="date" name="validade">
            </div>
            <div class="col-6">
                <label for="cep" class="form-label fw-bold">CEP:</label>
                <input type="text" class="form-control" id="cep" placeholder="Digite o CEP: " name="cep">
                <label for="logradouro" class="form-label fw-bold">Rua:</label>
                <label for="logradouro"></label><input type="text" class="form-control" id="logradouro"
                                                       placeholder="Digite a rua" name="logradouro">
                <label for="bairro" class="form-label fw-bold">Bairro:</label>
                <input type="text" class="form-control" id="bairro" placeholder="Digite o bairro" name="bairro">
                <label for="localidade" class="form-label fw-bold">Cidade:</label>
                <input type="text" class="form-control" id="localidade" placeholder="Digite a cidade"
                       name="localidade">
                <label for="uf" class="form-label fw-bold">Estado (UF):</label>
                <input type="text" class="form-control" id="uf" placeholder="Digite o estado" name="uf">
                <label for="complemento" class="form-label fw-bold">Complemento:</label>
                <input type="text" class="form-control" id="complemento" placeholder="Digite o complemento"
                       name="complemento">
                <label for="numero" class="form-label fw-bold">Número:</label>
                <input type="number" class="form-control" id="numero" placeholder="Digite o número"
                       name="numero">
            </div>
            <button type="submit" class="btn btn-primary mt-3 mb-3" id="cadastrar">Cadastrar</button>
    </form>
</div>
<!-- Adicionando Javascript -->
<script type="text/javascript">
    //    Post do form de cadastro para o controller de cadastro
    var formCadastro = $("#form-cadastro");

    formCadastro.submit(function (e) {
        e.preventDefault();
        $.ajax({
            type: formCadastro.attr('method'),
            url: formCadastro.attr('action'),
            data: formCadastro.serialize(),
            success: function (data) {
                alert(data);
            }
        })
    })
    //    Validação para apenas números no campo CPF/CNPJ
    var cpf = document.getElementById("cpf_cnpj");
    cpf.addEventListener("keypress", e => {
        if (e.keyCode >= 48 && e.keyCode <= 57) {
            return true;
        } else {
            e.preventDefault(); // bloqueia o evento padrão ao apertar as teclas
        }
    })
</script>

<!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Alterar dados de cliente</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <label for="nome" class="form-label fw-bold">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                            <label for="cpf_cnpj" class="form-label fw-bold">CPF ou CNPJ:</label>
                            <input type="number" class="form-control" id="cpf_cnpj"
                                   placeholder="Digite o CPF ou CNPJ"
                                   name="cpf_cnpj">
                            <label for="fone" class="form-label fw-bold">Telefone: </label>
                            <input type="number" class="form-control" id="fone"
                                   placeholder="Digite o telefone" name="fone">
                            <label for="limiteCredito" class="form-label fw-bold">Limite de
                                crédito: </label>
                            <input type="text" class="form-control" id="limiteCredito"
                                   placeholder="Digite o limite de credito" name="limiteCredito">

                            <label for="codigo" class="form-label fw-bold">Código: </label>
                            <input type="text" class="form-control" id="codigo"
                                   placeholder="Exemplo: n478BBLmFDCUfyy"
                                   name="codigo">
                            <label for="validade" class="form-label fw-bold">Validade:</label>
                            <input id="validade" class="form-control" type="date" name="validade">
                        </div>
                        <div class="col-6">
                            <label for="cep" class="form-label fw-bold">CEP:</label>
                            <input type="text" class="form-control" id="cep"
                                   placeholder="Digite o CEP: " name="cep">
                            <label for="logradouro" class="form-label fw-bold">Rua:</label>
                            <label for="logradouro"></label><input type="text" class="form-control"
                                                                   id="logradouro"
                                                                   placeholder="Digite a rua"
                                                                   name="logradouro">
                            <label for="bairro" class="form-label fw-bold">Bairro:</label>
                            <input type="text" class="form-control" id="bairro"
                                   placeholder="Digite o bairro" name="bairro">
                            <label for="localidade" class="form-label fw-bold">Cidade:</label>
                            <input type="text" class="form-control" id="localidade"
                                   placeholder="Digite a cidade"
                                   name="localidade">
                            <label for="uf" class="form-label fw-bold">Estado (UF):</label>
                            <input type="text" class="form-control" id="uf"
                                   placeholder="Digite o estado" name="uf">
                            <label for="complemento" class="form-label fw-bold">Complemento:</label>
                            <input type="text" class="form-control" id="complemento"
                                   placeholder="Digite o complemento"
                                   name="complemento">
                            <label for="numero" class="form-label fw-bold">Número:</label>
                            <input type="number" class="form-control" id="numero"
                                   placeholder="Digite o número"
                                   name="numero">
                            <input type="hidden" id="clienteID" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar
                </button>
                <button type="button" id="salvar" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </div>
</div>
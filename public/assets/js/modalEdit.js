$(document).ready(function () {
    // Função para retornar os valores ao Modal.
    $(document).on('click', 'button[data-role=update]', function () {
        // Instância dos valores
        var id = $(this).data('id');
        var Nome = $('#' + id).children('td[data-target=Nome]').text()
        var Codigo = $('#' + id).children('td[data-target=Codigo]').text()
        var cpf_cnpj = $('#' + id).children('td[data-target=CPF_CNPJ]').text()
        var cep = $('#' + id).children('td[data-target=CEP]').text()
        var fone = $('#' + id).children('td[data-target=Fone]').text()
        var LimiteCredito = $('#' + id).children('td[data-target=LimiteCredito]').text()
        var validade = $('#' + id).children('td[data-target=Validade]').text()
        // Inserção dos valores no Modal form
        $('#nome').val(Nome);
        $('#codigo').val(Codigo);
        $('#cpf_cnpj').val(cpf_cnpj);
        $('#cep').val(cep);
        $('#fone').val(fone);
        $('#limiteCredito').val(LimiteCredito);
        $('#validade').val(validade);
        $('#clienteID').val(id);
    })
    // Instância dos valores ao receber click
    $('#salvar').click(function () {
        var id = $('#clienteID').val();
        var Nome = $('#nome').val();
        var Codigo = $('#codigo').val();
        var cpf_cnpj = $('#cpf_cnpj').val();
        var logradouro = $('#logradouro').val();
        var bairro = $('#bairro').val();
        var localidade = $('#localidade').val();
        var uf = $('#uf').val();
        var complemento = $('#complemento').val();
        var numero = $('#numero').val();
        var cep = $('#cep').val();
        var fone = $('#fone').val();
        var LimiteCredito = $('#limiteCredito').val();
        var validade = $('#validade').val();
        // Post para alteração dos valores no banco de dados.
        $.ajax({
            url: '/editar',
            method: 'POST',
            data: {
                id: id,
                Nome: Nome,
                Codigo: Codigo,
                cpf_cnpj: cpf_cnpj,
                logradouro: logradouro,
                bairro : bairro,
                localidade : localidade,
                uf: uf,
                complemento : complemento,
                numero : numero,
                cep: cep,
                fone: fone,
                LimiteCredito: LimiteCredito,
                validade: validade
            },
            success: function (data){
                $('#editModal').modal('toggle')
                alert(data);
                location.reload();
            }

        });
    })

});
$(document).ready(function () {
    // Pesquisar os clientes sem refresh na página
    $('#pesquisar').keyup(function () {
        $('#form-pesquisa').submit(function () {
            var dados = $(this).serialize();
            // Realiza o post e retorna os dados de pesquisa
            $.ajax({
                url: 'Controller/buscarCliente.php',
                type: 'POST',
                dataType: 'html',
                data: dados,
                success: function (data) {
                    $('#listaClientes').empty().html(data);
                }
            })
            return false;
        });
        $('form-pesquisa').trigger('submit');
    });

});
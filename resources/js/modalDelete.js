$(document).ready(function () {
    // Função para retornar os valores ao Modal.
    $(document).on('click', 'button[data-role=delete]', function () {
        var id = $(this).data('id');
        $('#clienteID').val(id);
    })
    // Função post para excluir os dados do cliente no banco de dados.
    $('#deletar').click(function () {
        var id = $('#clienteID').val();
        console.log(id);
        $.ajax({
            url: 'Controller/deletarCliente.php',
            method: 'POST',
            data: {
                id: id
            },
            success: function (data) {
                $('#deleteModal').modal('toggle')
                alert(data);
                location.reload();
            }

        });
    })

});
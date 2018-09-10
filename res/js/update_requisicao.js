function solicitoUpdate(obj) {

    var codvend = obj.getAttribute('value');

    jQuery.ajax({
        type: "POST",
        url: "../../include/requisicao_vendedor.php",
        data: {id: codvend},

        success: function (data) {

            // convertendo a string em objeto
            var obj = JSON.parse(data);

            obj.forEach(function(o, index) {
                $('#nome-vendedor').val(o.nome);
                $('#tab-vendedor').val(o.tabela);
                $('#dtnasc-vendedor').val(o.nascimento);
                $('#vendedor-cadastrar-alterar').html('Editar Vendedor');
                $('#btn-add-vendedor').html('Concluir Alteração');
                $("#add-vendedor").attr("action","../../include/atualiza_vendedor.php");

            })
            //
            // $('#form-edt-vendedor').html('');
            // $('#form-edt-vendedor').html(consomeJsonForm(obj));

        }
    });

    return false;
};

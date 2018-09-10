function pegoId(obj) {

    var codvend = obj.getAttribute('value');

    jQuery.ajax({
        type: "POST",
        url: "../../include/carrega_cliente.php",
        data: {id: codvend},

        success: function (data) {

            // convertendo a string em objeto
            var obj = JSON.parse(data);

            $('#tabela-clientes').html('');
            $('#tabela-clientes').html(consomeJson(obj));

        }
    });

    return false;
};

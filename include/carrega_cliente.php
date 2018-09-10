<?php
    require_once("banco_cliente.php");

    /* Recebe valores vindos do formulario*/
    $valor = $_POST["id"];



        $clientes = listaClientes($conexao, $valor);
        $i = 0;
        foreach ($clientes as $cliente) {

            $pacoteCliente[$i]->nome = "{$cliente['DSNOME']}";
            $pacoteCliente[$i]->tipo = "{$cliente['IDTIPO']}";
            $pacoteCliente[$i]->limite = "{$cliente['DSLIM']}";
            $i = $i + 1;

            if (count($clientes) == $i) {
                $i=0;
            }
        }
        $pacoteClienteJSON = json_encode($pacoteCliente);

        echo $pacoteClienteJSON;

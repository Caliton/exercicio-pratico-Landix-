<?php
    session_start();
    require_once("banco_vendedor.php");

    /* Recebe valores vindos do formulario*/
    $valor = $_POST["id"];
    $_SESSION["id"] = $valor;
        $vendedores = consultaVendedor($conexao, $valor);
        $i = 0;
        foreach ($vendedores as $vendedor) {

            $pacoteVendedores[$i]->nome = "{$vendedor['DSNOME']}";
            $pacoteVendedores[$i]->tabela = "{$vendedor['CDTAB']}";
            $pacoteVendedores[$i]->nascimento = "{$vendedor['DTNASC']}";
            $pacoteVendedores[$i]->id = $valor;
            $i = $i + 1;

            if (count($vendedores) == $i) {
                $i=0;
            }
        }
        $pacoteVendedoresJSON = json_encode($pacoteVendedores);

        echo $pacoteVendedoresJSON;

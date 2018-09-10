<?php
require_once("conexao.php");

function insereCliente($conexao, $nome, $idtipo, $codvend, $dslim) {
    $query = "insert into CLIENTES (cdcl, dsnome, idtipo, cdvend, dslim)
        values (uuid(), '{$nome}', '{$idtipo}','{$codvend}', {$dslim})";
    return mysqli_query($conexao, $query);
}

function alteraCliente($conexao, $cdcl, $nome, $idtipo, $codvend, $dslim) {
    $query = "update CLIENTES set dsnome = '{$nome}', idtipo = '{$idtipo}', cdvend = '{$codvend}', dslim = '{$dslim}' where cdcl= '{$cdcl}'";
    return mysqli_query($conexao, $query);
}

function deletaCliente($conexao, $cdcl){
    $query = "delete from CLIENTES where cdcl='{$cdcl}'";
    return mysqli_query($conexao, $query);
}

function listaClientes($conexao, $chaveVend) {
    $clientes = array();

    $resultado = mysqli_query($conexao, "select * from CLIENTES where cdvend = '{$chaveVend}'");

    while($cliente = mysqli_fetch_assoc($resultado)) {
        array_push($clientes, $cliente);
    }

    return $clientes;
}

function listaTodosClientes($conexao) {
    $clientes = array();

    $resultado = mysqli_query($conexao, "select * from CLIENTES");

    while($cliente = mysqli_fetch_assoc($resultado)) {
        array_push($clientes, $cliente);
    }

    return $clientes;
}

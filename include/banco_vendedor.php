<?php
require_once("conexao.php");

function listaVendedor($conexao) {
    $vendedores = array();

    $resultado = mysqli_query($conexao, "select * from VENDEDORES");

    while($vendedor = mysqli_fetch_assoc($resultado)) {
        array_push($vendedores, $vendedor);
    }

    return $vendedores;
}

function insereVendedor($conexao, $nome, $cdtab, $dtnasc) {
    $query = "insert into VENDEDORES (cdvend, dsnome, cdtab, dtnasc)
        values (uuid(), '{$nome}', {$cdtab},'{$dtnasc}')";
    return mysqli_query($conexao, $query);
}

function alteraVendedor($conexao, $cdvend, $nome, $cdtab, $dtnasc) {
    $query = "update VENDEDORES set dsnome = '{$nome}', cdtab = '{$cdtab}', dtnasc = '{$dtnasc}' where cdvend= '{$cdvend}'";
    return mysqli_query($conexao, $query);
}

function deletaVendedor($conexao, $cdvend){
    $query = "delete from VENDEDORES where cdvend='{$cdvend}'";
    return mysqli_query($conexao, $query);
}

function consultaVendedor($conexao, $cdvend)
{
    $vendedores = array();

    $resultado = mysqli_query($conexao, "select * from VENDEDORES  where cdvend= '{$cdvend}'");

    while($vendedor = mysqli_fetch_assoc($resultado)) {
        array_push($vendedores, $vendedor);
    }

    return $vendedores;
}

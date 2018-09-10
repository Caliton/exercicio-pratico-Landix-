<?php
session_start();
require_once("banco_vendedor.php");

$dsnome = $_POST["nome-vendedor"];
$cdvend = $_SESSION["id"];
$cdtab = $_POST["tab-vendedor"];
$dtnasc = $_POST["dtnasc-vendedor"];


if (alteraVendedor($conexao, $cdvend, $dsnome, $cdtab, $dtnasc)) {

    echo "<script>location.href='../index.php'</script>";

}

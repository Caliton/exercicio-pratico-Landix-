<?php
require_once("banco_vendedor.php");

$dsnome = $_POST["nome-vendedor"];
$cdtab = $_POST["tab-vendedor"];
$dtnasc = $_POST["dtnasc-vendedor"];


if (array_key_exists('usado', $_POST)) {
    $usado = "true";
} else {
    $usado = "false";
}

if (insereVendedor($conexao, $dsnome, $cdtab, $dtnasc)) {
    echo "<script language=\"javascript\" type=\"text/javascript\">";
    echo "alert(\"Vendedor cadastrado com Sucesso!!!\");";
    echo"</script>";
    echo "<script>location.href='../index.php'</script>";

}



function dataBR($umadata) {
    $brdata = substr($umadata,8,2)."/".substr($umadata,5,2)."/".substr($umadata,0,4);
    return $brdata;
}

function dataMY($umadata) {
    $mydata = substr($umadata,6,4)."-".substr($umadata,3,2)."/".substr($umadata,0,2);
    return $mydata;
}

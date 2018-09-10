<?php
require_once("banco_cliente.php");

$dsnome = $_POST["nome-cliente"];
$idtipo = $_POST["tipo-pessoa"];
$limite = $_POST["lmt-cliente"];
$codvend = $_POST["vend-cliente"];

// echo "<script language=\"javascript\" type=\"text/javascript\">";
// echo "alert(\"{$limite}\");";
// echo"</script>";
// echo "<script>location.href='../index.php'</script>";
if (array_key_exists('usado', $_POST)) {
    $usado = "true";
} else {
    $usado = "false";
}

if (insereCliente($conexao, $dsnome, $idtipo, $codvend, $limite)) {
    echo "<script language=\"javascript\" type=\"text/javascript\">";
    echo "alert(\"Cliente cadastrado com Sucesso!!!\");";
    echo"</script>";
    echo "<script>location.href='../index.php'</script>";

} else {
    echo "<script language=\"javascript\" type=\"text/javascript\">";
    echo "alert(\"Falha ao cadastrar cliente!!!\");";
    echo"</script>";
    echo "<script>location.href='../index.php'</script>";

}

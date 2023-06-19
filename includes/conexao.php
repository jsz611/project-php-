<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fullstackmotos";

global $conex;

$conexao = mysqli_connect($servername, $username, $password, $database);

if (!$conexao) {
    die("Falhou a conexão" . mysqli_connect_error());
}

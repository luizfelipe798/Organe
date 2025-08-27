<?php
$nomeServidor = "localhost";
$nomeUsuario = "root";
$senha = "815674815";
$nomeBD = "geradordependencias";

$conn = new mysqli($nomeServidor, $nomeUsuario, $senha, $nomeBD);

if($conn -> connect_error) 
{
    die("Conexão falhou: " . $conn -> connect_error);
}
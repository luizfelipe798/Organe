<?php
    $nomeBanco = "Organe";
    $usuario = "root";
    $senha = "815674815";
    $servidor = "localhost";
    $porta = "3306";

    function conectarBanco($nomeBanco, $usuario, $senha, $servidor, $porta)
    {
        $conexao = mysqli_connect($servidor, $usuario, $senha, $nomeBanco, $porta);

        if(!$conexao)
        {
            die("Conexão falhou: " . mysqli_connect_error());
        }

        return $conexao;
    }

    function fecharConexao($conexao)
    {
        mysqli_close($conexao);
    }
?>
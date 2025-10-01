<?php
    function cadastrar($conexao, $login, $senha)
    {
        $login = mysqli_real_escape_string($conexao, $login);
        $senha = mysqli_real_escape_string($conexao, $senha);
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $query = "INSERT INTO usuarios (login, senha) VALUES ('$login', '$senhaHash')";

        if(mysqli_query($conexao, $query))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
?>
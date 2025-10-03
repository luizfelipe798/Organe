<?php
    session_start();
?>

<link rel="stylesheet" href="css/menu.css">
<menu class="menuPrincipal">
    <img src="" alt="Logo Organe" class="imagemLogoMenuPrincipal">

    <a href="index.php"class="linksMenuPrincipal">Início</a>
    <a href="sobre.php" class="linksMenuPrincipal">Sobre</a>
    <a href="contato.php" class="linksMenuPrincipal">Contato</a>
    <a href="login.php" class="linksMenuPrincipal">Login</a>
    <a href="cadastro.php" class="linksMenuPrincipal">Cadastro</a>
    
    <?php if(!isset($_SESSION['login'])) : ?>
        <a href="criartarefa.php" class="linksMenuPrincipal">Criar tarefa</a>
        <a href="listar.php" class="linksMenuPrincipal">Sair</a>
    <?php endif; ?>
</menu>
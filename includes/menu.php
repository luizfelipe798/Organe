<menu class="menuPrincipal">
    <img src="" alt="Logo Organe" class="imagemLogoMenuPrincipal">

    <a href="index.php"class="linksMenuPrincipal">Início</a>

    <?php if(!isset($_SESSION['login'])) : ?>
        <a href="criartarefa.php" class="linksMenuPrincipal">Criar tarefa</a>
        <a href="listar.php" class="linksMenuPrincipal">Sair</a>
    <?php endif; ?>
</menu>
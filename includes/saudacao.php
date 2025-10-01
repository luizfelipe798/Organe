<div class="saudacaousuariologado">
    <?php
        if(isset($_SESSION['login'])) 
        {
            echo "Olá, " . $_SESSION['login'] . ", que bom ter você de volta!";
        }
        else 
        {
            echo "Olá, seja bem vindo!";
        }
    ?>
</div>
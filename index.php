    <!-- Cabeçalho + menu -->
    <?php require_once("res/elementar/cabecalho.php") ?>
    <?php require_once("res/elementar/nav_menu.php") ?>

 <!-- Conteudo das doas tabela "Vendedores" e "Clientes" -->
    <!-- seção -->
    <section  class="container" >
        <!-- Tabela vendedores -->
        <?php require_once("res/telas/vendedores.php") ?>

        <!-- Tabela Clientes -->
        <?php require_once("res/telas/clientes.php") ?>
    </section>

 <!-- Modais de cadastramento e edições, para vendedores e clientes -->
    <?php require_once("res/telas/modal_vendedor.php") ?>
    <?php require_once("res/telas/modal_cliente.php") ?>



    <!-- Footer -->
    <?php require_once("res/elementar/footer.php") ?>

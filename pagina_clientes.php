<!-- Cabeçalho + menu -->
<?php require_once("res/elementar/cabecalho.php") ?>
<?php require_once("res/elementar/nav_menu.php") ?>

<!-- Conteudo das doas tabela "Vendedores" e "Clientes" -->
<!-- seção -->
<section  class="container" >
    <!-- Tabela vendedores -->
    <div class="tabela-clientes">

        <h3 class="sub-titulo">Clientes</h3>
        <button id="add_cliente" type="button" name="add_cliente" onmousedown="modal(this, 'modal_cliente')" class="btn-cadastrar">cadastrar</button>
        <button id="edt_cliente" type="button" name="edt_cliente" onmousedown="modal(this, 'modal_cliente')" class="btn-cadastrar">editar</button>


        <div class="campo-table-cabeca">
            <table class="tabela-head">
                <thead>
                    <tr>
                        <th class="tam_celula">Nome</th>
                        <th class="tam_celula">Tipo Pessoa</th>
                        <th class="tam_celula">Limite Credito</th>
                        <th class="tam_celula">Ações</th>

                    </tr>
                </thead>

            </table>
        </div>

        <div class="fundo">
        <div class="campo-table-corpo">

                <table class="tabela-corpo" >
                    <tbody id="tabela-clientes">


                        <?php
                            require_once("include/banco_cliente.php");
                            $clientes = listaTodosClientes($conexao);
                            foreach ($clientes as $cliente) {

                                 echo"<tr style='cursor:pointer;'>";
                                 echo"<td class='tam_celula' value='".$cliente['CDCL']."'"." onmousedown='pegoId(this);'>".$cliente['DSNOME']. "</td>";
                                 echo"<td class='tam_celula' value='".$cliente['CDCL']."'"." onmousedown='pegoId(this);'>".$cliente['IDTIPO']."</td>";
                                 echo"<td class='tam_celula' value='".$cliente['CDCL']."'"." onmousedown='pegoId(this);'>".$cliente['DSLIM']. "</td>";
                                 echo"<td class='tam_celula_acoes'><button class='btn cor-perigo' value='".$cliente['CDVEND']."' onmousedown=\"modal(this, 'modal_vendedor'); solicitoUpdate(this);\">deletar</button></td>";
                                 echo"</tr>";

                            }

                         ?>


                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>

<!-- Modais de cadastramento e edições, para vendedores e clientes -->
<?php require_once("res/telas/modal_cliente.php") ?>



<!-- Footer -->
<?php require_once("res/elementar/footer.php") ?>

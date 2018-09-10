<div class="tabela-vendedores">

    <h3 class="sub-titulo" >Vendedores</h3>
    <button id="add_vendedor" type="button" name="add_vendedor" onmousedown="modal(this, 'modal_vendedor')" class="btn-cadastrar">cadastrar</button>

    <div class="campo-table-cabeca">
        <table class="tabela-head">
            <thead>
                <tr>
                    <th class="tam_celula cor1">Nome</th>
                    <th class="tam_celula cor2">Cod. tab. de preço</th>
                    <th class="tam_celula cor3">Data Nascimento</th>
                    <th class="tam_celula cor2">Ações</th>

                </tr>
            </thead>

        </table>
    </div>

    <div class="fundo">
    <div class="campo-table-corpo">
    <?php require_once("include/banco_vendedor.php");

     ?>
            <table class="tabela-corpo" >
                <tbody>

                    <?php
                        $vendedores = listaVendedor($conexao);
                        foreach ($vendedores as $vendedor) {

                             echo"<tr style='cursor:pointer;'>";
                             echo"<td class='tam_celula' value='".$vendedor['CDVEND']."'"." onmousedown='pegoId(this);'>".$vendedor['DSNOME']. "</td>";
                             echo"<td class='tam_celula' value='".$vendedor['CDVEND']."'"." onmousedown='pegoId(this);'>".$vendedor['CDTAB']."</td>";
                             echo"<td class='tam_celula' value='".$vendedor['CDVEND']."'"." onmousedown='pegoId(this);'>".$vendedor['DTNASC']. "</td>";
                             echo"<td class='tam_celula_acoes'><button class='btn cor-cuidado' value='".$vendedor['CDVEND']."' onmousedown=\"modal(this, 'modal_vendedor'); solicitoUpdate(this);\">editar</button></td>";
                             echo"</tr>";

                        }

                     ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

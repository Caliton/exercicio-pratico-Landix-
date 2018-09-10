<div id="modal_cliente" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h4>Cadastrar Cliente: </h4>

    <form class="form_cadastra_cliente" id="add-cliente" action="../../include/cadastra_cliente.php" method="post">

        <div class="input-container label-one">
            <input type="text" id="nome-cliente" class="modal-input"  required autofocus autocomplete="off"  maxlength="50" name="nome-cliente">
            <label class="label" for="nome-cliente">Nome</label>
        </div>

        <div class="input-container">
            <span style="display:block; font-size: 1.5rem;">Tipo de Pessoa</span>
            <input type="radio"  id="pf" name="tipo-pessoa" value="pf" checked autofocus autocomplete="off"><label for="pf">PF - Pessoa Fisica</label>
            <input type="radio"  id="pj" name="tipo-pessoa" value="pj"  autofocus autocomplete="off"><label for="pj">PJ - Pessoa Juridica</label>

        </div>

        <div class="input-container label-dual">
            <input type="number" id="lmt-cliente" class="modal-input" name="lmt-cliente" required autofocus autocomplete="off">
            <label class="label " for="lmt-cliente">Limite de Crédito.</label>
        </div>

        <div class="input-container">
            <span style="display:block; font-size: 1.5rem;">Vendedor</span>
            
            <select class="" name="vend-cliente">
                <?php require_once("include/banco_vendedor.php");
                    $vendedores = listaVendedor($conexao);
                    foreach ($vendedores as $vendedor) {
                         echo"<option value=".$vendedor['CDVEND']." >".$vendedor['DSNOME']. "</option>";
                    }

                 ?>
            </select>
        </div>

        <button type="submit" class="btn-modal" id="btn-add-cliente">Cadastrar</button>

        </div>
    </form>

  </div>

</div>

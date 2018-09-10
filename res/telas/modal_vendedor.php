<div id="modal_vendedor" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h4 id="vendedor-cadastrar-alterar">Cadastrar Vendedor: </h4>

    <form class="form_cadastra_vendedor" id="add-vendedor" action="../../include/cadastra_vendedor.php" method="post">
        <div class="input-container label-one">
            <input type="text" id="nome-vendedor" class="modal-input"  required autofocus autocomplete="off"  maxlength="30" name="nome-vendedor">
            <label class="label" for="nome-vendedor">Nome</label>
        </div>

        <div class="input-container label-dual">
            <input type="text" id="tab-vendedor" class="modal-input" name="tab-vendedor" required autofocus autocomplete="off"  maxlength="5">
            <label class="label " for="tab-vendedor">Codigo Tabela de preço</label>
        </div>

        <div class="input-container label-dual">
            <input type="date" id="dtnasc-vendedor" class="modal-input" name="dtnasc-vendedor" required autofocus autocomplete="off" >
            <label class="label " for="dtnasc-vendedor"></label>
        </div>

        
        <button type="submit" class="btn-modal" id="btn-add-vendedor">Cadastrar</button>

        </div>

    </form>

  </div>

</div>

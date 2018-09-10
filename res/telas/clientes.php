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
                </tr>
            </thead>

        </table>
    </div>

    <div class="fundo">
    <div class="campo-table-corpo">

            <table class="tabela-corpo" >
                <tbody id="tabela-clientes">

                    <tr>
                        <td class='tam_celula'>-</td>
                        <td class='tam_celula'>Selecione um Vendedor</td>
                        <td class='tam_celula'>-</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

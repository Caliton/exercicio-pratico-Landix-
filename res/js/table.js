
function consomeJson(conteudo) {

    conteudo.forEach(function(cliente) {
        adicionaClienteNaTabela(cliente);
    });

}

function montaTr(cliente) {
    var clienteTr = document.createElement("tr");

    clienteTr.classList.add("cliente");

    clienteTr.appendChild(montaTd(cliente.nome, "tam_celula"));
    clienteTr.appendChild(montaTd(cliente.tipo, "tam_celula"));
    clienteTr.appendChild(montaTd(cliente.limite, "tam_celula"));



    return clienteTr;
}


function montaBotao() {
    var button = document.createElement('BUTTON');
    var lbl = document.createTextNode("+");
    button.appendChild(lbl);

    return button;
}


function montaTd(dado, classe) {
    var td = document.createElement("td");
    td.classList.add(classe);
    td.textContent = dado;

    return td;
}


function adicionaClienteNaTabela(cliente) {
    var clienteTr = montaTr(cliente);
    var tabela = document.querySelector("#tabela-clientes");
    tabela.appendChild(clienteTr);
}


// 
// function consomeJsonForm(conteudo) {
//
//
// }
//
//
// function preencherElementoForm(cliente) {
//
// }
//



























function criarTabela(conteudo) {
  var tbody=document.getElementById('tabela-clientes');


  for (var i=0;i<conteudo.length;i++) {
    var tr = document.createElement("tr");
    for(var o=0;o<conteudo[i].length;o++){
      var t = document.createElement("td");
      var texto=document.createTextNode(conteudo[i][o]);
      t.appendChild(texto);
      tr.appendChild(t);
    }
    tbody.appendChild(tr);
  }

}

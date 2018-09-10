

function modal(btn, container) {

    var caixa = document.getElementById(`${container}`);
    caixa.style.display = "block";

    // captura o elemento span do modal
    var span = document.getElementsByClassName("close");

    // fecha o modal
    for (var i = 0; i < span.length; i++) {
        span[i].onclick = function() {
            caixa.style.display = "none";
        }
    }

    // se clicar fora do modal ele se fecha
    window.onclick = function(event) {
        if (event.target == caixa) {
            caixa.style.display = "none";
        }
    }

}
//
// // Pega o modal
// var modal_ins_vendedor = document.getElementById('modal_ins_vendedor');
// var modal_alt_vendedor = document.getElementById('modal_alt_vendedor');
// var modal_del_vendedor = document.getElementById('modal_del_vendedor');
//
//
// // Botões dos modais
// var btn_modal_ins_vendedor = document.getElementById('add_vendedor');
// var btn_modal_alt_vendedor = document.getElementById('alt_vendedor');
// var btn_modal_alt_vendedor = document.getElementById('del_vendedor');
//

//
// // Quando o usuario clicar no botao, abre o modal
// btn_modal_ins_vendedor.onclick = function() {
//     modal_ins_vendedor.style.display = "block";
//     console.log("fui clicado");
// }

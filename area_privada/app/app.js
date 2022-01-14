import {
    lista_indice,
    icon_menu_abrir_resp,
    icon_menu_fechar_resp,
    tema_faq,
    header
} from '../app/dados.js';

import {
    apresenta_conteudo,
    abrir_fechar_faq,
    abrir_menu_resp,
    fechar_menu_resp
} from '../app/funcionalidade.js';




/*                   --------------------                     */

/*################### ESCUTA DE EVENTOS  ######################*/


/*Apresentar conteudos conforme clicados no indice*/
for (let item of lista_indice){
    item.addEventListener("click", apresenta_conteudo);
}


/*Abrir o menu responsivo*/
icon_menu_abrir_resp.addEventListener("click", abrir_menu_resp)
icon_menu_abrir_resp.addEventListener("touchstart", abrir_menu_resp)


/*Fechar o menu responsivo*/
icon_menu_fechar_resp.addEventListener("click", fechar_menu_resp)
icon_menu_fechar_resp.addEventListener("touchstart", fechar_menu_resp)


/* Abrir itens da faq
Ao clicar no elemento dt, o próximo elemento dd deve ser apresentado ao usuário */
for (let item of tema_faq) {
    item.addEventListener("click", abrir_fechar_faq)
}



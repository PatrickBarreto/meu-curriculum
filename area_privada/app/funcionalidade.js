
import {lista_conteudo, header, tema_faq, descricao_faq, lista_indice} from '../app/dados.js';
 
//Descer em um nível de abstração

function retorna_id (e) {
    let id= e.target.id;
    return id
}

function style_opcao_selecionada (e) {

    let item = (e.target.classList.contains("item-indice")) ? e.target : e.path[1];
    let lista = lista_indice;

        for (let i of lista){
            if (i.classList.contains("abrir")){
                i.classList.remove("abrir");
                i.style.backgroundColor="transparent";
                i.style.borderTopLeftRadius="25px";
                i.style.borderBottomLeftRadius="25px";
                i.style.padding="10px 0px 10px 30px";
                i.style.color="white";
                i.style.padding= "0px";
                i.style.margin= "30px 0px";
                
            } 
        }
        if (item) {
            item.classList.add("abrir");
            item.style.backgroundColor="white";
            item.style.borderTopLeftRadius="25px";
            item.style.borderBottomLeftRadius="25px";
            item.style.padding="10px 0px 10px 30px";
            item.style.color="black";
            //item.style.boxShadow= "4px 5px 13px rgb(195, 195, 255)";
        }
}

function altera_display (id) {

    //Aqui eu posso colocar para incluir uma classe aberto e fechado, fazendo com que abra ou seja se houver

    let conteudo = retorna_conteudo();    

    for (let item of conteudo){
        item.style.display = "none";

            //Preciso que ao clicar em 2 opções, a mais antiga seja desmarcada.
    }

    switch (id){

        case "id": 
            if(conteudo[0].style.display == "" || conteudo[0].style.display == "none"){
                for (let item in conteudo){
                    conteudo[item].style.display = "none";
                }
                conteudo[0].style.display="block";

            }else if(conteudo[0].style.display == "block"){
                conteudo[0].style.display="none";
            }
            break;

        case "port": 
            if(conteudo[1].style.display == "" || conteudo[1].style.display == "none"){
                conteudo[1].style.display="block";

            }else if(conteudo[1].style.display == "block"){
                conteudo[1].style.display="none";
            }
            break;
        case "obj": 
            if(conteudo[2].style.display == "" || conteudo[2].style.display == "none"){
                conteudo[2].style.display="block";

            }else if(conteudo[2].style.display == "block"){
                conteudo[2].style.display="none";
            };
            break;
        case "curs": 
            if(conteudo[3].style.display == "" || conteudo[3].style.display == "none"){
                conteudo[3].style.display="block";

            }else if(conteudo[3].style.display == "block"){
                conteudo[3].style.display="none";
            };
            break;
        case "form": 
            if(conteudo[4].style.display == "" || conteudo[4].style.display == "none"){
                conteudo[4].style.display="block";

            }else if(conteudo[4].style.display == "block"){
                conteudo[4].style.display="none";
            };
            break;
        case "exp":  
            if(conteudo[5].style.display == "" || conteudo[5].style.display == "none"){
                conteudo[5].style.display="block";

            }else if(conteudo[5].style.display == "block"){
                conteudo[5].style.display="none";
            };
            break;
        case "comp": 
            if(conteudo[6].style.display == "" || conteudo[6].style.display == "none"){
                conteudo[6].style.display="block";

            }else if(conteudo[6].style.display == "block"){
                conteudo[6].style.display="none";
            };
    }
    }



/////////////





// Manter aqui
function retorna_conteudo () {
    let conteudo = [];

    for (let item of lista_conteudo) {
        conteudo.push(item);
    }

    return(conteudo);
}

function apresenta_conteudo (e){
    
    let indice_id = retorna_id(e)
    altera_display(indice_id);
    style_opcao_selecionada (e);
  
}

function abrir_fechar_faq (e) {
    
    let item = (e.target.classList.contains("tema-faq")) ? e.target : e.path[1];
    let descricao = item.nextElementSibling;

    if (descricao.classList.contains("abrir")){
        descricao.classList.remove("abrir");
        descricao.style.maxHeight = "0vh";
        descricao.style.transition= "max-height 1s";
        item.style.backgroundColor= "rgb(255, 255, 255)";
        item.style.borderBottomLeftRadius= "10px";
        item.style.borderBottomRightRadius= "10px";
    
    } else {
        descricao.classList.add("abrir")
        descricao.style.maxHeight = "500px";
        descricao.style.transition= "max-height 1s";
        item.style.backgroundColor= "rgb(242, 242, 242)"
    }
    
}

function abrir_menu_resp(){
    header.style.display="block";
}

function fechar_menu_resp(){
    header.style.display="none";
}


/*function abrir_menu_resp_tela (){
    let largura = window.innerWidth
        largura = document.documentElement.clientWidth;
        largura = document.body.clientWidth;
        console.log(largura)

        if (largura < 780){
            header.setAttribute("display","block");

        }
    console.log(largura)
}
*/


export 
{
    retorna_id,
    retorna_conteudo,
    altera_display,
    apresenta_conteudo,
    abrir_fechar_faq,
    abrir_menu_resp,
    fechar_menu_resp,
}
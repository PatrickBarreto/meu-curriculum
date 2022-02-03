<?php
    session_start();
    if (!isset($_SESSION["id_usuario"])){
        header("location: ../index.php");
    }
?>
<?php
    require_once '../classes/usuarios.php';
    $usuario = new Usuario();

    require_once '../classes/privado.php';
    $host = new host();

    //USAR EM LOCALHOST $usuario->conectar("Cadastro", "localhost", "root", $host->getSenha("localhost"));
    /*USAR NO HOST*/ $usuario->conectar("immobe65_Cadastro", "localhost", "immobe65_patrick", $host->getSenha("host"));
                

?>
<?php
    $id= $_SESSION["id_usuario"];
    $retorno = $usuario->consultar($id); // Guardo aqui os dados cadastrados para usar na página.
?>




<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curriculum Patrick D. Barreto</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="./style-responsivo.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    
    </head>

    <body>
    
        <main>

            <header>
                <div id="indice">
                    <img class="responsivo" id="fechar-menu" src="./img/x-branco.png" alt="fechar-menu">
                    <ul id="lista-indice">
                        <li class="item-indice abrir" id="id">
                            Sobre
                        </li>

                        <li class="item-indice" id="port">
                            Portfólio
                        </li>
                        
                        <li class="item-indice" id="obj">
                            Objetivo
                        </li>
                        
                        <li class="item-indice" id="curs">
                            Cursos
                        </li>

                        <li class="item-indice" id="form">
                            Formação
                        </li>

                        <li class="item-indice" id="exp">
                            Experiências
                        </li>

                        <li class="item-indice" id="comp">
                            Competências
                        </li>
                    </ul>

                    <small>
                        V-1.1
                    </small>
                </div>
            </header>

            <div id="super-h1">
                <img class="responsivo" id="abrir-menu" src="./img/menu-3.svg" alt="abrir-menu">
            </div>
            
            <section id="conteudo">

                <section id="identificacao">
                    <div id="apresentacao">
                    
                    
                        <script>
                        //    alert( "<?php echo "Olá ". $retorno["nome"].". Seja bem vindo(a)!";?>")
                        </script>
                    
                        <h2> 
                            Patrick Direito Barreto
                        </h2>
                        <ul>
                            <li>
                                <a class="logo-social" href="https://www.linkedin.com/in/patrick-barreto-5b057b1b9" target="_blank"> <img class="logo-social" src="./img/logo-linkedin.png" alt="Linkedin"> </a>
                                <a class="logo-social" href="https://github.com/PatrickBarreto" target="_blank"> <img class="logo-social" src="./img/logo-github.png" alt="GitHub"> </a>
                                <br>
                                <a href="https://drive.google.com/file/d/1u8dK5sbHbqMrW9EPK7I2UN4zVOnAMUXn/view?usp=sharing" target="_blank"> Curriculum em PDF </a>
                            </li>
                        </ul>
                    </div>
                    
                    <dl id="sobre-mim">
                        <div>
                            <dt class="tema-faq">
                                <p>Quem sou eu</p>
                                <img class="seta-baixo"src="img/seta-baixo.png"/>
                            </dt>
                            <dd class="descricao-faq">
                                <p>
                                    A tecnologia sempre despertou curiosidade em mim... mas iniciei minha vida profissional aos 21 anos 
                                    como corretor de imóveis com intuito de aprender vendas,naquele momento de vida vender era algo mais
                                    necessário.
                                </p>
                                <p>
                                    Um ano depois abri minha própria imobiliária, empresa que gerenciei desde então e que motivou minha
                                    entrada no mundo da programação.
                                </p>
                            </dd>
                        </div>
                        
                        <div>
                            <dt class="tema-faq">
                                <p>Minha entrada na tecnologia</p>
                                <img class="seta-baixo"src="img/seta-baixo.png"/>
                            </dt>
                            <dd class="descricao-faq">
                                <p>
                                    No final de 2018, quando a empresa praticamente faliu, fiquei com mais R$ 30.000,00 em dívidas e necessitava fazer dinheiro
                                    mesmo sem a estrutura física. Para digitalizar a Immobe me vi na necessidade de aprender algo completamente novo em relação
                                    ao que fiz por anos. 
                                </p>
                                <p>
                                    Após mudanças no negócio, foi necessário aprender a vender por Landing Pages, e em seguida saber como anunciar. 
                                    Foi quando precisei aprender Google Ads e por consequência, Google Tag Manager, Google Analytics e outras tecnologias.
                                </p> 
                            </dd>
                        </div>

                        <div>
                            <dt class="tema-faq">
                                <p>Porque resolvi me aprofundar na programação</p>
                                <img class="seta-baixo"src="img/seta-baixo.png"/>
                            </dt>
                            <dd class="descricao-faq">
                                <p>
                                    Em 2020, trocando de CMS onde criava o site eu comecei a mexer mais no HTML e no CSS do código fonte. Para anúncios mais profissionais comecei
                                    a entender mais a fundo os eventos WEB através do Google Tag Manager. 
                                </p>
                                <p>
                                    Por vontade de alcançar a liberdade que a programação possui, aproveitei a Black Friday de 2020 e assinei o DevMedia. Comecei a estudar e não parei
                                    desde então.
                                </p>
                            </dd>
                        </div>
 
                        <div>
                            <dt class="tema-faq">
                                <p>Minha trilha na programação</p>
                                <img class="seta-baixo"src="img/seta-baixo.png"/>
                            </dt>
                            <dd class="descricao-faq">
                                <p>
                                    Comecei pela base, lógica de programação e algoritmos, tema que muito me interessa.
                                </p>
                                <p>
                                    Em seguida estudei o Javascript e criei mini-sistemas sem interface, rodando no terminal pelo Node.js, inclusive, um muito útil
                                    que fiz foi o de prever o lucro líquido estimado, de acordo com o valor investido no Marketing.
                                </p>
                                <p>
                                    Em seguida estudei o HTML, CSS, PHP, entre outras tecnologias que estão descritas na aba cursos.
                                </p>
                            </dd>
                        </div>

                        <div>
                            <dt class="tema-faq">
                                <p>O que já fiz e o que faço</p>
                                <img class="seta-baixo"src="img/seta-baixo.png"/>
                            </dt>
                            <dd class="descricao-faq">
                                <p>
                                    Atualmente estou cursando Analise e Desenvolvimento de Sistemas, trabalhando no site da Immobe com simuladores, integrações de API, área de clientes, área de parceiros,
                                    entre outras funcionalidade com intuito de treinar ao máximo meu conhecimento e evoluir cada dia mais!
                                </p>
                            </dd>
                        </div>
                    </dl>
                    
                </section> 

                <section id="portfolio">
                    <div>
                        <h2>
                            Portfólio
                        </h2>

                        <p id="curriculum">
                            <a href="https://github.com/PatrickBarreto/meu-curriculum" target="_blank"> Código deste Curriculum </a>
                            <br>
                            <small>Obs: Em fase de ajustes finais, e refatoração.
                            </small>
                        </p>
                    </div>

                    <div class="ctd">
                        <ol type="1">

                            <li id="app_comercial">

                                <a href="https://querotambem.com/portfolio/app-comercial" target="_blank"> App Comercial </a>
                                <div>
                                    <a href="https://github.com/PatrickBarreto/app_agente_comercial" target="_blank"> Link do código </a>
                                </div>
                                <small>
                                    A função é auxiliar o agente de vendas em negociação comercial. A adição de novos cálculos é feita conforme 
                                    demanda, motivo de existir apenas um por enquanto.
                                </small>
                            </li>

                            <li id="site-immobe">
                                <a href="https://querotambem.com/portfolio/immobe/corban/consorcio/imovel" target="_blank"> Site Immobe </a>
                                <br>
                                <small>Obs: Ainda está em desenvolvimento. Navegue pelo rodapé se estiver de um celular ou tablet.</small>
                            </li>

                            <li id="estimador-ROI">
                                <a href="https://querotambem.com/portfolio/estimar-roi/" target="_blank">Estimativa de ROI em vendas</a>
                                <div>
                                    <a href="https://github.com/PatrickBarreto/estimar-ROI" target="_blank"> Link do código </a>
                                </div>
                            </li>

                            <li id="simulador-consorcio">
                                <a href="https://querotambem.com/portfolio/sistema-consorcio" target="_blank"> Simulador do Melhor Plano </a>
                                <div>
                                    <a href="https://github.com/PatrickBarreto/simulador-consorcio" target="_blank"> Link do código </a>
                                </div>
                                <small>
                                    O objetivo desse item do portfólio não é o layout nem experiência de uso, é o trabalho lógico.
                                </small>
                            </li>

                            <li id="consulta_cep">
                                <a href="https://querotambem.com/portfolio/consulta-cep/" target="_blank"> Consulta de CEP de ruas com API viaCEP </a>
                                <div>
                                    <a href="https://github.com/PatrickBarreto/consulta_cep_rua" target="_blank"> Link do código </a>
                                </div>
                            </li>

                            <li id="curriculum">
                                <a href="https://github.com/PatrickBarreto/api-com-node" target="_blank"> Código da API Frase do dia </a>
                                <br>
                                <small>Retorna a frase do dia de acordo com dia do mês. O projeto cria a API com express rodando local na porta 8080.
                                </small>
                            </li>
                            
                        
                        </ol>
                    </div>
                </section>

                <section id="objetivo">
                    <div>
                        <h2> 
                            O Objetivo
                        </h2>
                    </div>

                    <div class="ctd">
                        <p>
                            Busco integrar o time de desenvolvimento como programador júnior que almeja o desenvolvimento Full Stack.
                            Irei imergir por completo nos projetos e tecnologias que a empresa precisar para cumprir com os objetivos.
                        </p>
                        <p>
                            Almejo expandir meu conhecimento como programador. Para isso eu preciso de um time com pessoas que eu
                            possa aprender constantemente e ensinar sempre o que eu souber.
                        </p>
                    </div>
                </section>

                <section id="cursos"> 
                    <div>
                        <h2>
                            Cursos
                        </h2>
                    </div>

                    <div class="ctd">
                        <ol type="1">
                            <li>
                                Lógica de Programação e Algoritmos - <a href="https://www.devmedia.com.br/certificado/tecnologia/algoritmo/patrick-125"> Certificado </a>
                            </li>
                            <li>
                                Algoritmo, Diagrama de blocos e Português estruturado – 29a edição do Livro Curso Algoritmos, escrito por Algoritmos José Augusto N. G. Manzano e Jayr Figueiredo de Oliveira (2020)

                            </li>
                            <li>
                                Levantamento de Requisitos - <a href="https://www.devmedia.com.br/certificado/tecnologia/levantamento-de-requisitos/patrick-125"> Certificado </a>
                            </li>
                            <li>
                                Javascript  - <a href="https://www.devmedia.com.br/certificado/tecnologia/javascript/patrick-125"> Certificado </a>
                            </li>
                            <li>
                                React Js  - <a href="https://www.devmedia.com.br/certificado/tecnologia/react/patrick-125"> Certificado </a>
                            </li>
                            <li>
                                HTML 5 - <a href="https://www.devmedia.com.br/certificado/tecnologia/html/patrick-125"> Certificado </a>
                            </li>
                            <li>
                                CSS 3 – <a href="https://www.devmedia.com.br/certificado/tecnologia/css/patrick-125"> Certificado </a>
                            </li>
                            <li>
                                PHP – <a href="https://www.devmedia.com.br/certificado/tecnologia/php/patrick-125"> Certificado </a>
                            </li>
                            <li>
                                NodeJs (básico)- <a href="https://www.devmedia.com.br/certificado/tecnologia/node-js/patrick-125"> Certificado </a>
                            </li>
                            <li>
                                Arquitetura REST – <a href="https://www.devmedia.com.br/certificado/tecnologia/rest/patrick-125"> Certificado </a>
                            </li>
                            <li>
                                Versionamento de código com GIT – <a href="https://www.devmedia.com.br/certificado/tecnologia/git/patrick-125"> Certificado </a>
                            </li>
                            <li>
                                API`s da WEB – Praticando e pesquisando
                            </li>
                            <li>
                                Padrão MVC – <a href="https://www.devmedia.com.br/certificado/tecnologia/mvc/patrick-125"> Certificado </a>
                            </li>
                            

                            <h3> 
                                Passos Atuais
                            </h3>

                            <li>
                                POO – Pesquisando e estudando
                            </li>
                            <li>
                                SQL –  Pesquisando estudando e praticando 
                            </li>
                        
                            <h3> 
                                Próximos passos 
                            </h3>

                            <li>
                                Complexidade de Algoritmos –  (2022)
                            </li>
                            <li>
                                Cloud - (2022)
                            </li>
                            <li>
                                Docker - (2022)
                            </li>
                            

                            <h3> 
                                Além da programação
                            </h3>

                            <li>
                                Inglês escrito básico/intermediário – Cultura Inglesa (2013)
                            </li>
                            <li>
                                Gestão de tráfego Google  – Udemy (2019 a 2020)
                            </li>
                            <li>
                                Análise de métricas – Udemy  (2020)
                            </li> 
                            <li>
                                Google Tag Manager  – Udemy (Início de 2021)
                            </li>
                        </ol>
                    </div>
                </section>

                <section id="formacao">
                    <div>
                        <h2>
                            Formação
                        </h2>
                    </div>

                    <div class="ctd">

                        <p>
                            CURSANDO - - Análise e Desenvolvimento de Sistemas (1º período) - Estácio
                        </p>
                        <ol type="1">
                            <li>
                                Direito (até o 6º período de Graduação) – UCAM (2011)
                            </li>
                            <li>
                                Técnico de Transações Imobiliárias – CAPRI (2015)
                            </li>
                            <li>
                                Perito Avaliador Judicial de Imóveis – SINDIMÓVEIS-RJ  (2016)
                            </li> 
                            <li>
                                Correspondente Bancário do Brasil – FEBRABAN  (2020)
                            </li>
                        </ol>
                    </div>

                </section>
                
                <section id="experiencia"> 
                    <div>
                        <h2>
                            Experiências Profissionais
                        </h2>
                    </div>

                    <div class="ctd">
                        <ol>
                            <h3> De acordo com função desejada </h3>

                            <li>
                                Gerenciei o Site institucional e Landing Pages de venda na Immobe (Final de 2017 até 2021)
                            </li>
                            <li>
                                Gerenciei automação de marketing e processos na Immobe com Zapier e Planilhas Google como Banco de Dados Relacional(Março de 2019 a início de 2020)
                            </li>
                            <li>
                                Gerenciei a automação de e-mail marketing e fluxo de contratação de serviços na Immobe com Active Campaign (2021)
                            </li>
                            <li>
                                Programo atualmente para as necessidades na Immobe (meados de 2021 até hoje)
                            </li>

                            <li>
                                Projeto OneTap: Junto com minha irmã que produzia os cartões digitais clicáveis no Corel, criei um fluxo de pedido automatizando 
                                o TypeForm ao Trello via Zapper. Ao concluir um pedido no Typeform pelo site, um cartão era criado no Trello. Ao ser movido,
                                ações eram tomadas até chegar na fase final. Ao chegar, já disparava um e-mail e enviando o pedido ao cliente e atualizava o pedido 
                                no Planilhas Google.

                                <p>
                                    Foi meu primeiro contato com automação de processos desse modo. Foi bem legal enquanto durou.
                                </p>
                            </li>

                            <h3> Outras experiências profissionais </h3>

                            <li>
                                Corretor de imóveis na Habitare Imobiliária (2014)
                            </li>
                            <li>
                                Corretor de imóveis na Immobe (2015 a inicio de 2017)
                            </li>
                            <li>
                                Administrador de contratos de locação na Immobe (início de 2018 até meados de 2019)
                            </li>
                            <li>
                                Gestor de empresa na Immobe (2016 até 2021)
                            </li>
                            <li>
                                Gestor de tráfego pago Google na Immobe (2018 até 2021)
                            </li> 
                        </ol>
                    </div>
                </section> 

                <section id="competencias">
                    <div>
                        <h2>
                            Competências Pessoais
                        </h2>
                    </div>

                    <div class="ctd">
                        <ol type="1">
                            <li>
                                Solucionador de problemas.
                            </li>
                            <li>
                                Resiliente mesmo sob pressão.
                            </li>
                            <li>
                                Disciplinado e organizado.
                            </li>
                            <li>
                                Curioso com o que estou aprendendo e fazendo.
                            </li>
                            <li>
                                Sou bastante criativo.
                            </li> 
                            <li>
                                Sou otimizador.
                            </li>
                        </ol>
                    </div>
                </section>
        
            </section>

            <div id="contato">
                <div id="cta">
                    <a href="https://api.whatsapp.com/send?phone=5522997360989"> 
                        <img id="icon-cta1"src="img/wpp-icon.png"/ alt="Wpp"></a>

                    <a class="logo-social" href="tel:+5522997360989" target="_blank"> 
                        <img id="icon-cta2" src="./img/telefone.png" alt="Telefone"> </a>

                    <a class="logo-social" href="mailto:contato.patrickbarreto@gmail.com" target="_blank"> 
                        <img id="icon-cta3" src="./img/email-icon.png" alt="E-mail"> </a>
                </div>
            </div>
            
        </main>

        <script type="module" src="./app/dados.js"> </script>
        <script type="module" src="./app/app.js"> </script>
    </body>

</html>






<?php
    session_unset($_SESSION["id_usuario"]);
//    session_destroy();
?>

<?php 
    require_once './classes/usuarios.php';
    $usuario = new Usuario();
    require_once './classes/privado.php';
    $host = new host();
?>
<?php
    //Só pra saber se alguém clicou no botão
    if (isset($_POST["confirma-senha"])){
        $nome = addslashes($_POST["nome"]);
        $email = addslashes($_POST["email"]);
        $telefone = addslashes($_POST["telefone"]);
        $senha = addslashes($_POST["senha"]);
        $confSenha = addslashes($_POST["confirma-senha"]);
        //
        if(!empty($nome) && !empty($email) && !empty($telefone) && !empty($senha) && !empty($confSenha)){ //Verifica se não está vazio.            
            //USAR EM LOCALHOST $usuario->conectar("Cadastro", "localhost", "root", $host->getSenha("localhost"));
            /* USAR NO HOST*/ $usuario->conectar("immobe65_Cadastro", "localhost", "immobe65_patrick", $host->getSenha("host"));                
            if($usuario->msgErro == ""){
                if($senha == $confSenha){
                    if($usuario->cadastrar($nome, $telefone, $email, $senha)){
                        header("location: ./index.php");
                    }else{
                        ?> 
                            <div id="msg-erro">
                                <p><?php echo "Email já cadastrado";?></p>
                            </div>
                        <?php
                    }
                }else{
                    ?> 
                        <div id="msg-erro">
                            <p><?php echo "Senhas não coincidem";?></p>
                        </div>
                    <?php
                }
            }else{
                ?> 
                    <div id="msg-erro">
                        <p><?php echo "Erro". $usuario->msgErro;?></p>
                    </div>
                <?php
            }
        }else{
            ?> 
                <div id="msg-erro">
                    <p><?php echo "Preencha todos os campos";?></p>
                </div>
            <?php

        } 
    }
?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <title>Cadastrar</title>
</head>


<body id="cadastrar">

    <section id="corpo-form">
        <h1> Cadastro </h1>
        <p> Pode usar dados fictícios</p>
        <form method="POST" action="cadastrar.php">
            <input name="nome" type="text" placeholder="Nome Completo" maxlength="30"></input>
            <input name="email" type="email" placeholder="Email" maxlength="50"></input>
            <input name="telefone" type="text" placeholder="Telefone" maxlength="11"></input>
            <input name="senha" type="password" placeholder="Senha" maxlength="8"></input>
            <input name="confirma-senha" type="password" placeholder="Confirmar Senha" maxlength="8"></input>
            <input type="submit" value="Cadastrar"></input>
        </form>
            <a href="./index.php"><button id="retornar-login"> Login </button> </a>

    </section>
</body>
</html>
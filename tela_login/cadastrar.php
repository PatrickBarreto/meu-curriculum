<?php 
    require_once '../classes/usuarios.php';
    $usuario = new Usuario();
?>
<?php
    //Só pra saber se alguém clicou no botão
    if (isset($_POST["confirma-senha"])){
        $nome = addslashes($_POST["nome"]);
        $email = addslashes($_POST["email"]);
        $telefone = addslashes($_POST["telefone"]);
        $senha = addslashes($_POST["senha"]);
        $confSenha = addslashes($_POST["confirma-senha"]);
        if(!empty($nome) && !empty($email) && !empty($telefone) && !empty($senha) && !empty($confSenha)){ //Verifica se não está vazio.            
          $usuario->conectar("CADASTRO", "localhost", "root", "Pa211030!");      
            if($usuario->msgErro == ""){
                if($senha == $confSenha){
                    if($usuario->cadastrar($nome, $telefone, $email, $senha)){
                        header("location: ../tela_login/index.php");
                        echo "Cadastrado com sucesso";
                    }else{
                        echo "Email já cadastrado";
                    }
                }else{
                    echo "Senhas não coincidem";
                }
            }else{
                echo "Erro". $usuario->msgErro;
            }
        }else{
            echo "Preencha todos os campos";
        } 
    }
?>




<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css" rel="stylesheet">
    <title>Login</title>
</head>


<body id="cadastrar">

    <section id="corpo-form">
        <h1> Cadastrar Usuário </h1>
        <form method="POST" action="cadastrar.php">
            <input name="nome" type="text" placeholder="Nome Completo" maxlength="30"></input>
            <input name="email" type="email" placeholder="Email" maxlength="50"></input>
            <input name="telefone" type="text" placeholder="Telefone" maxlength="11"></input>
            <input name="senha" type="password" placeholder="Senha" maxlength="8"></input>
            <input name="confirma-senha" type="password" value="Confirmar Senha" maxlength="8"></input>
            <input type="submit" value="Cadastrar"></input>
        </form>

    </section>
</body>
</html>
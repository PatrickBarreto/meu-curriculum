<?php
    require_once '../classes/usuarios.php';
    $usuario = new Usuario();
?>
<?php
        if(isset($_POST["email"])){
            $email= addslashes($_POST["email"]);
            $senha= addslashes($_POST["senha"]);
            if(!empty($email) && !empty($senha)){
                $usuario->conectar("Cadastro", "localhost", "root", "Pa211030!");          
               if($usuario->msgErro == ""){
                echo $usuario->msgErro;
                    if($usuario->logar($email, $senha)){
                        header("location: ../area_privada/areaPrivada.php");
                    }else{
                        echo "E-mail ou senha inválidos";
                    }
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
<body id="acessar">
    <section id="corpo-form">
        <h1> Entrar </h1>
        <form method="POST" >
            <input name="email" type="email" placeholder="email" maxlength="50"></input>
            <input name="senha" type="password" placeholder="senha" maxlength="8"></input>
            <input type="submit" value="acessar"></input>
            <a href="./cadastrar.php">Cadastre-se</a>
        </form>
    </section>
</body>


<!--Ordem de criação dos arquivos
    Tela de login
    Tela de cadastro
    Banco de dados
    Classes
    Atribuir as funções das classes nas páginas

-->

</html>
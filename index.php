<?php
    require_once './classes/usuarios.php';
    $usuario = new Usuario();
    require_once './classes/privado.php';
    $host = new host;
?>
<?php
        if(isset($_POST["email"])){
            $email= addslashes($_POST["email"]);
            $senha= addslashes($_POST["senha"]);
            if(!empty($email) && !empty($senha)){
                //USAR EM LOCALHOST $usuario->conectar("Cadastro", "localhost", "root", $host->getSenha("localhost"));
                /* USAR NO HOST*/ $usuario->conectar("immobe65_Cadastro", "localhost", "immobe65_patrick", $host->getSenha("host"));
                if(!$usuario->msgErro == ""){
                    echo $usuario->msgErro;
                }else if($usuario->logar($email, $senha)){
                    header("location: ./area_privada/curriculum.php");
                }else{
                    ?>
                        <div id="msg-erro">
                            <p><?php echo "E-mail ou senha inválidos";?></p>
                        </div>
                    <?php
                }
            }else{
                ?>
                    <div id="msg-erro">
                        <?php echo "Preencha todos os campos"; ?>
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
    <title>Login</title>
</head>
<body id="acessar">
    <section id="corpo-form">
        <h1> Entrar </h1>
        <p>Se não quiser testar o cadastro no banco de dados, acesse com:</p>
        <p>email: a@gmail.com</p>
        <p>senha: 1</p>
        
        <form method="POST" >
            <input name="email" type="email" placeholder="email" maxlength="50"></input>
            <input name="senha" type="password" placeholder="senha" maxlength="8"></input>
            <input type="submit" value="acessar"></input>
            <a href="./cadastrar.php">Cadastre-se</a>
        </form>
    </section>
</body>

</html>
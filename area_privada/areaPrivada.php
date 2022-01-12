<?php
    session_start();
    if (!isset($_SESSION["id_usuario"])){
        header("location: ../tela_login/index.php");
    }
?>
<?php
    require_once '../classes/usuarios.php';
    $usuario = new Usuario();
    $sql = $usuario->conectar("CADASTRO", "localhost", "root", "Pa211030!");
?>
<?php
    $id= $_SESSION["id_usuario"];
    $retorno = $usuario->consultar($id);
?>

<h1>
    Olá <?php echo $retorno["nome"]?>.
</h1>


<?php
    session_destroy();
?>

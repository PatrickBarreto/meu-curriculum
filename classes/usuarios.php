<?php
    Class Usuario{

        private $pdo; // A variável é declarada global e private para ter acesso por todas os métodos dessa classe, todo precisam acessar o banco
        public $msgErro = "";

        public function conectar($nomedb, $host, $usuario, $senha){
            global $pdo; 
            try{
                $pdo = new PDO("mysql:dbname=$nomedb;host=$host", $usuario, $senha);
            }catch(PDOException $e){
                $msgErro= $e->getMessage();
            }catch(Exception $e){
                $msgErro= $e->getMessage();
            }
        }

        public function cadastrar($nome, $telefone, $email, $senha){
            global $pdo; 

            //Verificar se existe e-mail cadastrado no banco de dados, senão cadastrar.
                $sql = $pdo->prepare("SELECT id FROM Cadastros WHERE email= :e");
                $sql->bindValue(":e", $email);
                $sql->execute();

                if($sql->rowcount()>0){ // Aqui vejo se as ultimas 3 linhas retornaram alguma linha na tabela com o e-mail cadastrado
                    return false;
                }else{
                    $sql = $pdo->prepare("INSERT INTO Cadastros(nome, telefone, email, senha) VALUES(:n, :t, :e, :s)");
                    $sql->bindValue(":n", $nome);
                    $sql->bindValue(":t", $telefone);
                    $sql->bindValue(":e", $email);
                    $sql->bindValue(":s", md5($senha));

                    $sql->execute();

                    return true;
                }
        }

        public function logar($email, $senha){
            global $pdo;

            //Verificar se o e-mail e a senha estão cadastrados no DB.
                $sql = $pdo->prepare("SELECT id FROM Cadastros WHERE email= :e AND senha= :s");
                $sql->bindValue(":e", $email);
                $sql->bindValue(":s", md5($senha));
                $sql->execute();

            //Se cadastrado, criar uma sessão para o usuário entrar na área privada.
            //Para criar a sessão pego o id e guardo em uma variavel global da sessao. Para isso o retorno do db precisa ser um array.
                if($sql->rowCount()>0){
                    $dado = $sql->fetch(PDO::FETCH_ASSOC);
                    session_start();
                    $_SESSION['id_usuario'] = $dado['id'];
                    
                    return true;
                }else{
                    return false;
                }



        }

        public function consultar($id){
            global $pdo;
            
            $sql= $pdo->prepare("SELECT * FROM Cadastros WHERE id= :id");
            $sql->bindValue(":id", $id);
            $sql->execute();
            $res = $sql->fetch(PDO::FETCH_ASSOC);
            array_pop($res);

            return $res;
        }
    }

?>
<?php 
session_start();

require_once '../models/Connection.php';

use models\Connection as Connection;

if(isset($_POST['btnLogin'])){
    
    $login = $_POST['username'];
	$password = $_POST['password'];

    if (empty($login) or empty($password)) {

        $_SESSION['message'] = "Login ou senha inválidos!";

    }else{

        $sql = "SELECT user FROM users WHERE user= ?";
        $stmt = Connection::getConn()->prepare($sql);
        $stmt->execute([$login]);
        $row = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($row) {
            
            $password = md5($password);
            $sql = "SELECT * FROM users WHERE user =? AND password = ?";
            $stmt = Connection::getConn()->prepare($sql);
            $stmt->bindValue(1, $login);
            $stmt->bindValue(2, $password);
            $stmt->execute();
  
            if ($stmt->rowCount() == 1) {

                //Recuperando os dados do banco
                $data = $stmt->fetch(\PDO::FETCH_ASSOC);

                //Criação das sessões
                $_SESSION['logged'] = true;
                $_SESSION['user'] = $data;
                
                //Redirecionamento para a página restrita
                header('Location: ../views/dashboard.php');
            }else{
                $_SESSION['message'] = "Usuário e senha não conferem!";
                $_SESSION['error'] = true;
                header('Location: ../login.php');
            }

        }else{
            $_SESSION['message'] = "Usuário não encontrado!";
            $_SESSION['error'] = true;
            header('Location: ../login.php');
        }
    }
}
?>
<?php
session_start();
if(!isset($_SESSION['logged'])){
  header('Location: index.php');
}

require_once '../models/UserDao.php';
require_once '../models/User.php';

use models\UserDao as UserDao;
use models\User as User;

session_start();

if(isset($_POST['saveUser'])){

    $user = filter_input(INPUT_POST, 'user', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $password = md5($password);

    $newUser = new User();
    $newUser->setUserName($name);
    $newUser->setUserEmail($user);
    $newUser->setUserPassword($password);

    $userDao = new UserDao();

    if($userDao->createUser($newUser)){

		$_SESSION['message'] = "Seu cadastrado foi realizado com sucesso!";
		header('Location: ../login.php');

    }else{
        $_SESSION['message'] = "Houve um erro ao salvar seu cadastro. Por favor, tente novamente.";
        header('Location: ../register.php');
    }
}



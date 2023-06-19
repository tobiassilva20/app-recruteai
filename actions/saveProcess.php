<?php
session_start();
if(!isset($_SESSION['logged'])){
  header('Location: ../index.php');
}

require_once '../models/ProcessDao.php';
require_once '../models/Process.php';

use models\ProcessDao as ProcessDao;
use models\Process as Process;

if(isset($_POST['saveProcess'])){

    $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);

    $newProcess = new Process();
    $newProcess->setTitle($title);
    $newProcess->setDescription($description);
    var_dump($newProcess);
    $processDao = new ProcessDao();

    if($processDao->saveProcess($newProcess)){
		$_SESSION['message'] = "Processo salvo com sucesso!";
    }else{
        $_SESSION['message'] = "Houve um erro ao salvar o processo. Por favor, tente novamente.";
    }
    header('Location: ../views/dashboard.php');
}
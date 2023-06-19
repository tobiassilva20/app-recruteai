<?php
session_start();
if (!isset($_SESSION['logged'])) {
  header('Location: ../index.php');
}
require_once '../models/ProcessDao.php';
use models\ProcessDao as ProcessDao;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.98.0">
  <link rel="shortcut icon" href="#">
  <title>Envio de Instruções de Acesso</title>
  <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <meta name="theme-color" content="#712cf9">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script>
    document.write('<script src="http://' + (location.host || '${1:localhost}').split(':')[0] + ':${2:35729}/livereload.js?snipver=1"></' + 'script>')
  </script>

</head>

<body class="vh-100">
  <div class="h-100">
    <div class="row vh-100 vw-100">
      <div class="col-2">
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark vh-100">
          <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
            <image class="ms-4" src="../assets/images/user.png" style="width: 32px; height: 32px; border-radius: 50%;"></image>
            <span class="fs-6 ms-2">Olá <?php echo $_SESSION['user']['name'] ?></span>
          </a>
          <hr>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item ps-3 w-100 text-center">
              <a href="#" class="nav-link text-white tab tab active" onclick="openTab(event,'home')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                  <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146zM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5z" />
                </svg>
                Processos
              </a>
            </li>
            <li class="ps-2 w-100 text-center">
              <a href="#" class="nav-link text-white tab " onclick="openTab(event,'logs')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                  <path d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                  <path d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                </svg>
                Configurações
              </a>
            </li>
            <li class="ps-4 w-100 text-center">
              <a href="../logout.php" class="nav-link text-white tab " onclick="openTab(event,'logout')">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
                  <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z" />
                  <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z" />
                </svg>
                Sair
              </a>
            </li>
          </ul>

        </div>
      </div>
      <div class="col-md-8 align-items-center mx-auto px-5">
        <section class="content-tab h-100" id="home">
          <div class="row py-5">
            <div class="col-8 h-25">
              <a href="new.php" class="btn btn-primary"><i class="fa fa-plus"></i> Novo processo</a>
              <button class="btn btn-success mx-3"><i class="fa fa-user"></i> Candidatos</button>
            </div>
            <div class="col-12 mt-0">
              <h4 class="mt-4"> Meus processos </h4>
            </div>
            <div class="col-12 mt-0">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Ações</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                      $processDao = new ProcessDao();
                      if (!empty($processDao->getAllProcess())) {
 										
                        // Laço para exibir todos os produtos encontrados.
                       foreach ($processDao->getAllProcess() as $process) {
                  ?>
                  <tr>
                    <th scope="row"><?php echo $process['id'] ?></th>
                    <td><?php echo $process['description'] ?></td>
                    <td><a class="btn btn-primary me-3"><i class="fa fa-edit me-2"></i>Editar</a> <a class="btn btn-success"> <i class="fa fa-eye me-2"></i>Ver</a></td>
                  </tr>
                  <?php }
                      }else{
                  ?>
                    <tr><td>-</td><td>-</td><td>-</td></tr>
                  <?php
                      }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="row">

          </div>
          <!-- The Modal -->
          <div class="modal" id="myModal">
            <div class="modal-dialog">
              <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                  <h4 class="modal-title"><span class="link-danger">Warning!</span></h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  <span class="modal-body-span">The following fields cannot be empty:</span>
                  <div id="modal-one-body"></div>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

              </div>
            </div>
          </div>

          <!-- The Form Modal -->
          <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="staticBackdropLabel">Please confirm the informations.</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST">
                  <div class="modal-body" id="modal-body">
                    <div class="row px-4 mx-auto" id="row1">
                      <div class="col-6">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" readonly value="">
                      </div>
                      <div class="col-6">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" readonly value="">
                      </div>
                    </div>
                    <div class="row px-4 mx-auto pt-3" id="row2">
                      <div class="col-6">
                        <label for="cpf" class="form-label">CPF:</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" readonly value="">
                      </div>
                      <div class="col-6">
                        <label for="ava" class="form-label">Instructions for:</label>
                        <input type="text" class="form-control" id="ava" readonly value="">
                        <input type="text" id="url" name="url" readonly value="" hidden>
                        <input type="text" id="subject" name="subject" readonly value="" hidden>
                      </div>
                    </div>
                    <div class="row" style="display:none;" id="row3">
                      <div class="col-6" id="file-div">
                        <label for="file-to-save" class="form-label">CSV File:</label>
                      </div>
                      <div class="col-6">
                        <label for="ava" class="form-label">Instructions for:</label>
                        <input type="text" class="form-control" id="ava2" readonly value="">
                        <input type="text" id="url2" name="url2" readonly value="">
                        <input type="text" id="subject2" name="subject2" readonly value="">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="btn-confirm">Confirm</button>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </section>
        <section class="content-tab h-100" id="logs" style="display: none;">
          <div class="row align-items-center h-100">
            <div>
              Logs
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>

  <!--Toast -->
  <div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="toast-header">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill text-primary" viewBox="0 0 16 16">
          <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z" />
        </svg>
        <strong class="me-auto text-primary ms-2">Message</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
      </div>
      <div class="toast-body">
        <?php echo $_SESSION['message'] ?>
      </div>
    </div>
  </div>
  <script src="/assets/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/js/script.js"></script>
  <script type="text/javascript">
    <?php
    if (isset($_SESSION['message'])) {
    ?>
      showToast();
    <?php
      unset($_SESSION['url'], $_SESSION['subject'], $_SESSION['message']);
    }
    ?>
  </script>
</body>

</html>
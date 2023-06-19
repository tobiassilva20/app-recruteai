<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Criar cadastro no Recruta aí</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="assets/css/registration.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-9 mx-auto">
                <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                    <div class="card-img-left d-none d-md-flex">
                        
                        <!-- Background image for card set in CSS! -->
                    </div>
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Criar conta</h5>
                        <form action="actions/saveUser.php" method="POST">

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="myusername" required autofocus>
                                <label for="floatingInputUsername">Nome</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="user" name="user" placeholder="name@example.com">
                                <label for="floatingInputEmail">Usuário</label>
                            </div>

                            <hr>

                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Senha" required>
                                <label for="floatingPassword">Senha</label>
                            </div>

                            <!-- <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPasswordConfirm" placeholder="Repita a senha" required>
                                <label for="floatingPasswordConfirm">Confirmar senha</label>
                            </div> -->

                            <div class="d-grid mb-2">
                                <button class="btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit" name="saveUser">Register</button>
                            </div>

                            <a class="d-block text-center mt-2 small" href="login.php">Já tem cadastro? Entre</a>

                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
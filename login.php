<?php
session_start();

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recruta aí</title>
    <link rel="stylesheet" href="assets/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body">
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="vh-100 d-flex flex-column justify-content-center">
                    <div class="container-fluid h-100">
                        <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col-md-9 col-lg-6 col-xl-5">
                                <img src="assets/images/login.jpg" class="img-fluid" alt="Sample image">
                            </div>
                            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                                <form action="actions/authorization.php" method="POST">
                                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                                        <p class="lead fw-normal mb-0 me-3">Entrar na conta.</p>
                                    </div>

                                    <!-- Email input -->
                                    <div class="form-outline mb-4">
                                        <input type="email" id="form3Example3" class="form-control form-control-lg" name="username" placeholder="Ex.: email@mail.com" required />
                                        <label class="form-label" for="form3Example3">Usuário</label>
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-outline mb-3">
                                        <input type="password" id="form3Example4" class="form-control form-control-lg" name="password" placeholder="Informe a senha" required />
                                        <label class="form-label" for="form3Example4">Senha</label>
                                    </div>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- Checkbox -->
                                        <div class="form-check mb-0">
                                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                            <label class="form-check-label" for="form2Example3">
                                                Lembre-me
                                            </label>
                                        </div>
                                        <a href="#!" class="text-body">Esqueceu a senha?</a>
                                    </div>

                                    <div class="text-center text-lg-start mt-4 pt-2">
                                        <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="btnLogin">Entrar</button>
                                        <p class="small fw-bold mt-2 pt-1 mb-0">Ainda não tem uma conta? <a href="register.php" class="link-danger">Cadastre-se</a></p>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
                        <!-- Copyright -->
                        <div class="text-white mb-3 mb-md-0">
                            Copyright © 2023. Todos os direitos reservados.
                        </div>
                        <!-- Copyright -->

                        <!-- Right -->
                        <div>
                            <a href="#!" class="text-white me-4">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#!" class="text-white me-4">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#!" class="text-white me-4">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#!" class="text-white">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </div>
                        <!-- Right -->
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- Toast message -->
    <div class="toast-container position-fixed bottom-0 end-0 p-3 top-0 end-0">
        <?php
            if (isset($_SESSION['error'])) {
                if($_SESSION['error']){
                    echo "<div id='liveToast' class='toast align-items-center text-bg-danger border-0' role='alert' aria-live='assertive' aria-atomic='true'>";
                }
                
            }else{
                echo "<div id='liveToast' class='toast align-items-center text-bg-primary border-0' role='alert' aria-live='assertive' aria-atomic='true'>";
            }
        ?>
            <!-- <div id="liveToast" class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive" aria-atomic="true"> -->
            <div class="d-flex">
                <div class="toast-body">
                    <?php echo $_SESSION['message'] ?>
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>

    <footer class="fixed-bottom d-flex justify-content-center me-3 mb-3">Desenvolvido por: <a href="https://github.com/tobiassilva20">tobias_silva</a></footer>

    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function showToast() {
            const toast = new bootstrap.Toast(liveToast);
            toast.show();
        }

        <?php
        if (isset($_SESSION['message'])) {
        ?>
            showToast();
        <?php
            unset($_SESSION['message'],$_SESSION['error']);
        }
        ?>
    </script>
    </body>

</html>
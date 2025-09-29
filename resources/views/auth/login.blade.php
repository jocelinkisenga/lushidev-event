<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <title>Se connecter</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="img/favicon.png">
    <!-- Bootstrap core CSS-->
    <link href="front/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="front/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="front/css/osahan.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="front/vendor/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="front/vendor/owl-carousel/owl.theme.css">
</head>
<body class="login-main-body">
    <section class="login-main-wrapper">
        <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">
                <div class="col-md-12 p-5 bg-white full-height">
                    <div class="login-main-left">
                        <div class="text-center mb-5 login-main-left-header pt-4">
                            <img src="front/img/favicon.png" class="img-fluid" alt="LOGO">
                            <h5 class="mt-3 mb-3">Bon retour chez lushidev event</h5>
                            <p>creez, reservez et gerez vos evements<br> Vous avez une salle , un espace faites le decouvrir au monde entier </p>
                        </div>
                        <form action="{{ route("login") }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Votre email</label>
                                <input type="text" name="input_type" class="form-control" placeholder="Entrer votre email">

                            </div>
                            <div class="form-group">
                                <label>Votre mot de pass</label>
                                <input name="password" type="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="mt-4">
                                <div class="row">
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-outline-primary btn-block btn-lg">S'Authentifier</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="text-center mt-5">
                            <p class="light-gray">Vous n'avez pas de compte? <a href="{{ route("register") }}">Creer un compte</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Bootstrap core JavaScript-->
    <script src="front/vendor/jquery/jquery.min.js"></script>
    <script src="front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="front/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Owl Carousel -->
    <script src="front/vendor/owl-carousel/owl.carousel.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="front/js/custom.js"></script>
</body>

</html>

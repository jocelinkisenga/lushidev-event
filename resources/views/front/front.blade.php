<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lubumbashi event</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("main/style.css") }}">
<link rel="stylesheet" href="{{ asset("front/vendor/fontawesome-free/css/all.min.css") }}">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
@include("partials.frontnav")



    @yield('content')


<!-- /#wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Voulez-vous quitter ?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">cliquer sur se deconnecter pour quitter la session</div>
            <div class="modal-footer">
                <form action="{{ route("logout") }}" method="POST">
                    @csrf
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary" type="submit">Se deconnecter</button>

                </form>

            </div>
        </div>
    </div>
</div>
    <footer>
        <div class="container text-center">
            <p class="mb-2">&copy; 2025 SalleBooking. Tous droits réservés.</p>
            <div>
                <a href="#" class="text-light me-2"><i class="bi bi-facebook"></i></a>
                <a href="#" class="text-light me-2"><i class="bi bi-instagram"></i></a>
                <a href="#" class="text-light"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </footer>
@livewireScripts
    <script rel="stylesheet" src="{{ asset("bootstrap/js/bootstrap.min.js") }}"></script>

</body>

</html>


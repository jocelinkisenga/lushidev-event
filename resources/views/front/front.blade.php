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
<link rel="stylesheet" href="{{ asset('vendor/flasher/flasher.min.css') }}">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    @livewireStyles
</head>
<body>
    @flasher_render()
@include("partials.frontnav")

<div class="container py-5">

    @yield('content')


</div>


    <footer class=" footer sticky">
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
  <script>
      // Charger le thème stocké
      if (localStorage.getItem("theme") === "dark") {
          document.documentElement.setAttribute("data-theme", "dark");
      }

      // Fonction de bascule
      function toggleTheme() {
          let current = document.documentElement.getAttribute("data-theme");
          if (current === "dark") {
              document.documentElement.setAttribute("data-theme", "light");
              localStorage.setItem("theme", "light");
          } else {
              document.documentElement.setAttribute("data-theme", "dark");
              localStorage.setItem("theme", "dark");
          }
      }

  </script>
<script type="script" src="{{ asset("vendor/flasher.min.js") }}"></script>
</body>

</html>


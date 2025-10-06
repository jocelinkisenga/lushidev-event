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
    @if(!Route::is('login','register'))
@include("partials.frontnav")
    @endif


    @yield('content')





    <footer class=" footer mt-auto mb-0">
        <div class="container text-center">
            <p class="mb-2">&copy; 2025 L-Event. Tous droits réservés.</p>
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
  document.addEventListener("DOMContentLoaded", function() {
      // Vérifie le thème stocké dans localStorage
      const savedTheme = localStorage.getItem("theme");
      if (savedTheme) {
          document.documentElement.setAttribute("data-theme", savedTheme);
      } else {
          // Détection automatique du thème système (optionnel)
          if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
              document.documentElement.setAttribute("data-theme", "dark");
              localStorage.setItem("theme", "dark");
          } else {
              document.documentElement.setAttribute("data-theme", "light");
              localStorage.setItem("theme", "light");
          }
      }

      // Fonction de bascule
      window.toggleTheme = function() {
          let current = document.documentElement.getAttribute("data-theme");
          let newTheme = current === "dark" ? "light" : "dark";
          document.documentElement.setAttribute("data-theme", newTheme);
          localStorage.setItem("theme", newTheme);
      };
  });
</script>

<script>
function toggleTheme() {
  const navbar = document.querySelector('.navbar');
  const icon = document.getElementById('themeIcon');
  
  if(navbar.getAttribute('data-theme') === 'light') {
    navbar.setAttribute('data-theme', 'dark');
    icon.classList.remove('bi-moon-fill');
    icon.classList.add('bi-sun-fill');
    navbar.style.backgroundColor = '#212529';
    navbar.style.color = '#f8f9fa';
  } else {
    navbar.setAttribute('data-theme', 'light');
    icon.classList.remove('bi-sun-fill');
    icon.classList.add('bi-moon-fill');
    navbar.style.backgroundColor = '#f8f9fa';
    navbar.style.color = '#212529';
  }
}
</script>
<script type="script" src="{{ asset("vendor/flasher.min.js") }}"></script>
</body>

</html>


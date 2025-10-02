{{-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary sticky-top shadow-sm">
    <div class="container container-max">
        <a class="navbar-brand" href="/" wire:navigate>
            <img src="{{ asset("logo.png") }}" class="img-fluid rounded-circle" style="width:40px; height:40px" alt="logo laeken" />
            Laeken Consulting</a>
        <button type="button" class="navbar-toggler navb" data-bs-toggle="collapse" data-bs-target="#navmenu" aria-controls="navmenu" aria-expanded="false" aria-label="Toggle navigation "><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto align-items-lg-center text-white">
                <li class="nav-item"><a class="nav-link navbar-brand" style="color:white;" href="{{ route("venues") }}" wire:navigate>Les salles</a></li>


                <li class="nav-item text-white"><a class="nav-link navbar-brand" href="" style="color:white;">Blog</a></li>

                <li class="nav-item"><a style="color:white;" class="nav-link navbar-brand" href="">À propos</a></li>


                <li class="nav-item"><a style="color:white;" class="nav-link navbar-brand" href="">Contact</a></li>


                @guest
                <li class="nav-item ms-3"><a style="color:white;" class="btn btn-premium py-md-3 px-md-5 me-3 animated slideInLeft" href="{{ route("login") }}" wire:navigate>Se connecter</a></li>




                @endguest
                @auth
                @switch(Auth::user()->role)
                @case(2)
                <li class="nav-item ms-3"><a class="btn bg-white" href="{{ route("client.dasboard") }}" wire:navigate>Dashboard</a></li>
                @break
                @case(3)
                <li class="nav-item ms-3"><a class="btn bg-white" href="{{ route("owner.dasboard") }}" wire:navigate>Dashboard</a></li>
                @break
                @default
                <li class="nav-item ms-3"><a class="btn bg-white" href="/dashboard-admin" wire:navigate>Dashboard</a></li>
                @endswitch
                <li class="nav-item ms-3">
                    <form action="{{ route("logout") }}" method="post">
                        @csrf
                        <button class="btn btn-danger">se deconnecter</button>

                    </form>
                </li>

                @endauth

            </ul>
        </div>
    </div>
</nav> --}}
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
      <div class="container-fluid">
          <!-- Logo -->
          <a class="navbar-brand fw-bold text-white" href="/">
              <i class=""></i> L-Event
          </a>

          <!-- Menu -->
          <ul class="navbar-nav  mx-auto d-flex flex-row">
              <li class="nav-item">
                  <a class="nav-link active" href="/" wire:navigate>
                      <i class=" fa fa-home"></i>
                      <span class="nav-text">Accueil</span>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="{{ route("venues") }}" wire:navigate>
                      <i class="fa fa-building text-warning"></i>
                      <span class="nav-text">Salles</span>
                  </a>
              </li>
              <li class="nav-item ml-4">
                  <a class="nav-link" href="#">
                      <i class="fa fa-info-circle text-warning"></i>

                      <span class="nav-text">À propos</span>
                  </a>
              </li>
              <li class="nav-item m-lg-2">
                      <a class="" onclick="toggleTheme()"> <i class="fa fa-moon"></i></a>

              </li>
          </ul>

          <!-- Dropdown utilisateur -->
          <div class="dropdown">
              <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-user-circle fs-4"></i>
                  <span class="nav-text">Mon compte</span>
              </a>
              <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
                  <li><a class="dropdown-item" href="#">Profil</a></li>
                  <li><a class="dropdown-item" href="#">Paramètres</a></li>
                  <li>
                      <hr class="dropdown-divider">
                  </li>
                 @guest
                 <li class=""><a style="color:white;" class="btn btn-premium py-md-3 px-md-5 me-3 animated slideInLeft" href="{{ route("login") }}" wire:navigate>Se connecter</a></li>




                 @endguest
                 @auth
                 @switch(Auth::user()->role)
                 @case(2)
                 <li class=""><a class="btn bg-white" href="{{ route("client.dasboard") }}" wire:navigate>Dashboard</a></li>
                 @break
                 @case(3)
                 <li class=""><a class="btn bg-white" href="{{ route("owner.dasboard") }}" wire:navigate>Dashboard</a></li>
                 @break
                 @default
                 <li class=""><a class="btn bg-white" href="/dashboard-admin" wire:navigate>Dashboard</a></li>
                 @endswitch
                 <li class="">
                     <form action="{{ route("logout") }}" method="post">
                         @csrf
                         <button class="btn btn-danger">se deconnecter</button>

                     </form>
                 </li>

                 @endauth


              </ul>
          </div>
      </div>
  </nav>


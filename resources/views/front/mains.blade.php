@extends('front.front')
@section("content")
<div id="wrapper">
    <!-- Sidebar -->
    {{-- <ul class="sidebar navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.html">
                <i class="fas fa-fw fa-home"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="channels.html">
                <i class="fas fa-fw fa-users"></i>
                <span>Channels</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="single-channel.html">
                <i class="fas fa-fw fa-user-alt"></i>
                <span>Single Channel</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="video-page.html">
                <i class="fas fa-fw fa-video"></i>
                <span>Video Page</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="upload-video.html">
                <i class="fas fa-fw fa-cloud-upload-alt"></i>
                <span>Upload Video</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div class="dropdown-menu">
                <h6 class="dropdown-header">Login Screens:</h6>
                <a class="dropdown-item" href="login.html">Login</a>
                <a class="dropdown-item" href="register.html">Register</a>
                <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                <div class="dropdown-divider"></div>
                <h6 class="dropdown-header">Other Pages:</h6>
                <a class="dropdown-item" href="404.html">404 Page</a>
                <a class="dropdown-item" href="blank.html">Blank Page</a>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="history-page.html">
                <i class="fas fa-fw fa-history"></i>
                <span>History Page</span>
            </a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Categories</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="categories.html">Movie</a>
                <a class="dropdown-item" href="categories.html">Music</a>
                <a class="dropdown-item" href="categories.html">Television</a>
            </div>
        </li>
        <li class="nav-item channel-sidebar-list">
            <h6>SUBSCRIPTIONS</h6>
            <ul>
                <li>
                    <a href="subscriptions.html">
                        <img class="img-fluid" alt="" src="img/s1.png"> Your Life
                    </a>
                </li>
                <li>
                    <a href="subscriptions.html">
                        <img class="img-fluid" alt="" src="img/s2.png"> Unboxing <span class="badge badge-warning">2</span>
                    </a>
                </li>
                <li>
                    <a href="subscriptions.html">
                        <img class="img-fluid" alt="" src="img/s3.png"> Product / Service
                    </a>
                </li>
                <li>
                    <a href="subscriptions.html">
                        <img class="img-fluid" alt="" src="img/s4.png"> Gaming
                    </a>
                </li>
            </ul>
        </li>
    </ul> --}}
    <div id="content-wrapper">
        <div class="container-fluid pb-0">
            <div class="top-mobile-search">
                <div class="row">
                    <div class="col-md-6">
                        <form class="mobile-search">
                            <div class="input-group">
                                <input type="text" placeholder="Search for..." class="form-control">
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-dark"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="top-category section-padding mb-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                </div>
                            </div>
                            <h6>En vedette</h6>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="owl-carousel owl-carousel-category">
                            @foreach ($venues as $item)
                            <div class="item">
                                <div class="category-item">
                                    <a href="#">
                                        <img class="img-fluid" src="{{ asset("/storage/".$item->image) }}" alt="">

                                        <h6>{{ $item->title }}</h6>
                                        <p><button class="btn btn-sm btn-primary">visiter</button></p>
                                    </a>
                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            <div class="btn-group float-right right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sort by <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp; Close</a>
                                </div>
                            </div>
                            <h6>Nouvelle salle</h6>
                        </div>
                    </div>
                    {{-- featured venues --}}
                    @foreach ($venues as $venue)
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card h-100">

                            <div class="video-card-image">

                                <a href="#"><img class="img-fluid" src="{{ asset("/storage/".$venue->image)  }}" width="500" height="300" alt=""></a>

                            </div>
                            <div class="video-card-body">
                                <div class="video-title">
                                    <a href="#">{{ $venue->name }}</a>
                                </div>
                                @if ($venue->avaibility == false)
                                <div class="video-page text-success">
                                    Disponible
                                    <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>
                                @else
                                <div class="video-page text-danger">
                                    non disponible

                                    <a title="" data-placement="top" data-toggle="tooltip" href="#" data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>

                                @endif
                                <div class="video-view">
                                  <a href="{{ route("salle.single", ['title' => $venue->name, "id" => $venue->id]) }}" class="btn btn-sm btn-primary rounded">
                                    voir plus
                                    &nbsp;<i class="fas fa-plus"></i>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach
                    {{-- end featured venues --}}
                </div>
            </div>
            <hr class="mt-0">

        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-sm-6">
                        <p class="mt-1 mb-0"><strong class="text-dark">Vidoe</strong>.
                            <small class="mt-0 mb-0"><a class="text-primary" target="_blank" href="https://www.templatespoint.net/">Templates Point</a>
                            </small>
                        </p>
                    </div>
                    <div class="col-lg-6 col-sm-6 text-right">
                        <div class="app">
                            <a href="#"><img alt="" src="img/google.png"></a>
                            <a href="#"><img alt="" src="img/apple.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- /.content-wrapper -->
</div>


@endsection

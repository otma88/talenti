<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tvornica talenata</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('mdb/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('mdb/css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('mdb/css/style.css')}}" rel="stylesheet">
  </head>
<body>
    <div id="app">
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-0">
        <div class="container">
          <!-- Navbar brand -->
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('mdb/images/logo.png')}}" alt="">
          </a>

          <!-- Collapse button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
              aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

          <!-- Collapsible content -->
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

              <!-- Links -->
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <a class="nav-link mr-3" href="{{ route('audicije-i-poslovi') }}"><strong>Audicije & poslovi</strong></a>
                  </li>
                  <li class="nav-item mr-3">
                      <a class="nav-link" href="{{ route('talenti') }}"><strong>Talenti</strong></a>
                  </li>
                  <li class="nav-item mr-3">
                      <a class="nav-link" href="{{ route('clanstvo') }}"><strong>Članstvo</strong></a>
                  </li>
                  <li class="nav-item mr-3">
                      <a class="nav-link" href="{{ route('novosti') }}"><strong>Novosti</strong></a>
                  </li>
                  <li class="nav-item mr-3 pt-1">
                      <img src="{{ asset('mdb/images/Line.png')}}" alt="">
                  </li>
                  <!-- Buttons -->
                  @guest
                    <li>
                      <a href="{{ route('login') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-sign-in mr-1"></i>Prijava</button></a>
                    </li>
                    <li>
                      <button class="btn btn-primary btn-sm"><i class="fa fa-user mr-1"></i>Registracija</button>
                    </li>
                  @else
                  <li class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                          {{ Auth::user()->name }} <span class="caret"></span>
                      </a>

                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                              {{ __('Logout') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </li>
                 @endguest
              </ul>
              <!-- Links -->
          </div>
          <!-- Collapsible content -->
        </div>
      </nav>
      <!--/.Navbar-->

<!--       <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">

                    </ul>


                    <ul class="navbar-nav ml-auto">

                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>  -->

    </div>
        <main class="py-4">
            @yield('content')
        </main>


        <!--Footer-->
      <footer class="page-footer center-on-small-only mt-0 bg-secondary">

          <!--Footer Links-->
          <div class="container">
              <div class="row">

                  <!--First column-->
                  <div class="col-md-4">
                      <h5 class="title mb-4 mt-3 font-bold">Naša Misija</h5>
                      <p>Misija je svim našim talentima osigurati najbolju uslugu promocije kako bi njihov talent došao do onih koji traže izvrsnost baš u njihovom području, a poslodavcima dostupnost i visokokvalitetan prikaz talenata i njihovih vještina kako bi oni postali dio njihovog poslovnog okruženja.</p>
                  </div>
                  <!--/.First column-->

                  <hr class="clearfix w-100 d-md-none">

                  <!--Second column-->
                  <div class="col-md-2 mx-auto">
                      <h5 class="title mb-4 mt-3 font-bold">O nama</h5>
                      <ul>
                          <li><a href="#!">Tko smo?</a></li>
                          <li><a href="#!">Naša vizija</a></li>
                          <li><a href="#!">Link 3</a></li>
                          <li><a href="#!">Link 4</a></li>
                      </ul>
                  </div>
                  <!--/.Second column-->

                  <hr class="clearfix w-100 d-md-none">

                  <!--Third column-->
                  <div class="col-md-2 mx-auto">
                      <h5 class="title mb-4 mt-3 font-bold">Savjeti i pomoć</h5>
                      <ul>
                          <li><a href="#!">Kako koristiti portal?</a></li>
                          <li><a href="#!">Talenti</a></li>
                          <li><a href="#!">Poslodavci</a></li>
                          <li><a href="#!">Članstvo</a></li>
                      </ul>
                  </div>
                  <!--/.Third column-->

                  <hr class="clearfix w-100 d-md-none">

                  <!--Fourth column-->
                  <div class="col-md-2 mx-auto">
                      <h5 class="title mb-4 mt-3 font-bold ">Uvjeti korištenja</h5>
                      <ul>
                          <li><a href="#!">Uvjeti</a></li>
                          <li><a href="#!">Polica privatnosti</a></li>
                          <li><a href="#!">Link 3</a></li>
                          <li><a href="#!">Link 4</a></li>
                      </ul>
                  </div>
                  <!--/.Fourth column-->
              </div>
          </div>
          <!--/.Footer Links-->

          <hr>

          <!--Call to action-->
          <div class="call-to-action">
              <ul>
                  <li>
                      <h5 class="mb-1">Registriraj se!</h5>
                  </li>
                  <li><a href="" class="btn btn-danger btn-rounded">Registracija</a></li>
              </ul>
          </div>
          <!--/.Call to action-->

          <hr>

          <!--Social buttons-->
          <div class="social-section text-center">
              <ul>

                  <li><a class="btn-floating btn-sm btn-fb"><i class="fa fa-facebook"> </i></a></li>
                  <li><a class="btn-floating btn-sm btn-tw"><i class="fa fa-twitter"> </i></a></li>
                  <li><a class="btn-floating btn-sm btn-gplus"><i class="fa fa-google-plus"> </i></a></li>
                  <li><a class="btn-floating btn-sm btn-li"><i class="fa fa-linkedin"> </i></a></li>
                  <li><a class="btn-floating btn-sm btn-dribbble"><i class="fa fa-dribbble"> </i></a></li>

              </ul>
          </div>
          <!--/.Social buttons-->

          <!--Copyright-->
          <div class="footer-copyright">
              <div class="container-fluid">
                  © 2017 Sva prava pridržana: <a href="https://www.MDBootstrap.com"> tvornica-talenata.com </a>

              </div>
          </div>
          <!--/.Copyright-->

      </footer>
      <!--/.Footer-->


  <!--Main Layout-->
  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{asset('mdb/js/jquery-3.2.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('mdb/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('mdb/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('mdb/js/mdb.min.js')}}"></script>
</body>
</html>

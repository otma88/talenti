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
    <!-- CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
  </head>
<body>
    <div id="app">
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-0">
        <div class="container">
          <!-- Navbar brand -->
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('mdbo/images/logo.png')}}" alt="">
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
                      <img src="{{ asset('mdbo/images/Line.png')}}" alt="">
                  </li>
                  <!-- Buttons -->
                  @guest
                    <li>
                      <a href="{{ route('login') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-sign-in mr-1"></i>Prijava</button></a>
                    </li>
                    <li>
                      <a href="{{ route('register') }}"><button class="btn btn-primary btn-sm"><i class="fa fa-user mr-1"></i>Registracija</button></a>
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


    </div>
        <main>


            @yield('content')



        </main>


        <!-- Footer -->
  <footer class="page-footer font-small bg-primary pt-4">

      <!-- Footer Links -->
      <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4 mx-auto">

            <!-- Content -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
            <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
              adipisicing elit.</p>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

            <ul class="list-unstyled">
              <li>
                <a href="#!">Link 1</a>
              </li>
              <li>
                <a href="#!">Link 2</a>
              </li>
              <li>
                <a href="#!">Link 3</a>
              </li>
              <li>
                <a href="#!">Link 4</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <hr>

      <!-- Call to action -->
      <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
          <h5 class="mb-1">Register for free</h5>
        </li>
        <li class="list-inline-item">
          <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
        </li>
      </ul>
      <!-- Call to action -->

      <hr>

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fa fa-facebook"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fa fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fa fa-google-plus"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fa fa-linkedin"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fa fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2018 Copyright:
        <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
      </div>
      <!-- Copyright -->

  </footer>
  <!-- Footer -->


  <!--Main Layout-->
  <!-- SCRIPTS -->
  <!-- MDB -->
  <script type="text/javascript" src="{{asset('mdbo/js/jquery-3.3.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('mdbo/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('mdbo/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('mdbo/js/mdb.js')}}"></script>
</body>
</html>

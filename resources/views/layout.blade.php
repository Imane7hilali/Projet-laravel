 <!DOCTYPE html>
<html>
<head>
  <title>Last project</title>
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="{{url('css/style.css')}}">
</head>
<body>
<div class="navbar0">
<nav class="navbar navbar-expand-md">
  @guest
 <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('register')}}">S'inscrire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('login')}}">Se connecter</a>
            </li>
        </ul>
    </div>
  @endguest
  @auth
  <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a href="#">{{Auth::user()->name}}</a>
          </li>
          <li class="#">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
          </li>
        </ul>
    </div>
  @endauth
 </nav>
</div>
<div class="navbar1">
<nav class="navbar navbar-expand-sm justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{url('hébergements')}}"><i class="fa fa-home"></i> Hébergements</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('vols')}}"><i class="fa fa-plane"></i> Vols</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{url('voiture_de_location')}}"><i class="fa fa-car" aria-hidden="true"></i> Voiture de location</a>
    </li>
    <li class="nav-item">
      <a href="{{URL('contact')}}" class="nav-link">Contact</a>
    </li>
    @auth
    @if(Auth::user()->isAdmin == "1") 
    <li class="nav-item">
      <a href="{{url('admin/hotel')}}" class=" nav-link">Admin Panel</a>
    </li>
    @endif
    @endauth
  </ul> 
</nav>
</div>
<br><br> 
<div class="container">
    @yield('content')
</div>
    
</body>
</html>
 
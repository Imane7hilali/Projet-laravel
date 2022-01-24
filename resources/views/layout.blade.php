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
 <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('login')}}">S'inscrire</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('register')}}">Se connecter</a>
            </li>
        </ul>
    </div>
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
  </ul> 
</nav>
</div>
<br><br> 
<div class="container">
    @yield('content')
</div>
    
</body>
</html>
 
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::to('css/admin.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Admin Panel</title>
</head>

<body>
    <nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar">
        <a href="#" class="navbar-brand text-light mt-5">
            <div class="display-5 font-weight-bold">Admin</div>
        </a>
        <ul class="navbar-nav d-flex flex-column mt-5 w-100">
            <li class="nav-item w-100">
            <a href="{{URL('admin/hotel')}}" class="nav-link text-light pl-4 ">Hotels</a>
            </li>
            <li class="nav-item w-100">
            <a href="{{URL('admin/user')}}" class="nav-link text-light pl-4">Users</a>
            </li>
            <li class="nav-item w-100">
            <a href="{{URL('admin/chalet')}}" class="nav-link text-light pl-4">chalets</a>
            </li>
            <li class="nav-item w-100">
            <a href="{{URL('admin/riad')}}" class="nav-link text-light pl-4">riads</a>
            </li>
            <li class="nav-item w-100">
            <a href="{{URL('admin/appartement')}}" class="nav-link text-light pl-4">Appartements</a>
            </li>
            <li class="nav-item w-100">
            <a href="{{URL('admin/villa')}}" class="nav-link text-light pl-4">villas</a>
            </li>
            <li class="nav-item w-100">
            <a href="{{URL('admin/reserver')}}" class="nav-link text-light pl-4">Reservations</a>
            </li>
            <li class="nav-item dropdown w-100" >
                <a href="#" class="nav-link dropdown-toggle text-light pl-4" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" >{{Auth::user()->name}}</a>
                <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                    <li><a href="{{URL('admin/profile')}}" class="dropdown-item text-light pl-4 p-2">Profile</a></li>
                    <li><a href="{{URL('admin/message')}}" class="dropdown-item text-light pl-4 p-2">Messages</a></li>
                    <li><a class="dropdown-item text-light pl-4 p-2" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                        </li>
                </ul>
            </li>
            <li class="nav-item w-100">
                            <a href="{{URL('/')}}" class="nav-link text-light pl-4">return</a>
                        </li>
        </ul>
    </nav>
    <section class="p-4 content">
        <button class="btn " id="menu-btn">Menu</button>
        @yield('admincontent')
        @yield('Usercontent')
    </section>

<script src="/js/app.js"></script>
<script src="/js/admin.js"></script>
</body>

</html>
@auth
<nav class="nav">
            <menu class="menu-dashboard">
                <div class="form-group">
                    <img class="mask" src="{{ asset('images'). '/' . Auth::user()->photo }}" alt="Photo">
                    <img class="border" src="{{asset('images/shape-border-photo.svg')}}" alt="Border">
                </div>
                <h4 class="nombre-user">{{ Auth::user()->fullname}}</h4>
                <div class="admon">
                    <img src="{{asset('images/ico-admin-signin.svg')}}" alt="my-profile">
                    <h1>{{ Auth::user()->role }}</h1>
                </div>
                <a class="profile" href="{{ url('myprofile')}}">
                    <img src="{{asset('images/ico-myprofile.svg')}}" alt="my-profile">
                    My Profile
                </a>
                <a href="{{ url('dashboard')}}">
                    <img src="{{asset('images/ico-dashboard.svg')}}" alt="dashboard">
                    Dashboard
                </a>
                <a href="javascript:;" onclick="logout.submit()">
                    <img src="{{asset('images/ico-log-out.svg')}}" alt="log-out">
                    Log Out
                </a>
                <form id="logout" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
            </menu>
        </nav>
        @endauth

        @guest
        <nav class="nav">
            <img src="images/title-menu.svg" alt="Menu" class="title-menu">
            <menu>
                <a href="{{url('login')}}">
                    <img src="{{asset('images/ico-login.svg')}}" alt="Login">
                    Login
                </a>
                <a href="{{url('register')}}">
                    <img src="{{asset('images/ico-register.svg')}}" alt="Register">
                    Register
                </a>
                <a href="{{url('catalogue')}}">
                    <img src="{{asset('images/ico-catalogue.svg')}}" alt="Catalogue">
                    Catalogue
                </a>
            </menu>
        </nav>
        @endguest
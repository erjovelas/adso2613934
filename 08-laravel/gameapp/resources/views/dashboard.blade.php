@extends('layouts.app')
@section('title', 'GameApp - Dashboard')
@section('class', 'dashboard')

@section('content')
<header>
            <img src="images/title-dashboard.svg" alt="">
            <svg class="btn-burger" viewBox="0 0 100 100" width="80">
                <path class="line top"
                    d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                <path class="line middle" d="m 70,50 h -40" />
                <path class="line bottom"
                    d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
            </svg>

</header>
@include('layouts.menuburger')

        <section class="dashboard-group">   
            <article>
            <div class="users">
                <div class="img">
                    <img src="images/ico-users.svg" alt="Users">
                    <p>{{ App\Models\User::count() }} Rows</p>
                </div>
                <div class="title-users">
                    <h4>Users</h4>
                </div>
                <div class="btn-view">
                    <a href="{{ url('users') }}" class="btn-more">
                        view
                        <img class="view" src="images/ico-more-dashboard.svg" alt="">  
                    </a>
                </div>
            </div>     
            <div class="categories">
                <div class="img">
                    <img src="images/ico-categories.svg"  alt="Categories">
                    <p>{{ App\Models\Category::count() }} Rows</p>
                </div>
                <div class="title-categories">
                    <h4>Categories</h4>
                </div>
                <div class="btn-view">
                    <a href="module-categories.html" class="btn-more">
                        view
                        <img class="view" src="images/ico-more-dashboard.svg" alt="">  
                    </a>
                </div>
            </div>   
            <div class="games">
                <div class="img">
                    <img src="images/ico-games.svg" alt="Users">
                    <p>{{ App\Models\Game::count() }} Rows</p>
                </div>
                <div class="title-games">
                    <h4>Games</h4>
                </div>
                <div class="btn-view">
                    <a href="module-games.html" class="btn-more">
                        view
                        <img class="view" src="images/ico-more-dashboard.svg" alt="">  
                    </a>
                </div>
            </div>   
            
            </article>
        </section>
     @endsection

    @section('js')

    <script>
     $('header').on('click','.btn-burger', function(){
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            });
    </script>
@endsection
       
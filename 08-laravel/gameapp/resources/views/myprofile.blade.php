@extends('layouts.app')
@section('title', 'GameApp - My profile')
@section('class', 'titulo-profile')

@section('content')
<header>
            <a href="{{ url('/')}}" class="btn-back">
                <img src="images/btn-back.svg" alt="Back">
            </a>
            <img src="images/title-my-profile.svg" alt="">
            <svg class="btn-burger" viewBox="0 0 100 100" width="80">
                <path class="line top"
                    d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                <path class="line middle" d="m 70,50 h -40" />
                <path class="line bottom"
                    d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
            </svg>

        </header>
        @include('layouts.menuburger')
        <section class="profile-group">   
            <article>
            <div class="form-group">
                <img id="upload" class="mask" src="{{ asset('images'). '/' . Auth::user()->photo }}" alt="Photo">
                <img class="border" src="images/shape-border-photo.svg" alt="Border">
            </div>
            <h3>{{ Auth::user()->fullname }}</h3>
            <h4>{{ Auth::user()->email }}</h4>
            <div class="admon">
                <img class="ico-admon" src="images/ico-information.svg" alt="administrator">
            </div>
            <p>{{ Auth::user()->role }}</p>     
           
            <div class="profile">  
                <div>
                    <img src="images/ico-information.svg" alt="administrator">
                    <p>{{ Auth::user()->document }}</p>
                </div>
                <div>
                    <img src="images/ico-information.svg" alt="administrator">
                    <p>{{ Auth::user()->phone }}</p>
                </div>
                <div>
                    <img src="images/ico-information.svg" alt="administrator">
                    <p>Active</p>
                </div>
                <div>
                    <img src="images/ico-information.svg" alt="administrator">
                    <p>{{ Auth::user()->gender }}</p>
                </div>
                <div>
                    <img src="images/ico-information.svg" alt="administrator">
                    <p>{{ Auth::user()->birthdate }}</p>
                </div>
                <div>
                    <img src="images/ico-information.svg" alt="administrator">
                    <p>Str 23-24</p>
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


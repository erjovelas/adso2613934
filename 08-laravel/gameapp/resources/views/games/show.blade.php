@extends('layouts.app')
@section('title', 'GameApp - Show')
@section('class', 'show')

@section('content')
<header>
            <a href="{{ url('games')}}" class="btn-back">
                <img src="{{ asset('images/btn-back.svg')}}" alt="Back">
            </a>
            <img src="{{ asset('images/title-show.svg')}}" alt="">
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
                <img id="upload" class="mask" src="{{ asset('images'). '/' . $game->image }}" alt="Photo">
                <img class="border" src="{{ asset('images/shape-border-photo.svg')}}" alt="Border">
            </div>
            <h3>{{ $game->title }}</h3>
            <div class="admon">
                <img class="ico-admon" src="{{ asset('images/ico-information.svg')}}" alt="administrator">
            </div>
            <p>{{ $game->role }}</p>     
           
            <div class="profile">  
                <div>
                    <img src="{{ asset('images/ico-information.svg')}}" alt="administrator">
                    <p>{{ $game->document }}</p>
                </div>
                <div>
                    <img src="{{ asset('images/ico-information.svg')}}" alt="administrator">
                    <p>{{ $game->phone }}</p>
                </div>
                <div>
                    <img src="{{ asset('images/ico-information.svg')}}" alt="administrator">
                    <p>Active</p>
                </div>
                <div>
                    <img src="{{ asset('images/ico-information.svg')}}" alt="administrator">
                    <p>{{ $game->gender }}</p>
                </div>
                <div>
                    <img src="{{ asset('images/ico-information.svg')}}" alt="administrator">
                    <p>{{ $game->birthdate }}</p>
                </div>
                <div>
                    <img src="{{ asset('images/ico-information.svg')}}" alt="administrator">
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


@extends('layouts.app')
@section('title', 'GameApp - Show')
@section('class', 'show')

@section('content')
<header>
            <a href="{{ url('categories')}}" class="btn-back">
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
            <img id="upload" class="mask" src="{{ asset('images'). '/' . $category->image }}" alt="Photo">
            <img class="border" src="images/shape-border-photo.svg" alt="Border">
        </div>
        <h3>{{ $category->name }}</h3>
        <div class="profile">  
            <div>
                <img src="images/ico-manufacturer1.svg" alt="administrator">
                <p>{{ $category->manufacturer }}</p>
            </div>
            <div>
                <img src="images/ico-date1.svg" alt="administrator">
                <p>{{ $category->releasedate }}</p>
            </div>  
        </div>     
        <div class="description-category">
            <img src="images/ico-description1.svg" alt="administrator">
            <p>{{ $category->description }}
            </p>
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


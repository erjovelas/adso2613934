@extends('layouts.app')
@section('title', 'GameApp - Catalogue')
@section('class', 'catalogue')

@section('content')
         <header>
            <a href="{{url('/')}}" class="btn-back">
                <img src="images/btn-back.svg" alt="Back">
            </a>
            <img src="images/logo-top.svg" alt="Logo" class="logo-top">
            <svg class="btn-burger" viewBox="0 0 100 100" width="80">
                <path class="line top"
                    d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                <path class="line middle" d="m 70,50 h -40" />
                <path class="line bottom"
                    d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
            </svg>
        </header>
        @include('layouts.menuburger')

        <section class="scroll">
            <form action="" method="post">
                <input type="text" placeholder="Filter" maxlength="18">
            </form>
            <article>
                <h2>
                    <img class="category" src="images/ico-category.svg" alt="Category">
                    Xbox One 
                </h2>
                <div class="owl-carousel owl-theme" >
                    <figure>
                        <img src="images/slide-c1-01.png" alt="" class="slide">
                        <figcaption>Jump Force</figcaption>
                        <a href="view.html" class="btn-more">
                            view
                            <img class="view" src="images/ico-more.svg" alt="">  
                        </a>
                    </figure>
                    <figure>
                        <img src="images/slide-c1-02.png" alt="" class="slide">
                        <figcaption>Gears of War</figcaption>
                        <a href="view.html" class="btn-more">
                            view
                            <img class="view"  src="images/ico-more.svg" alt="">
                        </a>
                    </figure>
                    <figure>
                        <img src="images/slide-c1-03.png" alt="" class="slide">
                        <figcaption>Title Game</figcaption>
                        <a href="view.html" class="btn-more">
                            view
                            <img class="view"  src="images/ico-more.svg" alt="">
                        </a>
                    </figure>
                </div> 
            </article>
            <article>
                <h2>
                    <img class="category" src="images/ico-category.svg" alt="Category">
                    Nintendo Wii
                </h2>
                <div class="owl-carousel owl-theme" alt="Category">
                    <figure>
                        <img src="images/slide-c2-01.png" alt="" class="slide">
                        <figcaption>Super Mario <br> Galaxy 2</figcaption>
                        <a href="view.html" class="btn-more">
                            view
                            <img class="view"  src="images/ico-more.svg" alt="">
                        </a>
                    </figure>
                    <figure>
                        <img src="images/slide-c2-02.png" alt="" class="slide">
                        <figcaption>Skylanders <br> Trap Team</figcaption>
                        <a href="view.html" class="btn-more">
                            view
                            <img class="view"  src="images/ico-more.svg" alt="">
                        </a>
                    </figure>
                    <figure>
                        <img src="images/slide-c2-03.png" alt="" class="slide">
                        <figcaption>Donkey Kong <br>Country Returns </figcaption>
                        <a href="view.html" class="btn-more">
                            view
                            <img class="view"  src="images/ico-more.svg" alt="">
                        </a>
                </div>
            </article>
            <article>
                <h2>
                    <img class="category" src="images/ico-category.svg" alt="Category">
                    Play Station 5
                </h2>
                <div class="owl-carousel owl-theme" alt="Category">
                    <figure>
                        <img src="images/slide-c3-01.png" alt="" class="slide">
                        <figcaption>Jumanji</figcaption>
                        <a href="view.html" class="btn-more">
                            view
                            <img class="view"  src="images/ico-more.svg" alt="">
                        </a>
                    </figure>
                    <figure>
                        <img src="images/slide-c3-02.png" alt="" class="slide">
                        <figcaption>Horizon</figcaption>
                        <a href="view.html" class="btn-more">
                            view
                            <img class="view"  src="images/ico-more.svg" alt="">
                        </a>
                    </figure>
                    <figure>
                        <img src="images/slide-c3-03.png" alt="" class="slide">
                        <figcaption>Kena</figcaption>
                        <a href="view.html" class="btn-more">
                            
                            <img class="view"  src="images/ico-more.svg" alt="">
                        </a>    
                    </figure>
                </div>
            </article>
        </section>
   @endsection

   @section('js')
   <script>
      $(document).ready(function () {
          
          $('.owl-carousel').owlCarousel({
              center: false,
              loop: true,
              margin: 0,
              nav: true,
              dots: false,
              responsive: {
                  0: {
                      items: 2
                  }
              }
          })
          //---------------------
          $('header').on('click','.btn-burger', function(){
              $(this).toggleClass('active')
              $('.nav').toggleClass('active')
          })
          //---------------------
      })
   </script>
   @endsection

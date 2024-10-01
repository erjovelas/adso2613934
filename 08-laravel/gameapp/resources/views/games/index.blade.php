@extends('layouts.app')
@section('title', 'GameApp - Module-Games')
@section('class', 'module-games')

@section('content')

    <header>
        <a href="{{ url('dashboard') }}" class="btn-back">
            <img src="{{ asset('images/btn-back.svg') }}" alt="Back">
        </a>
        <img src="{{ asset('images/title-games.svg') }}" alt="">
        <svg class="btn-burger" viewBox="0 0 100 100" width="80">
            <path class="line top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
            <path class="line middle" d="m 70,50 h -40" />
            <path class="line bottom"
                d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
        </svg>

    </header>
    @include('layouts.menuburger')


    <section class="scroll">

        <article>
            <a href="{{ url('games/create') }}" class="btn-add">
                <img class="img-add" src="{{ asset('images/ico-add.svg') }}" alt="btn-add">
                <h1>add</h1>
            </a>
            <input type="text" placeholder="search" name="qsearch" id="qsearch">
            <div class="users">
                <a href="{{ url('export/games/pdf') }}">
                    <img src="{{ asset('images/btn-export-pdf.svg') }}" alt="PDF">
                </a>
                <a href="{{ url('export/games/excel') }}">
                    <img src="{{ asset('images/btn-export-excel.svg') }}" alt="Excel">
                </a>
            </div>
            <div id="list">


                <div class="loader"></div>
                <div id="list">
                    @foreach ($games as $game)
                        <div class="users">
                            <figure>
                                <div>
                                    <img class="mask" src="{{ asset('images') . '/' . $game->image }}" alt="photo">
                                    <img class="border" src="{{ asset('images/shape-border-small.svg') }}" alt="Border">
                                </div>
                                <h4>{{ $game->title }}</h4>
                                <p>{{ $game->category->name }}</p>
                                <div class="btn-function-games">
                                    <a href="{{ url('games/' . $game->id) }}" class="btn-show">
                                    </a>
                                    <a href="{{ url('games/' . $game->id . '/edit') }}" class="btn-edit">
                                    </a>
                                    <a href="javascript:;" class="btn-delete" data-title="{{ $game->title }}">
                                    </a>
                                    <form action="{{ url('games/' . $game->id) }}" method="POST" style="display: none">
                                        @csrf
                                        @method('delete')
                                    </form>
                                </div>
                            </figure>
                        </div>
                    @endforeach
                </div>
        </article>
    </section>
    <footer>
        <div class="footer-mod-game">
            {{-- Renderiza la vista de paginación personalizada --}}
            {{ $games->links('layouts.paginator') }}
    
            {{-- Enlace a la página anterior --}}
            <a href="{{ $games->previousPageUrl() }}" class="arrow-left">
            </a>
    
            {{-- Muestra el número de página actual y el total de páginas --}}
            <h4>{{ $games->currentPage() }} DE {{ $games->lastPage() }}</h4>
    
            {{-- Enlace a la página siguiente --}}
            <a href="{{ $games->nextPageUrl() }}" class="arrow-right">
            </a>
        </div>
    </footer>

@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('.loader').hide()
            //-------------------------------------------------
            $('header').on('click', '.btn-burger', function() {
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            });
            //---------------------------------------
            @if (session('message'))
                Swal.fire({
                    position: "top",
                    title: '{{ session('message') }}',
                    icon: "success",
                    toast: true,
                    timer: 5000
                })
            @endif

            //-------------------------------------------------
            //este sirve para el ojito de la contraseña
            //-------------------------------------------------
            $togglePass = false
            $('section').on('click', '.ico-eye', function() {

                !$togglePass ? $(this).next().attr('type', 'text') :
                    $(this).next().attr('type', 'password')

                    !$togglePass ? $(this).attr('src', 'images/ico-eye-close.svg') :
                    $(this).attr('src', 'images/ico-eye.svg')

                $togglePass = !$togglePass
            });
            //--------------------------------------------
            $('figure').on('click', '.btn-delete', function() {
                $title = $(this).attr('data-title')
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!" + $title,
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).next().submit()
                    }
                });
            })

            //---------------------
            $('body').on('keyup', '#qsearch', function(e) {
                e.preventDefault()
                $query = $(this).val()
                $token = $('input[name=_token]').val()
                $model = 'games'

                $('.loader').show()
                $('#list').hide()

                setTimeout(() => {
                    $.post($model + '/search', {
                            q: $query,
                            _token: $token
                        },
                        function(data) {
                            $('#list').html(data)
                            $('.loader').hide()
                            $('#list').fadeIn('slow')
                        }
                    )
                }, 1000);

            })
        });
    </script>
@endsection

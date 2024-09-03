@extends('layouts.app')
@section('title', 'GameApp - Categorias')
@section('class', 'module-categories')

@section('content')
    <header>
        <a href="{{ url('dashboard') }}" class="btn-back">
            <img src="{{ asset('images/btn-back.svg') }}" alt="Back">
        </a>
        <img src="{{ asset('images/title-categories.svg') }}" alt="">
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
            <a href="{{ url('categories/create') }}" class="btn-add">
                <img class="img-add" src="{{ asset('images/ico-add.svg') }}" alt="btn-add">
                <h1>add</h1>
            </a>

            <div id="options">
                <input type="text" placeholder="search" name="qsearch" id="qsearch">
            </div>



            <div class="loader"></div>
            <div id="list">
                @foreach ($categories as $category)
                    <div class="users">
                        <figure>
                            <img src="{{ asset('images') . '/' . $category->imagen }}" alt="Photo" class="fig">
                            <h4>{{ $category->name }}</h4>
                            <p>{{ $category->manufacturer }}</p>
                            <div class="btn-function-users">
                                <a href="{{ url('categories/' . $category->id) }}" class="btn-show">
                                </a>
                                <a href="{{ url('categories/' . $category->id . '/edit') }}" class="btn-edit">
                                </a>
                                <a href="javascript:;" class="btn-delete" data-fullname="{{ $category->name }}">
                                </a>
                                <form action="{{ url('categories/' . $category->id) }}" method="POST"
                                    style="display: none">
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
    {{-- </section>
<footer>
    <div class="footer-users">
        <a class="arrow-left" href=""></a>
        <h4>01/02</h4>
        <a class="arrow-right" href=""></a>
    </div>
</footer> --}}
    <footer>
        <div class="footer-mod-user">
            {{-- Renderiza la vista de paginación personalizada --}}
            {{ $categories->links('layouts.paginator') }}

            {{-- Enlace a la página anterior --}}
            <a href="{{ $categories->previousPageUrl() }}" class="arrow-left">
            </a>

            {{-- Muestra el número de página actual y el total de páginas --}}
            <h4>{{ $categories->currentPage() }} DE {{ $categories->lastPage() }}</h4>

            {{-- Enlace a la página siguiente --}}
            <a href="{{ $categories->nextPageUrl() }}" class="arrow-right">
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
                $name = $(this).attr('data-fullname')
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!" + name,
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
                $model = 'categories'

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
                },2000);

            })
        });
    </script>
@endsection

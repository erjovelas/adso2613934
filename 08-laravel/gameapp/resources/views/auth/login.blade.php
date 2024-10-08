@extends('layouts.app')
@section('title', 'GameApp - Login')
@section('class', 'login')

@section('content')
<header>
            <a href="{{url('/')}}" class="btn-back">
                <img src="images/btn-back.svg" alt="Back">
            </a>
            <img src="images/title-login.svg" alt="">
            <svg class="btn-burger" viewBox="0 0 100 100" width="80">
                <path class="line top"
                    d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                <path class="line middle" d="m 70,50 h -40" />
                <path class="line bottom"
                    d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
            </svg>

</header>
@include('layouts.menuburger')
<section>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                @if (count($errors->all()) > 0)
                    @foreach($errors->all() as $message)
                        <li>{{ $message}}</li>
                @endforeach
                @endif

                <div class="form-group">
                    <label>
                        <img src="images/ico-email.svg" alt="Email">
                        Email:
                    </label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="erikavelasquezvalencia@gmail.com">    
                </div>
                <div class="form-group">
                    <label>
                        <img src="images/ico-pass.svg" alt="Email">
                        Password:
                    </label>
                    <img class="ico-eye" src="images/ico-eye.svg" alt="Eye">
                    <input type="password" name="password" placeholder="dontmesswithmydog">    
                </div>
                <div class="form-group">
                    <button type="submit">
                        <img src="images/content-btn-login.svg" alt="Login">
                    </button>
                    <a href="{{ route('password.request') }}">Forget your password?</a>
                </div>
            </form>
            
        </section>
    @endsection

    @section('js')

         <script>
            $('header').on('click','.btn-burger', function(){
                $(this).toggleClass('active')
                $('.nav').toggleClass('active')
            });


            //---------------------
                           //el siguiente fragmento de codigo sirve para activar el ojo y poder visualizar la contraseña
            //---------------------
            $togglePass = false
            $('section').on('click','.ico-eye', function(){

                !$togglePass ? $(this).next().attr('type','text')
                            : $(this).next().attr('type','password')
            
                !$togglePass ? $(this).attr('src', 'images/ico-eye-close.svg')
                            : $(this).attr('src', 'images/ico-eye.svg')

                $togglePass = !$togglePass
            });
            //---------------------    
    </script>

    <script>
    $(document).ready(function (){
        Swal.fire({
            position: "top",
            title: "Ops!",
            html: '@php echo $error $endphp',
            icon: "error",
            toast: true,
            showConfirmButton: false,
            timer: 5000
        })
    })
    </script>
@endsection


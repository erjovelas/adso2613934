@extends('layouts.app')
@section('title', 'GameApp - Add')
@section('class', 'add')

@section('content')
<header>

    <a href="{{ url('games') }}" class="btn-back">
            <img src="{{ asset('images/btn-back.svg') }}" alt="Back">
    </a>
    <img src="{{asset('images/title-add.svg')}}" alt="">
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
    <form action="{{ route('games.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            @if (count($errors->all()) > 0)
                 @foreach($errors->all() as $message)
                    <li>{{ $message}}</li>
            @endforeach
        @endif

        <div class="form-group">
            <img id="upload" class="mask" src="{{asset('images/bg-upload-photo.svg')}}" alt="Photo">
            <img class="border" src="{{asset('images/shape-border-photo.svg')}}" alt="Border">
            <input id="photo" type="file" name="photo" accept="image/*">
        </div>
        {{-- <div class="form-group">
            <img id="upload" class="mask" src="images/bg-categories-photo.svg" alt="Photo">
            <img class="border" src="images/shape-border-photo.svg" alt="Border">
            <input id="photo" type="file" name="photo" accept="image/*">
        </div> --}}
        <div class="form-group">
            <label>
                <img src="{{ asset('images/ico-name.svg') }}" alt="Name">
                Super Metroid
            </label>
            <input type="text" name="Name-category" placeholder="Super Metroid">    
        </div>
        <div class="form-group">
            <label>
                <img src="{{ asset('images/ico-manufacturer.svg') }}" alt="manufacturer">
                Manufacturer:
            </label>
            <input type="text" name="manufacturer" placeholder="Microsoft">    
        </div>
        <div class="form-group">
            <label>
                <img src="{{ asset('images/ico-date.svg') }}" alt="Date">
                Release Date:                    </label>
            <input type="text" name="release-date" placeholder="21/08/2015">    
        </div>
        <div class="form-group">
            <label>
                <img src="{{ asset('images/ico-description.svg') }}" alt="category">
                Category:
            </label>
            <select name="category_id">
                <option value="">Select...</option>
                @foreach ($cats as $cat )
                    <option value="{{ $cat->id }}" @if (old('category_id')== $cat->id) selected @endif>{{ $cat->name }}</option>
                @endforeach
            </select>
            {{-- <input type="text" name="game" placeholder="Nintendo">        --}}
        </div>
        <div class="form-group">
            <button type="submit">
                <img src="{{ asset('images/content-btn-add.svg') }}" alt="Register">
            </button>
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
            
                !$togglePass ? $(this).attr('src', "{{ asset('images/ico-eye-close.svg') }}") 
                            : $(this).attr('src', "{{ asset('images/ico-eye.svg') }}")

                $togglePass = !$togglePass
            });
            //---------------------
            $('.border').click(function (e){
                $('#photo').click()
            })
            $('#photo').change(function (e){
                e.preventDefault()
                let reader = new FileReader()
                reader.onload = function(evt){
                    $('#upload').attr('src', event.target.result)
                }
                 reader.readAsDataURL(this.files[0])  
            })
            //---------------------
    </script>
    @if ($errors->any())
    @php $error = '' @endphp
    @foreach ($errors->all() as $message)
        @php $error .= '<li>' . $message . '</li>' @endphp
    @endforeach

    <script>
    $(document).ready(function(){
        Swal.fire({
            position: 'top',
            title: 'Ops !',
            html: '<ul>{!! $error !!}</ul>',
            icon: 'error',
            toast: true,
            showConfirmButton: false,
            timer: 5000
        })
    })
    </script>
@endif
@endsection


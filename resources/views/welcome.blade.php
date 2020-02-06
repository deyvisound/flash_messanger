
@extends('layouts.simple')

@section('title', 'Flash Messenger')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>
                    <a href="{{ route('register') }}">Register</a>
                @endauth
            </div>
        @endif

        <div class="content">
            <div class="title m-b-md">
                Flash Mensseger
            </div>
            <div class="m-b-md div-text">
                Menssagens Instantâneas com Laravel
            </div>

            Fixas: 
            <div class="links">                
                <a href="{{ route('success') }}" class="waves-effect green btn-large">Success</a>                    
                <a href="{{ route('warning') }}" class="waves-effect orange btn-large">Warning</a>
                <a href="{{ route('error') }}" class="waves-effect red btn-large">Error</a>                                                
            </div>
            <br>
            Diálogos: 
            <div class="links">                
                <a href="{{ route('t_success') }}" class="waves-effect green btn-large">Success</a>                    
                <a href="{{ route('t_warning') }}" class="waves-effect orange btn-large">Warning</a>
                <a href="{{ route('t_error') }}" class="waves-effect red btn-large">Error</a>                                                
            </div>
        </div>
    </div>
@endsection
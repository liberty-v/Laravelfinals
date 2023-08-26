@extends('layouts.app')
    @section('content')
    <div class='place'>
        <div class='jumbotron text-center'>
            <br>
            <img src='{{asset('haus.png')}}' alt='image' width='100' >&nbsp;

            <h1>Emro's Boarding House</h1>
            <p>This is the laravel application</p>
            <p><a class='btn btn-primary btn-lg' href='/login' role='button'>
                Login
                </a>
                &nbsp;
                <a class='btn btn-primary btn-lg' href='/register' role='button'>
                Register
                </a></p>
        </div>  
    </div>          
    @endsection
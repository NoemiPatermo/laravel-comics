@extends('templates.base')


@section('title', 'HomePage')

<!--qui inizio a lavorare sul mio main-->
@section('main')
    <div class=" home-page">
        
    </div>

    <!--foreach per ciclare sul db-->
    <div class="home-page-content-container">
        @foreach($comics as $comic)
        <div class="row"> 
            <img src="{{$comic['thumb']}}" alt="single-comic">
        </div>

         <p> {{$comic['title']}} </p>
        @endforeach
    </div>
@endsection
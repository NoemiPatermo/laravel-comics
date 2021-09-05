
<!--questa è la singola pagina del prodotto
con una parte interna dinamica-->

@extends('templates.base')


@section('title', 'card')

@section('main')
  <div class="jumbotron-section"> 
          <div class="container">
             <!--nomi classi copiate dal sito -->   
                <div class="field-content">
                  <div class="content-type">COMIC BOOK</div>
                  <img src="{{ $comics[$id]['thumb'] }}" alt="single-comic">
                  <div class="bottom-label">VIEW GALLERY</div>
                </div>
        </div>
        
</div>
        <div class="blu"></div>
                
            <div class="container-details mt-5">
                <h1>{{ $comics[$id]['title']}}</h1>
                <span>US:PRICE{{$comics[$id]['price']}}<span>
                        <p>{{$comics[$id]['description']}}</p>
            </div>
        
           
@endsection
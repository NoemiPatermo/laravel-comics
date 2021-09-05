

<!--ESTENDI il nome di questo template preciso-->
@extends('templates.base')



<!--solo dove hai yield puoi fare section-->
@section('title', 'HomePage')


<!--qui inizio a lavorare sul main-->

@section('main')
<main>
    <div class="container-fluid home-page-content"> 
           <div class="container">
               <div class="epic-series">CURRENT SERIES</div>
                    
            </div>
    </div>
      
        <div class="container-fluid inner-home-page">
            
            <div class="container">
                    <div class="row">
                        @foreach($comics as $comic)
                            <div class="comics-item col-2">
                                    
                                <div class="comics-item-content">
                                    <img src="{{$comic['thumb']}}" alt="single-comic"/>
                                     <span> {{$comic['series']}} </span>
                                </div>
                                    
                            </div>
                        @endforeach
                     
                </div>

                    <div class="button">
                        <button type="button" class="btn btn-primary">LOAD MORE</button>
                    </div>
                    
            </div>
        </div>
          
   
 <main>
@endsection

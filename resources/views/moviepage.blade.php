@extends('layouts.home')
@section('content')
    
@props(["movie"])
<body style="margin: 0;padding:0;display:flex;flex-direction: column;"> 


    
  <div >
    <div style="width: 100% ;z-index: -10;position: absolute ;display: flex ;justify-content: start; ">
    <img src={{$movie->background_image}} alt="" class="img" style=" filter: brightness(30%);">

   
    <div style="width: 50%;height: 100%; display: flex ;gap: 2rem;justify-content: center ;align-items: center;z-index: 30;position: absolute ;padding-left: 2rem; ">
      <div style="display: flex;flex-direction: column ;justify-content: start;">
        
        <img src={{$movie->poster_image}} alt="" style="height:202px;box-shadow: rgba(0, 0, 0, .035) 0px 5px 15px;">
         
      </div >
      <div style="display: flex;flex-direction: column ;justify-content: start;">
        <p style="color: white ;font-family: sans-serif ;margin-left: 1rem;font-weight: bolder;font-size: 34px">{{$movie->title}}</p>
         <div>
          <button style="width:5rem;height:2rem ">+ ma liste</button>
          <button style="width:5rem;height:2rem ">noter</button>

          
         </div>
         <p style="color: rgb(215, 215, 215);font-size: 16px;padding-inline: 2rem;font-family: sans-serif, sans-serif">Sortie : 27 mars 2024 <br> Durée : 1h 30min <br> Genre : {{$movie->genre}} <br> Réalisateur : {{$movie->director}} <br> Acteurs : Manu Payet, Pierre Arditi, Alison Wheeler <br> Nationalité : Américain
        <br>  {{$movie->story}}

        </p>
          </p>
        </div>
        
      </div>
      
    </div>
    <x-datecontainer :datetime="$datetimearray"  :movie="$movie"/>
    <style>
      
        .background{
        width:100% ;
        height:100%  ;
        
       
  
        
        }  
        .img{
          width: 100%;
          height: 100%;
  
          
         
  
        }
      </style>
    
  </div>


   
</body>
@endsection


 
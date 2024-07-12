
    
<div class="containeer">
    <h1 style="color: white ;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;margin-left: 1rem ;font-size:30px">À l'affiche au cinéma</h1>
{{-- <div class="moviescontainer" style="position: relative">
    
    @foreach ($movies as $movie)
    <a href="#">
        <x-movie url="{{ $movie['poster_image'] }}" movietitle="{{ $movie['title'] }}"/>
    </a>
        @endforeach
</div> --}}
<div class="moviescontainer" style="position: relative">
    @foreach ($movies as $movie)
    <a href="{{route('movies.fetshMovies',$movie['id'])}} " style="text-decoration: none; color: inherit;">
        <x-movie url="{{ $movie->poster_image }}" movietitle="{{ $movie->title }}"/>

    </a>
    @endforeach
</div>


</div>
<style>
    
    .moviescontainer{
      display: flex;
      justify-content: space-around;
      gap: 2rem;
      align-items: center;
      height: 100%;
      padding-left: 2rem;
     
      /* background-image: linear-gradient(to bottom, rgb(37,56,53), #090a0b); */
      /* filter: drop-shadow(0 -6mm 4mm rgb(37,56,53)); */
      overflow-y: auto;
      

    }

    .moviescontainer::-webkit-scrollbar {
        width: 0;  
    }

    .containeer {

     display: flex;
     flex-direction: column;
     width: 100%;
     height: 25rem;
     background-image: linear-gradient(to bottom, rgb(37,56,53), #090a0b);
     filter: drop-shadow(0 -6mm 4mm rgb(37,56,53));


    }
</style>

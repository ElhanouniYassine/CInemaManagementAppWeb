@extends('layouts.home')
@section('content')
<div class="recommendation-container">
    <div class="recommendation">
        <h1>Recommendation</h1>
        <form action="{{route('movies.recommandation')}}" method="GET">
            @csrf
            <label for="movie">Enter a movie name</label>            
            <input type="text" name="movie" id="movie" placeholder="Enter a movie name">
            <button type="submit">Submit</button>
        </form>
        <div class="recommended-movies">
            {{-- parse this $recommendedMovies[0] --}}
                
            @foreach ($recommendedMovies as $item)
                <div class="movie">{{ $item }}</div>
            @endforeach
        </div>
    </div>
</div>
    <style>
        .recommendation-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Adjust as needed */
}

.recommendation {
    background-color: yellow;
    color: black;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
}

.recommendation h1 {
    margin-bottom: 20px;
}

.recommendation form {
    margin-bottom: 20px;
}

.recommendation label {
    display: block;
    margin-bottom: 10px;
}

.recommendation input[type="text"],
.recommendation button {
    padding: 10px;
    border: 2px solid black;
    border-radius: 5px;
    margin-bottom: 10px;
}

.recommendation button {
    background-color: black;
    color: white;
    cursor: pointer;
}

.recommended-movies {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.movie {
    background-color: white;
    color: black;
    padding: 10px 20px;
    margin: 5px;
    border-radius: 5px;
}

    </style>
@endsection
@props(['datetime','movie'])


<div class="DTcontainer" style="position:absolute;top:100%;z-index: 999" >

   <div class="datecontainer" >

    

@foreach(array_keys($datetime) as $date)

   @php 
   $dayOfMonth = date('d', strtotime($date));
   $month = date('F', strtotime($date));
   $dayOfWeek = date('l', strtotime($date));

   
   @endphp
    <x-date jour={{$dayOfWeek}} nombre={{$dayOfMonth}} mois={{$month}}/>
@endforeach
       

   </div>
   
 
    <a href="#{{-- {{route('movies.ticket_siege',$movie->id)}} --}}" id="open-popup" style="color: black">
        <div class="timecontainer" id="timeContainer">
            @foreach($datetime as $projection)
                @foreach ($projection as $time)
                    <x-heureprojection heure="{{ $time }}" typesalle="IMAX" langue="FR"/>
                @endforeach
            @endforeach
        </div>
    </a>
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close">×</span>
            <h2 style="margin-bottom: 0px;">{{$dayOfWeek}} {{$dayOfMonth}} {{$month}} </h2>
            <h3 >{{$time}} </h3>
            <div class="film-content">

                <img src={{$movie->poster_image}} alt="" class="img" style=" filter: brightness(30%); ">
                <div class="details">
                    <div class="title">{{ $movie->title }}</div>
                    <div class="duration">Duration: 2h</div>
                </div>                
            </div>
            <div class="film-content1">
                <div class="cinema-info">
                    <div class="cinema-details">
                        <h2 class="cinema-name">Ensias Cinema</h2>
                        <p class="cinema-location">Location:Rabat Al Irfane</p>
                    </div>
                    <div class="salle-info">
                        <div class="yellow-block">
                            <h3 class="salle-name">Salle Name</h3>
                            <p class="salle-seats">Seats: 100</p>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <a href="{{route('movies.ticket_siege',$movie->id)}} " class="Button">Reserver Maintenant</a>
            

        </div>
    </div>
    <script>
        document.getElementById('open-popup').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'block';
        });

        document.querySelector('.close').addEventListener('click', function() {
        document.getElementById('popup').style.display = 'none';
        });
    </script>

</div>
<style>
    .popup {
    display: none;
    position: fixed;
    top: 0; left: 0; width: 100%; height: 100%;
    background-color: rgba(0,0,0,0.5);
}

.popup-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    border-radius: 12px;
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    padding-left: 24px;
    padding-right: 24px;
    padding-top: 24px;
    background-color:rgb(237, 236, 236);
    width: 432px;
    height: 562px;
}

.film-content {
    overflow: hidden;
    width: 100%;
    height: 80%;
    background-color: white;
    border-radius: 12px;
    margin-top: 24px;
    display: flex;
    align-items: center;
    position: relative;
}

.img {
    filter: brightness(30%);
    width: 35%;
    height: 100%;
}

.details {
    margin-left: 16px;
    padding: 16px; /* Adjust as needed */
}

.title {
    font-size: 24px;
    font-weight: bold;
    color: black;
    margin-bottom: 8px; /* Adjust as needed */
}

.duration {
    font-size: 14px;
    color: rgb(156, 156, 156);
}

.film-content1 {
    width: 100%;
    height: 100%;
    background-color: white;
    border-radius: 12px;
    margin-top: 24px;
}

.cinema-info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px;
}

.cinema-details {
    display: flex;
    flex-direction: column;
}

.cinema-name {
    font-size: 24px;
    font-weight: bold;
    color: black;
    margin-bottom: 8px;
}

.cinema-location {
    font-size: 14px;
    color: rgb(156, 156, 156);
}

.salle-info {
    display: flex;
    align-items: center;
}

.yellow-block {
    background-color: #feb91e;
    padding: 12px;
    border-radius: 8px;
    width: 60%;
    height: 40%;
}

.salle-name {
    font-size: 16px;
    color: black;
}

.salle-seats {
    font-size: 10px;
    color: black;
}

.Button{
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 14px;
    width: 100%;
    height: 30%;
    background-color: black;
    border-radius: 12px;
    color: white;
}


.close {
   cursor:pointer;
}
.close:hover {
    color: red;
    background-color: lightgray;
    border-radius: 50%; /* To make it circular */
    padding: 8px; /* Increase padding to make the circle larger */
}

.DTcontainer{
    background-color: #f7f7f7;
   width: 100%;
   height: 30rem;
   
   /* display: flex;
   flex-direction: column;
   justify-content: flex-start; */

}
.datecontainer{
    display: flex;
      justify-content: start;
      gap: 2rem;
      align-items: center;
      height: 50%;
      padding-left: 2rem;
      overflow-x:scroll; 
      width: 1000px ;
      
      
      
}
.timecontainer{
    display: flex;
      justify-content: start;
      gap: 2rem;
      align-items: center;
      height: 50%;
      padding-left: 2rem;
      overflow-x:scroll; 
      width: 1000px ;
      
      
      
}
.datecontainer::-webkit-scrollbar {
        width: 0;  
    }
 .timecontainer::-webkit-scrollbar {
        width: 0;  
    }
</style>
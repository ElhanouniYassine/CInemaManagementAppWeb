

@props(['jour',"nombre","mois"])
<div class="datecard ">
   <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;margin: 0%" >{{$jour}}</p>
   <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;font-weight: 900;margin: 0%" class="day">{{$nombre}}</p>
   <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;margin: 0%" class="month">{{$mois}}</p>

</div>
<style>

    .datecard{
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
background-color: white;
border-radius: 4px;
height: 80px;
width: 100px;
box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
flex-shrink: 0; 
    }
    .hourcard{
display: flex;
flex-direction: column;
justify-content: center;
align-items: center;
background-color: white;
border-radius: 4px;
height: 80px;
width: 100px;
box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
flex-shrink: 0; 
    }

    .datecard.active {
        background-color: lightblue; 
    }
    .hourcard.active {
        background-color: lightblue; 
    }
</style>

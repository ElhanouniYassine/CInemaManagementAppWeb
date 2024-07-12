
@props(['heure',"typesalle","langue"])
<div class="datecard">
   <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;margin: 0%">{{$heure}}</p>
   <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ;font-weight: 900;margin: 0%">{{$typesalle}}</p>
   <p style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;margin: 0%">{{$langue}}</p>

</div>
<style>

    .hourcard{
display: flex;
flex-direction: column;
justify-content: space-around;
align-items: center;
background-color: white;
border-radius: 4px;
width: 114px;
height: 80px;
box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;



    }
</style>
{{-- <div style="display: flex; flex-direction: column; justify-content: center;width:300px;height:200px;">
    <img src="{{ $url }}" style="" alt="">
    <p style="color: white; text-align: center; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;  font-weight: 100;font-size: 14px">{{ $movietitle }}</p>
</div>      
margin-top: 10px; font-size: 14px; line-height: 1.2; height: 40px; overflow: hidden; text-overflow: ellipsis;
 --}}
 <div class="card" style="width: 200px; margin: 10px; display: inline-block; text-align: center;">
    <img src="{{ $url}}"  style="width: 100%; height: 200px;">
    <div class="card-body">
        <p class="card-text" style="margin-top: 10px;line-height: 1.2; height: 40px; overflow: hidden; text-overflow: ellipsis;color:aliceblue;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif ">{{ $movietitle }}</p>
    </div>
</div>
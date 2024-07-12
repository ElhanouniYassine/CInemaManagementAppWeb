@extends('layouts.home')

@section('content')

@props(['color'])


<div class="background">
     <div style="width: 100% ;height: 100% ;  background: radial-gradient(circle at 70% center, transparent 30%, rgb(37, 56, 53) 60%) ;position: absolute ;display: flex ;justify-content: start">
      <div style="width: 50%;height: 100%; display: flex ;flex-direction: column;gap: 2rem;justify-content: center ;align-items: center ">
       <img src="https://media.pathe.ma/home/featuring/logo/103640/lg/1/kung-fu-logo.png" style=" width: 25rem;height: auto" alt="">
       <button style="height: 3rem ;width:16rem ;background-color: #feb91e ;border: none ;font-size: 14px;font-weight: 700;border-radius: 0.5rem">Reserver maintenant</button>
   
    </div>
    </div>
        <img src="https://media.pathe.ma/home/featuring/backdrop/103639/lg/1/pathe-kung-fu-panda-4-desktop-banner-1920x850px-2.png" alt="" class="img">
    
</div>
    <style>
        body{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
      .background{
      width:100% ;
      height:100%  ;
      padding: 0;
      background-attachment: fixed;
      
      }  
      .img{
        width: 100%;
        height: 100%;
       

      }
    </style>
    
@endsection
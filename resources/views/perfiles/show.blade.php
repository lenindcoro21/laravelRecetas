 @extends('layouts.app')

 @section('content')

    <div  class="container">
        <div class="row" >
            <div class="cold-md-5 " >
                <img  src="/storage/{{$perfil->imagen}}" class="w-50 rounded-circle" alt="imagen"> 
            </div>
            <div class="cold-md-7 mt-5 mt-md-0">
                <h2 class="text-center mb-2 text-primary">{{$perfil->perfilUser->name}}</h2>
                <a href="{{$perfil->perfilUser->url}}">Visitar Sitio Web</a>
                <div class="biografia">
                    {!!$perfil->biografia!!}
                </div>
                
            </div>
        </div>
    
    </div>

 @endsection
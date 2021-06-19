@extends('layouts.app')

 @section('botones')
    <a  class ="btn btn-primary " href="{{route("recetas.index")}}">Volver a lista Receta</a>
  @endsection  

@section('content') 

    <h2 class="text-center mb-3">Crear nueva receta </h2>   
    <div  class="mt-5">
        <div class="cold-md-8">
            <form method="POST"  action={{route("recetas.store")}} novalidate>
            @csrf              


                <div class="form-group">
                    <label for="nombre">Nombre Receta</label>
                    <input type="text"  name="nombre" class="form-control @error('nombre') is-invalid @enderror" 
                    id="nombre" placeholder="Nombre Receta" value={{old('nombre')}}>
                    @error('nombre')

                       <span class="invalid-feeback d-block" role="alert">
                        <strong>{{$message}}</strong>
                       </span>     
                    @enderror
                </div>

                <div class="form-group">
                    
                    <input type="submit" class="btn btn-primary" value="Agregar Receta" >
                </div>


            
            </form>
    
       </div>
    
    </div>
@endsection 


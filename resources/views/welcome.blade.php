@extends('PlantillaMaestra')
@section('seccion')


<div class="container my-4">
 <h1 class="display-4"> Notas </h1>

 @if(session('mensaje'))
 <div class="alert alert-success">
 {{ session ('mensaje')}}
 </div>
 
 @endif

 <form action="{{ route('notas.agregar') }}" method="POST" >
 @csrf

@error ('nombre')
<div class="alert alert-danger">
El campo nombre es obligatorio
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@enderror

@error ('descripcion')
<div class="alert alert-danger">
El campo descripcion es obligatorio
<button type="button" class="close" data-dismiss="alert" aria-label="close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@enderror

 <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2" 
 value="{{ old('nombre') }}" >
 <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" 
 value="{{ old('descripcion') }}" >
 <button type="submit" class="btn btn-primary btn-block" >Agregar</button>
 </form>

 <table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">nombre</th>
      <th scope="col">descripcion</th>
      <th scope="col">Accion</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($notas as $item )
    <tr>
      <th scope="row">{{ $item->id }}</th>
      <td>
      <a href="{{ route('notas.detalle', $item) }}">
      {{$item->nombre}}
      </a>
      </td>
      <td>{{$item->descripcion}}</td>
      <td>
      <a href="{{ route('notas.editar' , $item ) }}" class="btn btn-primary" >
      Editar 
      </a>

      <form action="{{route('notas.delete', $item) }}" method="POST"  class="d-inline">
     
      @method('delete')
      @csrf
      <button class="btn btn-primary" type="submit" >Eliminar</button>
      </form>

      </td>
    </tr>
  @endforeach ()
  </tbody>
</table>

{{$notas->links()}}

 </div>



@endsection


@extends('PlantillaMaestra')
@section('seccion')
<h1>Editar datos correspondientes a nota {{ $notaEditar->id}} </h1>
@if(session('mensaje'))
<div class="alert alert-success"> {{ session('mensaje') }} </div>
@endif

<form action="{{ route('notas.update', $notaEditar->id ) }}" method="POST" >
@method('PUT')
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
 value="{{ $notaEditar->nombre }}" >
 <input type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2" 
 value="{{ $notaEditar->descripcion}}" >
 <button type="submit" class="btn btn-primary btn-block" >Actualizar datos</button>
 </form>

@endsection

<br>
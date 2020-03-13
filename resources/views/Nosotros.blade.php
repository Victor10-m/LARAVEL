@extends('PlantillaMaestra')

@section('seccion')

<h1 align='center'>ESTE ES MI EQUIPO DE TRABAJO</h1>
 
@foreach($Equipo as $item)
<a href=" {{route('Nosotros',$item) }}" class="h5 text-danger"> {{$item}} </a><br>
@endforeach

@if(!empty($Nombre))


@switch($Nombre)

@case($Nombre=='Victor')
<h2 class="mt-5" >  El nombre es: {{$Nombre}} </h2>

<p>{{$Nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. 
 Ea reiciendis aliquid magni asperiores excepturi eveniet qui odio sapiente
 quod minus veniam nihil earum, ipsum accusamus illo? Placeat hic debitis 
 asperiores.   </p>
 @break

 @case($Nombre=='Manuel')
<h2 class="mt-5" >  El nombre es: {{$Nombre}} </h2>

<p>{{$Nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. 
 Ea reiciendis aliquid magni asperiores excepturi eveniet qui odio sapiente
 quod minus veniam nihil earum, ipsum accusamus illo? Placeat hic debitis 
 asperiores.   </p>
 @break

 @case($Nombre=='Cesar')
<h2 class="mt-5" >  El nombre es: {{$Nombre}} </h2>

<p>{{$Nombre}} Lorem ipsum dolor sit amet consectetur adipisicing elit. 
 Ea reiciendis aliquid magni asperiores excepturi eveniet qui odio sapiente
 quod minus veniam nihil earum, ipsum accusamus illo? Placeat hic debitis 
 asperiores.   </p>
 @break

@endswitch

@endif

@endsection
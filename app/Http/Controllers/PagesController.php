<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class PagesController extends Controller
{
   public function Inicio(){
    $notas = App\Nota::paginate(3);
    return view('welcome',compact('notas'));
   }
   public function detalle($id){
    $nota =  App\Nota::findOrfail($id);
    return view('notas.detalle',compact('nota'));
   }
   public function agregar( Request $request ){
   // return $request->all();
   $request->validate([
      'nombre' => 'required',
      'descripcion' => 'required'
   ]);
   $notaAgregar = new App\Nota;
   $notaAgregar->nombre = $request->nombre;
   $notaAgregar->descripcion = $request->descripcion;
   $notaAgregar->save();
   return back()->with('mensaje','Se agrego la nota con exito');
   }
   public function editar($id){
      $notaEditar =  App\Nota::findOrfail($id);
      return view('notas.editar', compact('notaEditar'));
   }
   public function update(Request $request, $id){
      $request->validate([
         'nombre' => 'required',
         'descripcion' => 'required'
      ]);

      $notaupdate =   App\Nota::findOrfail($id);
      $notaupdate->nombre = $request->nombre;
      $notaupdate->descripcion = $request->descripcion;
      $notaupdate->save();
      return back()->with('mensaje','Datos de nota actualizados correctamente');
   }
   public function eliminar($id){
      $notaEliminar = App\Nota::findOrfail($id);
      $notaEliminar->delete();
      return back()->with('mensaje','Datos eliminados correctamente');
   }
   public function Fotos(){
    return view('fotos');
   }
   public function Blog(){
    return view('blog');
   }
   public function Nosotros($Nombre=null){
       $Equipo=['Victor','Manuel','Cesar'];
        return view('Nosotros', compact('Equipo','Nombre'));
   }




}

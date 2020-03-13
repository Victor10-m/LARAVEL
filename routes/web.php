<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'PagesController@Inicio')->name('inicio');

Route::get('/detalle/{id}', 'PagesController@detalle')->name('notas.detalle');

Route::post('/', 'PagesController@agregar')->name ('notas.agregar');

Route::get('/editar/{id}', 'PagesController@editar')->name ('notas.editar');

Route::put('/editar/{id}','PagesController@update')->name ('notas.update');

Route::delete('/delete/{id}','PagesController@eliminar')->name ('notas.delete');

Route::get('/fotos','PagesController@Fotos')->name('foto');

Route::get('/blog', 'PagesController@Blog')->name('noticia');

Route::get('/Nosotros/{Nombre?}', 'PagesController@Nosotros')->name('Nosotros');

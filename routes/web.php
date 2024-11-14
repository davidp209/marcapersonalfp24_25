<?php

use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function() {
    return 'Login usuario';
});

Route::get('logout', function() {
    return 'Logout usuario';
});

Route::get('proyectos', function() {
    return 'Listado proyectos';
});

Route::get('proyectos/show/{id}', function($id) {
    return 'Vista detalle proyecto ' . $id;
})->where('id', '[0-9]+');

Route::get('proyectos/create', function() {
    return 'Añadir proyecto';
});

Route::get('proyectos/edit/{id}', function($id) {
    return 'Modificar proyecto ' . $id;
})->where('id', '[0-9]+');

Route::get('perfil/{id?}', function($id = null) {
    return $id ? 'Visualizar el currículo de '. $id : 'Visualizar el currículo propio';
})->where('id', '[0-9]*');

Route::get('layout1', function() {
    return view('pruebalyout1');
});
Route::get('layout2', function() {
    return view('pruebalyout2');
});*/

Route::get('/', function() {
    return view('home');
});
Route::get('login', function() {
    return view('auth.login');
});

Route::get('logout', function() {
    return 'Logout usuario';
});

Route::get('proyectos', function() {
    return view('proyectos.index');
});

Route::get('proyectos/show/{$id}', function($id) {
    return view('proyectos.show', array('id'=>$id));
})->where('id', '[0-9]*');

Route::get('proyectos/create', function() {
    return view('proyectos.create');
});
Route::get('proyectos/edit/{$id}', function($id) {
    return view('proyectos.edit',array('id'=>$id) );
})->where('id', '[0-9]*');


Route::get('perfil/{id?}', function($id = null) {
    return $id ? 'Visualizar el currículo de '. $id : 'Visualizar el currículo propio';
})->where('id', '[0-9]*');

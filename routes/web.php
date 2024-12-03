<?php

use App\Http\Controllers\HomeController;
use App\Models\Estudiante;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'getHome']);

Route::get('login', function () {
    return view('auth.login');
});

Route::get('logout', function () {
    return 'Logout usuario';
});

Route::get('perfil/{id?}', function ($id = null) {
    return $id ? 'Visualizar el currículo de ' . $id : 'Visualizar el currículo propio';
})->where('id', '[0-9]*');

Route::get('pruebaDB/{votos?}', function ($votos = null) {
    $html = '

    ';
    $count = Estudiante::where('votos', '>', 100)->count();
    $max = Estudiante::max('votos');
    $min = Estudiante::min('votos');
    $media = Estudiante::avg('votos');
    $total = Estudiante::sum('votos');

    $html .= '
    Cantidad de estudiantes con votos mayor a 100: ' . $count . '';
    $html .= '
    Votos máximos: ' . $max . '';
    $html .= '
    Votos mínimos: ' . $min . '';
    $html .= '
    Promedio de votos: ' . $media . '';
    $html .= '
    Total de votos: ' . $total . '';

    $count = Estudiante::where('votos', '>', 100)->count();
    $html .= 'Antes: ' . $count . '
    ';

    $estudiante = new Estudiante;
    $estudiante->nombre = 'Juan';
    $estudiante->apellidos = 'Martínez';
    $estudiante->direccion = 'Dirección de Juan';
    $estudiante->votos = 130;
    $estudiante->confirmado = true;
    $estudiante->ciclo = 'DAW';
    $estudiante->save();

    $count = Estudiante::where('votos', '>', 100)->count();
    $html .= 'Después: ' . $count . '
    ';

    return $html . "
    \n
    ";
});

include __DIR__ . '/actividades.php';
include __DIR__ . '/curriculos.php';
include __DIR__ . '/proyectos.php';
include __DIR__ . '/reconocimientos.php';
include __DIR__ . '/users.php';

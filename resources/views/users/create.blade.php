@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Añadir Usuario</h2>
    <form action="#" method="POST">
        <div class="form-group">
            <label for="first_name">Nombre</label>
            <input type="text" class="form-control" id="first_name" name="first_name" required>
        </div>
        <div class="form-group">
            <label for="last_name">Apellidos</label>
            <input type="text" class="form-control" id="last_name" name="last_name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password1">Contraseña</label>
            <input type="password" class="form-control" id="password1" name="password1" required>
        </div>
        <div class="form-group">
            <label for="password2">Repita contraseña</label>
            <input type="password" class="form-control" id="password2" name="password2" required>
        </div>
        <div class="form-group">
            <label for="linkedin">Perfil Linkedin</label>
            <input type="url" class="form-control" id="linkedin" name="linkedin" required>
        </div>
        <button type="submit" class="btn btn-primary">Añadir Usuario</button>
    </form>
</div>
@endsection

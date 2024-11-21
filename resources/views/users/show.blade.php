@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img width="256" alt="User Image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/User_%2889041%29_-_The_Noun_Project.svg/256px-User_%2889041%29_-_The_Noun_Project.svg.png">
        </div>
        <div class="col-md-6">
            <h3>{{ $user['first_name'] }} {{ $user['last_name'] }}</h3>
            <p>Email: {{ $user['email'] }}</p>
            <p>LinkedIn: <a href="{{ $user['linkedin'] }}">{{ $user['linkedin'] }}</a></p>
            <div class="buttons">
                <a href="{{ action([App\Http\Controllers\UserController::class, 'getEdit'], ['id' => $id]) }}" class="btn btn-primary">Editar</a>
                <a href="{{ action([App\Http\Controllers\UserController::class, 'getIndex']) }}" class="btn btn-secondary">Volver al listado</a>
            </div>
        </div>
    </div>
</div>
@endsection

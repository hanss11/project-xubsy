@extends('layouts.header')

@section('contenido')

<div class="container-fluid" style="margin-top: 15vh; ">
  <div class="card-deck">
    @foreach($users as $usuario)
    <div class="card">
      @if($usuario->avatar)
      <img class="card-img-top" src="../images/{{$usuario->avatar}}" alt="Card image cap" style="width: 100%; height: 15vw;  object-fit: cover; " >
      @else
      <img class="card-img-top" src="../images/default-avatar.png" alt="Card image cap" style="width: 100%; height: 15vw;  object-fit: cover; " >
      @endif
      <div class="card-body">
        <a href="/profile/{{$usuario->id}}"><h5 class="card-title">{{$usuario->name}}</h5></a> 
        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla metus quis est maximus venenatis. In lobortis erat metus.</p>
      </div>
      <a href="#" class="btn btn-primary">Seguir</a>
      <div class="card-footer">
        <small class="text-muted">Se unio el  {{$usuario->created_at->format('d/m/Y')}} </small>
      </div>
    </div>
    @endforeach
  </div>
</div>

{{$users->links()}}

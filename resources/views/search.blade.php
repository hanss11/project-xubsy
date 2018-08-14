@extends('layouts.header')

@section('contenido')
@if($usuarios->first())
<div class="container-fluid" style="margin-top: 15vh; ">
  @if(count($usuarios) == 1)
    @foreach($usuarios as $ow)
    <div class="card w-25 mx-auto">
    @if($ow->avatar)
    <img class="card-img-top" src="../images/{{$ow->avatar}}" alt="Card image cap" style="width: 100%; height: 15vw;  object-fit: cover; " >
    @else
    <img class="card-img-top" src="../images/default-avatar.png" alt="Card image cap" style="width: 100%; height: 15vw;  object-fit: cover; " >
    @endif
    <div class="card-body">
      <a href="/profile/{{$ow->id}}"><h5 class="card-title">{{$ow->name}}</h5></a>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <a href="#" class="btn btn-primary">Seguir</a>
    <div class="card-footer">
      <small class="text-muted">Se unio el  {{$ow->created_at->format('d/m/Y')}} </small>
    </div>
    @endforeach
  </div>
  @else
  <div class="card-deck">
  @foreach($usuarios as $row)
    <div class="card">
      @if($row->avatar)
      <img class="card-img-top" src="../images/{{$row->avatar}}" alt="Card image cap" style="width: 100%; height: 15vw;  object-fit: cover; " >
      @else
      <img class="card-img-top" src="../images/default-avatar.png" alt="Card image cap" style="width: 100%; height: 15vw;  object-fit: cover; " >
      @endif
      <div class="card-body">
        <a href="/profile/{{$row->id}}"><h5 class="card-title">{{$row->name}}</h5></a>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <a href="#" class="btn btn-primary">Seguir</a>
      <div class="card-footer">
        <small class="text-muted">Se unio el  {{$row->created_at->format('d/m/Y')}} </small>
      </div>
    </div>
  @endforeach
  </div>
  @endif
</div>
@else
<div class="container-fluid" style="margin-top: 20vh;">
  <img class="mx-auto d-block" src="./images/no-results.png" alt="">
<h1 class="text-center" style="color: #c7c2c2;">No hay ningun usuario con ese nombre.</h1>
</div>
@endif

{{$usuarios->links()}}

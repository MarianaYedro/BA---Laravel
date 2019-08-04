@extends('front.template')

@section('pageTitle', 'Perfil de Usuario')

@section('link_style')
  <link rel="stylesheet" href="/css/perfil.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
@endsection

@section('mainContent')
<div class="perfilContainer">
  {{-- <img src="/images/pefil-usuario.png" alt="avatar" class="bg"> --}}
  <div class="avatar">
    <h1> Hola </h1>
    <img src="images/icons/icon-pefil.png" alt="avatar">
  </div>
@endsection

@section('secondContent')
  {{-- 1er bloque --}}
    <div class="line1">
      <div class="servicios">
        <a href="#"><img src="images/icons/icon-envios.png" alt="Envios"/></a>
        <h3>Seguimiento de entrega</h3>
      </div>

      <div class="servicios">
        <a href="#"><img src="images/icons/icon-lista.png" alt="Lista"/></a>
        <h3>Mis pedidos</h3>
      </div>
    </div>
    {{-- fin 1er bloque --}}

    {{-- segundo bloque --}}
    <div class="line2">
      <div class="servicios">
        <a href="#"><img src="images/icons/icon-tarjeta-dorada.png" alt="Pagos"/></a>
        <h3>Mis pagos</h3>
      </div>

      <div class="servicios">
        <a href="#"><img src="images/icons/icon-carrito.png" alt="Shop"/></a>
        <h3>Mis compras</h3>
      </div>
    </div>
    {{-- fin segundo bloque --}}
  </div>
@endsection

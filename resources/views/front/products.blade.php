@extends('front.template')

@section('pageTitle', 'Productos')

@section('link_style')
  <link rel="stylesheet" href="/css/products.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
@endsection


@section('header')
  <div class="titulo-productos">
    <h2>Nuestros Productos</h2>
    <form action="" target="">
      <input type="text" name="" value="" placeholder="Ingresá tu consulta">
    </form>
  </div>
@endsection

@section('mainContent')
    <div class="container-productos">
    <!-- Sidebar -->
    <div class="categoriasProductos">
      <h3>Categorías</h3>
      <h3>Varietales</h3>
      <ul>
        <li><a href="#"> Cabernet Sauvignon</a></li>
        <li><a href="#"> Malbec</a></li>
        <li><a href="#"> Merlot</a></li>

        <h3>Precios</h3>

        <li><a href="#"> Menor precio </a></li>
        <li><a href="#"> Mayor precio </a></li>
        <li><a href="#"> Promociones </a></li>
      </ul>
      </div>
    <!-- /#sidebar-wrapper -->
@endsection

@section('secondContent')
    <section class="cont1">
      <div class="caja1">
        <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
        <h3 class="h3">Don Juan</h3>
        <p>Cabernet Sauvignon</p>
        <strong><p class="precio">$780</p></strong>
        <button type="button" name="button" class="comprar">Comprar</button>
      </div>

      <div class="caja2">
        <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
        <h3 class="h3">Doña Angélica</h3>
        <p>Mablec</p>
        <strong><p class="precio">$780</p></strong>
        <button type="button" name="button" class="comprar">Comprar</button>
      </div>

      <div class="caja3">
        <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
        <h3 class="h3">Brava</h3>
        <p>Merlot</p>
        <strong><p class="precio">$780</p></strong>
        <button type="button" name="button" class="comprar">Comprar</button>
      </div>

      <div class="caja4">
        <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
        <h3 class="h3">El mosquita</h3>
        <p>Cabernet Sauvignon</p>
        <strong><p class="precio">$780</p></strong>
        <button type="button" name="button" class="comprar">Comprar</button>
      </div>
    </section>
@endsection

@section('thirdContent')
<section class="cont2">
  <div class="caja1">
    <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
    <h3 class="h3">Vino ....</h3>
    <p>Lorem ipsum dolor sit amet, consectetur</p>
    <strong><p class="precio">$780</p></strong>
    <button type="button" name="button" class="comprar">Comprar</button>
  </div>

  <div class="caja2">
    <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
    <h3 class="h3">Vino ....</h3>
    <p>Lorem ipsum dolor sit amet, consectetur</p>
    <strong><p class="precio">$780</p></strong>
    <button type="button" name="button" class="comprar">Comprar</button>
  </div>

  <div class="caja3">
    <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
    <h3 class="h3">Vino ....</h3>
    <p>Lorem ipsum dolor sit amet, consectetur</p>
    <strong><p class="precio">$780</p></strong>
    <button type="button" name="button" class="comprar">Comprar</button>
  </div>

  <div class="caja4">
    <img src="images/mockup-botella.png" alt="Imagen de botella de vino" class="botella">
    <h3 class="h3">Vino ....</h3>
    <p>Lorem ipsum dolor sit amet, consectetur</p>
    <strong><p class="precio">$780</p></strong>
    <button type="button" name="button" class="comprar">Comprar</button>
  </div>
</section>
</div>
@endsection

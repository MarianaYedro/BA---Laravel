<link rel="stylesheet" href="/css/navbar.css">
@if (!Request::is('index'))
<a href="index">
<img src="/images/logo-principal.png" alt="logo" class="logo">
</a>
@endif

<a href="#" class="toggle-nav">
  <span class="ion-navicon-round"></span>
</a>

<nav class="nav">
	<ul>
		<li><a href="index">Home</a></li>
		<li><a href="products">Productos</a></li>
		<li><a href="preguntas">Preguntas</a></li>
		<li><a href="login"><strong>Clientes</strong></a></li>
	</ul>
  @if (!Request::is('index', 'products', 'preguntas', 'register', 'login'))
  <div class="nav-perfil">
    <ul>
      <li><a href="#">Editar Perfil  <img src="images/icons/icon-perfil.png" alt="Envios"/></a></li>
      <li><a href="#">Cerrar sesión  <img src="images/icons/icon-logout.png" alt="Envios"/></a></li>
    </ul>
  </div>
  @endif
</nav>

{{-- <div class="boton"><a href="login.php"><img src="images/icons/icon-logout.png" alt="" style="max-width: 10px;"></a></div> --}}

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script>
  $('.toggle-nav').click(function (e) {
  e.preventDefault();
  $('.nav').slideToggle('fast');
  });
</script>

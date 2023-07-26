<!DOCTYPE html>
<html>
<head>
  <title> Productos de Resina - Inicio</title>
  <link rel="stylesheet" type="text/css" href="Estilos/estiloprincipal.css">
</head>
<body>
<header>
    <nav>
      <div class="logo">
        <a href="/SistemaResina/?clase=controladorpri&metodo=inicio">Bienvenido</a>
      </div>
      <ul class="menu">
        <li><a href="/SistemaResina/?clase=controladorcatalogo&metodo=catalogo">Catalogo</a></li>
        <li><a href="/SistemaResina/?clase=controladorregistro&metodo=ingresar">Iniciar sesión</a></li>
      </ul>
    </nav>
    <script src="https://kit.fontawesome.com/963c2d1583.js" crossorigin="anonymous"></script>
  </header>
<section class="menu-section">
    <h1 id="h1">Bienvenido a RESINA CREATIVA </h1>
    <div class="menu-items">
      <div class="menu-item">
        <img src="Estilos/Imagenes/logo.jpg">
      </div>
    </div>
  </section>
  <section><?php include_once($vista) ?></section>
  <script src="Modelo/JavaScript/scriptcatalogo.js"></script>
</body>
</html>

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
        <a href="#">Administracion</a>
      </div>
      <ul class="menu">
        <li><a href="/SistemaResina/?clase=controladorregistro&metodo=usuarios">Empleados</a></li>
        <li><a href="/SistemaResina/?clase=controladorreportes&metodo=consProdxDis">Reporte por color</a></li>
        <li><a href="/SistemaResina/?clase=controladorreportes&metodo=reporteprodcateg">Reporte categoria</a></li>
        <li><a href="/SistemaResina/?clase=controladoradministrador&metodo=Diseño">Diseño</a></li>
        <li><a href="/SistemaResina/?clase=controladoradministrador&metodo=productos">Productos</a></li>
        <li><a href="/SistemaResina/?clase=controladoradministrador&metodo=colores">Colores</a></li>
        <li><a href="/SistemaResina/?clase=controladoradministrador&metodo=fotos">Fotos</a></li>
        <li><a href="/SistemaResina/?clase=controladorregistro&metodo=cerrarsesion">cerrar sesión</a></li>

      </ul>
    </nav>
    <script src="https://kit.fontawesome.com/963c2d1583.js" crossorigin="anonymous"></script>
  </header>
<section class="menu-section">
    <h1 id="h1">Bienvenido Adminsitrador de Resina Creativa</h1>
    <div class="menu-items">
      <div class="menu-item">
        <img src="Estilos\Imagenes\logo.jpg" alt="Se mostrará una imagen en este apartado">
      </div>
    </div>
  </section>
<section><?php include_once($vista) ?></section>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title> Productos de Resina - Inicio</title>
  <link rel="stylesheet" type="text/css" href="Estilos/estiloadmincolores.css">
</head>
<body>
<header>
<nav>
      <div class="logo">
        <a href="#">Administracion</a>
      </div>
      <ul class="menu">
        <li><a href="/SistemaResina/?clase=controladoradministrador&metodo=salir">Salir</a></li>
      </ul>
    </nav>
    <script src="https://kit.fontawesome.com/963c2d1583.js" crossorigin="anonymous"></script>
  </header> 
<section class="menu-section">
<h1>Buscar Color</h1>

<form class="form" action="/SistemaResina/?clase=controladorreportes&metodo=consProdxDis" method="POST">
    <h2>REPORTES</h2>
    <div class="form-group">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="txtnombreFab" required>
    </div>
       
    <div class="form-group">
      <button type="submit">Generar</button>
    </div>
  </form>
<br></br>
<section><?php include_once($vista) ?></section>
</body>
</html>
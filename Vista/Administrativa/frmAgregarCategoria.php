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
        <a href="#">Categoria</a>
      </div>
      <ul class="menu">
        <li><a href="/SistemaResina/?clase=controladoradministrador&metodo=productos">Salir</a></li>
      </ul>
    </nav>
    <script src="https://kit.fontawesome.com/963c2d1583.js" crossorigin="anonymous"></script>
  </header>
<section class="menu-section">
<h1>Agregar Categoria</h1>

<form action="/SistemaResina/?clase=controladorcatalogo&metodo=Insertarcatalogo" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre de la categoria:</label>
    <input type="text" id="nombre" name="nombre" required><br><br>

    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" name="txtimagen" accept="image/*" required><br><br>
    <input type="submit" value="Agregar categoria">
 
</form>
<section><?php include_once($vista) ?></section>
</body>
</html>
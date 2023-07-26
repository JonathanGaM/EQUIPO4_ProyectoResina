<!DOCTYPE html>
<html>
<head>
  <title> Productos de Resina - Inicio</title>
  <link rel="stylesheet" type="text/css" href="Estilos/estiloadminfotos.css">
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
<h1>Agregar Fotografia</h1>

<form action="/SistemaResina/?clase=controladorfotos&metodo=Insertfotos" method="POST" enctype="multipart/form-data"method="POST">
    
<label for="imagen">Imagen:</label>
    <input type="file" id="imagen" name="txtimagen" accept="image/*" required><br><br>
    <label for="Producto">Producto:</label>   
     <select name="Producto">
             <?php while($filas = $Categ->fetch_assoc() ){ ?>
                 <option value="<?php echo $filas['idProducto']; ?>"><?php echo $filas['Nombre']; ?></option>
             <?php } ?>
     </select>
     <input type="submit" value="Agregar Fotos">

</form>
<section><?php include_once($vista) ?></section>

</body>
</html>
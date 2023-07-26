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
        <a href="/SistemaResina/?clase=controladoradministrador&metodo=productosXcolor">Producto Color</a>
      </div>
      <ul class="menu">
        <li><a href="/SistemaResina/?clase=controladoradministrador&metodo=productos">Salir</a></li>
      </ul>
    </nav>
    <script src="https://kit.fontawesome.com/963c2d1583.js" crossorigin="anonymous"></script>
  </header>
<section class="menu-section">
<h1>Seleccione un color a su producto</h1>

<form action="/SistemaResina/?clase=controladorproductosxcolor&metodo=ProductoColor" method="POST"  enctype="multipart/form-data">
<label for="nombre">Producto:</label>
     
     <select name="Producto">
             <?php while($filas = $Categ->fetch_assoc() ){ ?>
                 <option value="<?php echo $filas['idProducto']; ?>"><?php echo $filas['Nombre']; ?></option>
             <?php } ?>
     </select>

     <label for="nombre">Color:</label> 
     <select name="Color">
             <?php while($filas = $color->fetch_assoc() ){ ?>
                 <option value="<?php echo $filas['idColores']; ?>"><?php echo $filas['colores']; ?></option>
             <?php } ?>
     </select>
     <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" name="txtimagen" accept="image/*" required><br><br>

    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="txtprecio" min="0" step="0.01" required><br><br>


    <input type="submit" value="Agregar Color">
</form>

<section><?php include_once($vista) ?></section>

</body>
</html>
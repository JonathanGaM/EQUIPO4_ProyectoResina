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
        <a href="/SistemaResina/?clase=controladoradministrador&metodo=productos">Productos</a>
      </div>
      <ul class="menu">
      <li><a href="/SistemaResina/?clase=controladoradministrador&metodo=prodXdiseño">Productos por diseño</a></li>
      <li><a href="/SistemaResina/?clase=controladoradministrador&metodo=productosXcolor"> Productos por color</a></li>
      <li><a href="/SistemaResina/?clase=controladoradministrador&metodo=Agregarcatalogo">Agregar catalogo</a></li>
        <li><a href="/SistemaResina/?clase=controladoradministrador&metodo=salir">Salir</a></li>
      </ul>
    </nav>
    <script src="https://kit.fontawesome.com/963c2d1583.js" crossorigin="anonymous"></script>
  </header>
  <section class="menu-section">
<h1>Agregar Producto</h1>

<form action="/SistemaResina/?clase=controladorproductos&metodo=Insertarproductos" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="txtnombre" required><br><br>

    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" name="txtimagen" accept="image/*" required><br><br>

    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="txtprecio" min="0" step="0.01" required><br><br>

    <label for="descripcion">Descripcion:</label>
    <input type="text" id="descripcion" name="txtdescripcion" required><br><br>
     <label for="nombre">Categoria:</label>
     
    <select name="Categoria">
            <?php while($filas = $Categ->fetch_assoc() ){ ?>
                <option value="<?php echo $filas['idCategoria']; ?>"><?php echo $filas['categoria']; ?></option>
            <?php } ?>
    </select>
    
    <input type="submit" value="Agregar Producto">   

</form>
<section><?php include_once($vista) ?></section>
</body>
</html>
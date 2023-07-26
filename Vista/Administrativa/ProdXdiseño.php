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
        <li><a href="/SistemaResina/?clase=controladoradministrador&metodo=productos">Salir</a></li>
      </ul>
    </nav>
    <script src="https://kit.fontawesome.com/963c2d1583.js" crossorigin="anonymous"></script>
  </header>
<section class="menu-section">
<h1>Selecione un color a su producto</h1>

<form action="/SistemaResina/?clase=controladorproductoxdiseño&metodo=insertar_ProdxDiseño" method="POST">
<label for="nombre">Producto:</label>
     
     <select name="Producto">
             <?php while($filas = $Categ->fetch_assoc() ){ ?>
                 <option value="<?php echo $filas['idProducto']; ?>"><?php echo $filas['Nombre']; ?></option>
             <?php } ?>
     </select>

     <label for="nombre">Diseño:</label> 
     <select name="Diseño">
             <?php while($filas = $Form->fetch_assoc() ){ ?>
                 <option value="<?php echo $filas['idDiseño']; ?>"><?php echo $filas['formas']; ?></option>
             <?php } ?>
     </select>
         <input type="submit" value="Agregar Diseño">
</form>


    <section><?php include_once($vista) ?></section>
</body>
</html>
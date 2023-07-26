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
<h1>Agregar Color</h1>

<form action="/SistemaResina/?clase=controladorcolores&metodo=agregarcolores" method="POST">
    <label for="Color">Nombre del Color:</label>
    <input type="text" id="color" name="txtcolor" required placeholder="agregar color"><br><br>

    <input type="submit" value="Agregar Color">
</form>
<br></br>
<div class="table-container">
  <table class="centered-table">
    <thead>
      <tr>
        <th>Código_Color</th>
        <th>Nombre color</th>
        <th>Acciones</th>

      </tr>
    </thead>
    <tbody>
      <?php
            foreach ($consultacolor as $c) {
              echo '<form class="form" action="/SistemaResina/?clase=controladorcolores&metodo=actualizarxeliminar" method="POST">';
                echo '<tr>';
                echo '<td> <input type="text" name="txtcodigo" value="'.$c['idColores'].'" readonly> </td>';
                echo '<td> <input type="text" name="txtcolor" value="'.$c['colores'].'" ></td>';
                echo '<td width=250>';
                echo '<button type="submit" name="btnActualizar" value="btnActualizar" class="submit-button" >Actualizar</button>';
                echo '&nbsp;';
                echo '<button type="submit" name="btnEliminar" value="btnEliminar" class="submit-button">Eliminar</button>';
                echo '</td>';
                echo '</tr>';
                echo '</form>';
            }
      ?>
    </tbody>
  </table>
</div>
<br><br><br>
<section><?php include_once($vista) ?></section>
</body>
</html>
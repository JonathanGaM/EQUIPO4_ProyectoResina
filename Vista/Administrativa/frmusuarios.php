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
        <a href="#">Usuarios</a>
      </div>
      <ul class="menu">
      <li><a href="/SistemaResina/?clase=controladoradministrador&metodo=salir">Salir</a></li>
      </ul>
    </nav>
    <script src="https://kit.fontawesome.com/963c2d1583.js" crossorigin="anonymous"></script>
  </header> 
<section class="menu-section">
<h1>Agregar usuario</h1>
<form class="form" action="/SistemaResina/?clase=controladorregistro&metodo=crearempleados" method="POST">
    <label for="nombre">Nombre:</label>
    <input 
    type="text" 
    pattern="[A-Za-z] ?+"
    id="nom"
    placeholder="Nombre completo"
    required
    minlength="3"
    maxlength="25"
    name="txtNombre"
    />
    <br><br>
    <label for="Apaterno">Apellido Paterno:</label>
    <input 
     type="text"
     pattern="[A-Za-z] ?+"
     id="AP"
     placeholder="Apellido Paterno"
     required
     minlength="5"
     maxlength="25"
     name="txtAP"
    />
    <br><br>
    <label for="Amaterno">Apellido Materno:</label>
    <input
     type="text"
     pattern="[A-Za-z] ?+"
     id="AM"
     placeholder="Apellido Materno"
     required
     minlength="5"
     maxlength="25"
     name="txtAM"
     />
     <label for="rfc">Rfc:</label>
    <input 
    type="text" 
    pattern="[A-Za-z] ?+"
    id="r"
    placeholder="RFC"
    required
    minlength="10"
    maxlength="13"
    name="txtRFC"
    />
    <br><br>
    <label for="user">Usuario:</label>
    <input type="text"  
    pattern="[A-Za-z] ?+"
    id="US"
    placeholder="usuario"
    required
    minlength="5"
    maxlength="25"
    autocomplete="off"
    name="txtUser"/>

    <br><br>
    <label for="name">Contarseña:</label>
    <input type="password"  
    pattern="[A-Za-z] ?+"
    id="pass"
    placeholder="ingrese su contraseña"
    required
    minlength="5"
    maxlength=" 25"
    name="txtPass"/>
    <br><br>
    <label for="tel">Telefono:</label>
    <input type="tel" pattern="[0-9]{8,12}" required name="txtTel"/>
    <br><br>
    <label for="tel">Tipo:</label>
    <div class="form-group">
        <select name="selectTipo" class="form-control">
                <option value="administrador">Administrador</option>
                <option value="empleado">empleado</option>
            </select>
    </div>
    <br><br>
    <input type="submit" value="Crear cuenta"  id="boton" >
    <br><br>   
</form>
<br></br>
<div class="table-container">
  <table class="centered-table">
    <thead class="tex">
      <tr class="te">
        <th>id Empleado</th>
        <th>Nombre</th>
        <th>Apaterno</th>
        <th>Amaterno</th>
        <th>Telefono</th>
        <th>rfc</th>
        <th>Acciones</th>

      </tr>
    </thead>
    <tbody>
      <?php
            foreach ($consultaempleado as $x) {
              echo '<form class="form" action="/SistemaResina/?clase=controladorregistro&metodo=actualizarXeliminar" method="POST">';
                echo '<tr>';
                echo '<td> <input type="text" name="txtcodigo" value="'.$x['idEmpleado'].'" readonly> </td>';
                echo '<td> <input type="text" name="txtNombre" value="'.$x['Nombre'].'" ></td>';
                echo '<td> <input type="text" name="txtAP" value="'.$x['Apaterno'].'" ></td>';
                echo '<td> <input type="text" name="txtAM" value="'.$x['Amaterno'].'" ></td>';
                echo '<td> <input type="text" name="txtTel" value="'.$x['telefono'].'" ></td>';
                echo '<td> <input type="text" name="txtRFC" value="'.$x['rfc'].'" ></td>';
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
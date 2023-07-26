<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Usuario</title>
    <link rel="stylesheet" href="Estilos/estiloregistro.css">
</head>
<body>  
  <div class="container">
    <h2>Registro de usuarios</h2>
  <form class="form" action="/SistemaResina/?clase=controladorregistro&metodo=crearclientes" method="POST">
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


    <input type="submit" value="Crear cuenta"  id="boton" >
    <br><br>
    
   
</form>
</div>
</body>
</html>
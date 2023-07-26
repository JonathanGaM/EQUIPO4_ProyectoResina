<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Estilos/estilologin.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <img src="Estilos/Imagenes/login.png" alt="">
        <form class="form" action="/SistemaResina/?clase=controladorregistro&metodo=Acceder" method="POST">
            <label for="username">Usuario:</label>
            <input type="text" id="username" name="txtNombre" required >
            
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="txtPass" required >
            <br>
            <br>
            <input type="submit" value="Iniciar sesion">            
        </form>
        <br>
        <a href="/SistemaResina/?clase=controladorregistro&metodo=crearclientes">¿no tienes cuenta? registrate ahora mismo</a>   
    </div>
</body>
</body>
</html>
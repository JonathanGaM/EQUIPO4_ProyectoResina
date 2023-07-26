<?php
        require_once 'Controlador/controladorpublico.php';
?>

      <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->
<!DOCTYPE html>
<html lang="ES">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESINA CREATIVA</title>
  <link rel="stylesheet" href="Estilos/estilosplantillapublica.css">

</head>
<body>
<header>
  <!-- aqui se modifico -->
  <div id="main-menu">
			<nav id="menu-area"><div class="logo">
            <a href="#">Bienvenido</a>
          </div>
				<ul><li><a href="/SistemaResina/?clase=controladorpublico&metodo=Consultacatalogo">Categoria</a></li></ul>
         <ul><li><a href="#">Pedido</a></li></ul>
        <ul><li><a href="#">Carrito</a></li></ul>
        
        <ul><li><a href="/SistemaResina/?clase=controladorregistro&metodo=cerrarsesion">Cerrar sesión</a></li></ul>
			</nav>
		</div><!-- aqui termino la modificacion -->
    <script src="https://kit.fontawesome.com/963c2d1583.js" crossorigin="anonymous"></script>
  </header>

    <!--contenedor del item seleccioonado -->
  </section>
      <!--xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-->

  <br><br>
  <img src="Estilos\Imagenes\logo.jpg" alt="Se mostrará una imagen en este apartado">
    <br><div class="ed">
  <?php
      ?>
      </div><br> 

      
  <section><?php include_once($vista) ?></section>

  <script src="Modelo/JavaScript/scriptcatalogo.js"></script>
</body>
</html>

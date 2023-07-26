<?php
        require_once 'Controlador/controladorpublico.php';
?>
<!DOCTYPE html>
<html lang="ES">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESINA CREATIVA</title>
  <link rel="stylesheet" href="Estilos/catalogos.css">
  <link rel="stylesheet" href="Estilos/estilocatalogo.css">
</head>
<body>
<header>
    <nav>
      <div class="logo">
        <a href="/SistemaResina/?clase=controladorpublico&metodo=Consultacatalogo">Catalogo</a>
      </div>
      <ul class="menu">
        <li><a href="/SistemaResina/?clase=controladorpublico&metodo=salir">Salir</a></li>
      </ul>
    </nav>
    <script src="https://kit.fontawesome.com/963c2d1583.js" crossorigin="anonymous"></script>

  </header>
  <div class="ed">
  <?php

            while ($row= $Consulta->fetch_assoc()) {

              ?>
             <div class="catalogos" id="catalogos">

                <img class= "ConsCat" src="imagenes/fotos<?php echo $row['imagen']; ?>" alt="imagen del producto">

                <div class ="Cata">
                <p value="<?php echo $row['categoria']; ?>"><?php echo $row['categoria']; ?></p>
                <a class ="Boton" href="/SistemaResina/?clase=controladorpublico&metodo=consultafundasP&titulo=<?php echo $row['categoria']?>"> Ver productos</a>
                </div>
                
              
             </div>
            <?php     
            }

      ?>
      </div>
      <br><br>
      <section><?php include_once($vista) ?></section>

  <script src="Modelo/JavaScript/scriptcatalogo.js"></script>
</body>
</html>

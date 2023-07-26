<!DOCTYPE html>
<html lang="ES">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESINA CREATIVA</title>
  <link rel="stylesheet" href="Estilos/estilocatalogo.css">
  <link rel="stylesheet" href="Estilos/catalogos.css">
</head>
<body>
<header>
    <nav>
      <div class="logo">
        <a href="/SistemaResina/?clase=controladorcatalogo&metodo=Consultacatalogo">Catalogo</a>
      </div>
      <ul class="menu">
        <li><a href="/SistemaResina/?clase=controladorpublico&metodo=Consultacatalogo">Salir</a></li>
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
                <p value="<?php echo $row['Nombre']; ?>"><?php echo $row['Nombre']; ?></p>
           
                <a class ="Boton" href="/SistemaResina/?clase=controladorpublico&metodo=detallesProdP&nomprod=<?php echo $row['Nombre']?>"> Ver productos</a>
                

                </div>
                
              
             </div>
            <?php
            }

      ?>
      </div>

  
  <footer class="pie-pagina">
  <div class="grupo-1">
    <div class="box">
      <figure>
        <a href="#">
        <img src="Estilos/Imagenes/logo.jpg" alt="logo de SLee Dw" >
        </a>
      </figure>
    </div>
    <div class="box">
      <h2>SOBRE NOSOTROS</h2>
      <p>Políticas:
<p>•	Garantizar que los productos con resina cumplan con todas las regulaciones y normativas locales e internacionales.</p>
<p>•	Estándares de fabricación</p>
<p>•	Control de calidad</p>
<p>•	Establecer protocolos para la comunicación de riesgos y casos de intoxicación relacionados con los productos con resina.</p>
<p>•	Actualizar y adaptar las políticas de venta de productos con resina según sea necesario para garantizar la seguridad y satisfacción del cliente.</p>
    </div>
    <div class="box">
    <h2>SIGUENOS</h2>
    <div class="red-social">
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-instagram"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-youtube"></a>
    </div>
    </div>
  </div>
  <div class="grupo-2">
    <small>Derechos de autor &copy; 2023 Resina creativa. Todos los derechos reservados</small>
  </div>
  <br>
</footer>
  <script src="Modelo/JavaScript/scriptcatalogo.js"></script>
</body>
</html>

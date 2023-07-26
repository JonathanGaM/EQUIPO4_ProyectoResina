<?php
        require_once 'Controlador/controladorpublico.php';
?>
<!DOCTYPE html>
<html lang="ES">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RESINA CREATIVA</title>
  <link rel="stylesheet" href="Estilos/catalogos2.css">
  <link rel="stylesheet" href="Estilos/estilocatalogo2.css">
</head>
<body>
<header>
    <nav>
      <div class="logo">
        <a href="/SistemaResina/?clase=controladorcatalogo&metodo=catalogo">Catalogo</a>
      </div>
      <ul class="menu">
        <li><a href="/SistemaResina/?clase=controladorcatalogo&metodo=catalogo">Salir</a></li>
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
            <div class ="texto">
            <div class ="Cata">
            
            <p value="<?php echo $row['Nombre']; ?>"><?php echo $row['Nombre']; ?></p>
            </div>

            <div class ="Cata2">
            <p class="titulo">Precio:</p>
            <p class="precio" value="<?php echo $row['precio']; ?>">$<?php echo $row['precio']; ?></p>
            </div>
            <div class ="Cata3">
            <p class="titulo">Color:</p>
            <p class="sub" value="<?php echo $row['colores']; ?>"><?php echo $row['colores']; ?></p>
            </div>
            <div class ="Cata5">
            <p class="titulo">Diseño:</p>
            <p class="sub"value="<?php echo $row['diseños']; ?>"><?php echo $row['diseños']; ?></p>  
            </div> 
            <div class ="Cata4">
            <p class="titulo">Descripcion:</p>
            <p class="sub" value="<?php echo $row['descripcion']; ?>"><?php echo $row['descripcion']; ?></p>  
            </div>  
            </div>       

            </div>
            
          
         </div>
        <?php
        }

  ?>
      </div>

      <section><?php include_once($vista) ?></section>

  <script src="Modelo/JavaScript/scriptcatalogo.js"></script>
</body>
</html>

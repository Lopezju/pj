<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pj Saltillo</title>
    <link rel="stylesheet" href="build/css/app.css">
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    
<header class="header">
        <div class="header__contenedor">
            <nav class="header__navegacion">
                <a href="/" class="header__enlace"></a>
                <a href="/registro" class="header__enlace"></a>
                <a href="https://drive.google.com/file/d/1vbSlzh4wkZGpYwkOsnzYQpX691YzMSFo/view?usp=sharing" target="_blank" class="header__enlace"></a>
            </nav>
           <div class="header__contenido">
            <a href="/">
                <div class="header__logo">
                   <img src="build/img/Lo.png" alt="">
                </div>
            </a>
            <p class="header__texto">
                 Septiembre 14-15 - 2024
            </p>
            
           <button type="button" class="header__boton" id="vicaria">Registrar</button> 
           </div>
           
        </div>
    </header>
    <div class="barra">
        <div class="barra__contenido">
            <a  href="/">
             <h2 class="barra__logo">
              
             </h2>
            </a>
            <nav class="navegacionregistro">
                <a href="/" class="navegacionregistro__enlace">Inicio</a>
                <a href="https://drive.google.com/file/d/1zdnmtm7AUmats1oTUa5ikj0iFXj6zfgg/view?usp=sharing" target="_blank" class="navegacionregistro__enlace">Contrato</a>
                <!--<a href="/workshops" class="navegacionregistro__enlace">Platicas</a>-->
                <a href="https://drive.google.com/file/d/1vbSlzh4wkZGpYwkOsnzYQpX691YzMSFo/view?usp=sharing" target="_blank" class="navegacionregistro__enlace">Rutas</a>
            </nav>
        </div>
    </div>

    <?php include_once __DIR__.'/../templates/footer.php';?>

    <!--<footer class="footer seccion">
         <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="/" class="link">Inicio</a>
                <a href="/registro" class="link">JDJ</a>
            </nav>
         </div>
    </footer>-->

            <?php $script = '
                  <script src="build/js/registro.js"></script>
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.debug.js"></script>
                  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                  <script src="https://kit.fontawesome.com/117cd1f799.js" crossorigin="anonymous"></script>s
            ';
            ?>
            
        </body>
        </html>
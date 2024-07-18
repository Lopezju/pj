<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pj Saltillo | <?php echo $titulo; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="build/css/app.css">
</head>
<body>
    
    <header class="headerP inicio">
        <div class="contenedor contenido-header">
           <div class="barrah">
            <a href="/" class="">
                <img src="build/img/logo1.png" alt="">
            </a> 
            
            <nav class="navegacion">
                <a href="/" class="link">Inicio</a>
                <a href="/registro" class="link">JDJ</a>
                <!--<a href="/login" class="link">Login</a>-->
            </nav>
           </div>
           <h1 class="text"></h1>
        </div>
    </header>
    

   <div class="video" >
   
        <div class="overlay">
        
            <div class="contenedor contenido-video">
               <img src="build/img/acutis.png" alt="">
                <h2>Pastoral Juvenil Saltillo</h2>
                <p>Somos LLamados a la Santidad</p>
                <!--<ul class="links">
                <li>
                  <a href="#"
                    ><ion-icon class="icon" name="logo-facebook"></ion-icon
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><ion-icon class="icon" name="logo-instagram"></ion-icon
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><ion-icon class="icon" name="logo-youtube"></ion-icon
                  ></a>
                </li>
                <li>
                  <a href="#"
                    ><ion-icon class="icon" name="logo-twitter"></ion-icon
                  ></a>
                </li>
              </ul>-->
            </div>
        </div>
       
    </div>

    
    <?php include_once __DIR__.'/../templates/footer.php';?>
         <!--<video autoplay muted loop>
            <source src="build/video/portada.mp4" type="video/mp4"/>
        </video>-->

        <script src='https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js'></script>
        <script src='https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js'></script>
        <script src='https://assets.codepen.io/16327/gsap-latest-beta.min.js'></script>
<script src='https://assets.codepen.io/16327/Observer.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/16327/SplitText3.min.js'></script><script  src="./script.js"></script>
    
</body>
</html>
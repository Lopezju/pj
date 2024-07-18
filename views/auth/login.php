

<div class="contenedor login">
<div class="barrah">
            <a href="/" class="">
                <img src="build/img/logo1.png" alt="">
            </a> 
</div>
   <?php include_once __DIR__.'/../templates/nombre-sitio.php';?>

    <div class="contenedor-sm">
    <?php include __DIR__ .'/../templates/alertas.php'; ?>
        <p class="descripcion-pagina">Iniciar Sesión</p>

        <form class="formulario-login" method="POST" action="/login" novalidate>
            <div class="campo">
                <label for="email">Email:</label>
                <input 
                     type="email"
                     id="email"
                     placeholder="Email"
                     name="email"
                     />
            </div>

            <div class="campo">
                <label for="password">Password:</label>
                <input 
                     type="password"
                     id="password"
                     placeholder="Password"
                     name="password"
                     />
            </div>

            <input type="submit" class="boton" value="Iniciar Sesión">
        </form>
        <div class="acciones">
            <a href="/crear">¿Aún no tienes una cuenta?  ¡Crea una!</a>
            <a href="/">Inicio</a>
        </div>
    </div>
</div>

<div class="contenedor crear">
        <div class="barrah">
                    <a href="/" class="">
                        <img src="build/img/logo1.png" alt="">
                    </a> 
        </div>
    <h1 class="titulo">Crear Cuenta</h1>
    <p class="tagline"></p>

    


    <div class="contenedor-sm">
    <?php include __DIR__ .'/../templates/alertas.php'; ?>
        <p class="descripcion-pagina">Iniciar Sesión</p>

        <form class="formulario-login" method="POST" action="/crear">
        <div class="campo">
                <label for="nombre">Nombre:</label>
                <input 
                     type="text"
                     id="nombre"
                     placeholder="Nombre"
                     name="nombre"
                     value="<?php echo $usuario->nombre;?>"
                     />
            </div>



            <div class="campo">
                <label for="email">Email:</label>
                <input 
                     type="email"
                     id="email"
                     placeholder="Email"
                     name="email"
                     value="<?php echo $usuario->email;?>"
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

            <div class="campo">
                <label for="password2">Repetir Password:</label>
                <input 
                     type="password"
                     id="password2"
                     placeholder="Repite tu Password"
                     name="password2"
                     />
            </div>


            <input type="submit" class="boton" value="Iniciar Sesión">
        </form>
        <div class="acciones">
            <a href="/login">Inicia Sesión</a>
            <a href="/">Inicio</a>
        </div>
    </div>
</div>

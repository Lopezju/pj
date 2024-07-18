<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor-boton">
    <a class="dashboard__boton" href="/admin/ponentes">
        <i class="fa-solid fa-circle-arrow-left"></i>
        volver
    </a>
</div>

<div class="dashboard__formulario">
    <?php 

        include_once __DIR__ . './../../templates/alertas.php'; 

    ?>
    <form method="POST" enctype="multipart/form-data" action="/admin/ponentes/crear" class="formulariop">
        <?php include_once __DIR__ . '/formulario.php'; ?>

       <input class="formulariop__submit formulariop__submit--registrar" type="submit"  value="Registrar ponente">
    </form>

</div>
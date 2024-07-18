<h2 class="dashboard__heading"><?php echo $titulo; ?></h2>

<div class="dashboard__contenedor">
   
    <?php if(!empty($registros)) { ?>
        
        <table class="table" id="registrosp">
            <thead class="table__thead">
                <tr>
                    <th scope="col" class="table__th">Nombre</th>
                    <th scope="col" class="table__th">Vicaria</th>
                    <th scope="col" class="table__th">Parroquia</th>
                    <th scope="col" class="table__th">Telefono</th>
                </tr>
            </thead>

            <tbody class="table__tbody">
                <?php foreach($registros as $registro) { ?>
                    <tr class="table__tr">
                        <td class="table__td">
                            <?php echo $registro->nombre?>
                        </td>
                        <td class="table__td">
                            <?php echo $registro->vicaria; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $registro->parroquia; ?>
                        </td>
                        <td class="table__td">
                            <?php echo $registro->telefono; ?>
                        </td>
                    </tr>

                <?php } ?>
            </tbody>
        </table>
    <?php } else { ?>
        <p class="text-center">No Hay Registros Aún</p>
    <?php } ?>
</div>

<button onclick="exportTableToExcel('miTabla', 'datos.xls')">Exportar a Excel</button>

<?php 
    echo $paginacion;
?>
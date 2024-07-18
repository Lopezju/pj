<fieldset class="formulariop__fieldset">
    <legend class="formulariop__legend">Informacion Personal</legend>
    <div class="formulariop__campo">
            <label for="nombre" class="formulariop__label">Nombre</label>
            <input 
                type="text" 
                id="nombre" 
                name="nombre"
                class="formulariop__input" 
                placeholder="Nombre Ponente"
                value="<?php echo $ponente->nombre ?? '';?>" 

            />
    </div>
    <div class="formulariop__campo">
            <label for="apellido" class="formulariop__label">Apellido</label>
            <input 
                type="text" 
                id="apellido" 
                name="apellido"
                class="formulariop__input" 
                placeholder="Apellido Ponente"
                value="<?php echo $ponente->apellido ?? '';?>" 

            />
    </div>

    <div class="formulariop__campo">
            <label for="ciudad" class="formulariop__label">Ciudad</label>
            <input 
                type="text" 
                id="ciudad" 
                name="ciudad"
                class="formulariop__input" 
                placeholder="Ciudad Ponente"
                value="<?php echo $ponente->ciudad ?? '';?>" 

            />
    </div>

    <div class="formulariop__campo">
            <label for="pais" class="formulariop__label">País</label>
            <input 
                type="text" 
                id="pais" 
                name="pais"
                class="formulariop__input" 
                placeholder="País Ponente"
                value="<?php echo $ponente->pais ?? '';?>" 

            />
    </div>

    <div class="formulariop__campo">
            <label for="imagen" class="formulariop__label">Imagen</label>
            <input 
                type="file" 
                id="imagen" 
                name="imagen"
                class="formulariop__input formulariop__input--file" 
                placeholder="Fotografia Ponente"
                value="<?php echo $ponente->imagen ?? '';?>" 

            />
    </div>
</fieldset>

<fieldset class="formulariop__fieldset">
    <legend class="formulariop__legend">Información Extra</legend>
    <div class="formulariop__campo">
            <label for="tags_input" class="formulariop__label">Áreas de Experiencia (separadas por coma)</label>
            <input 
                type="text" 
                id="tags_input" 
                class="formulariop__input" 
                placeholder="Ej. psicologia, Neorolenguistica"
            />
            <div id="tags" class="formulariop__listado"></div>
            <input type="hidden" name="tags" value="<?php echo $ponente->tags ?? '';?>" />

    </div>
 </fieldset>    

 <fieldset class="formulariop__fieldset">
    <legend class="formulariop__legend">Redes Sociales</legend>
    <div class="formulariop__campo">
         <div class="formulariop__contenedor-icono">
            <div class="formulariop__icono">
                <i class="fa-brands fa-facebook"></i>
            </div>
            <input 
                type="text" 
                name="redes[facebook]"
                class="formulariop__input--sociales" 
                placeholder="Facebook"
                value="<?php echo $ponente->facebook ?? '';?>" 

            />
         </div>  
    </div>
    <div class="formulariop__campo">
         <div class="formulariop__contenedor-icono">
            <div class="formulariop__icono">
                <i class="fa-brands fa-twitter"></i>
            </div>
            <input 
                type="text" 
                name="redes[twitter]"
                class="formulariop__input--sociales" 
                placeholder="Twitter"
                value="<?php echo $ponente->twitter ?? '';?>" 

            />
         </div>  
    </div>

    <div class="formulariop__campo">
         <div class="formulariop__contenedor-icono">
            <div class="formulariop__icono">
                <i class="fa-brands fa-youtube"></i>
            </div>
            <input 
                type="text" 
                name="redes[youtube]"
                class="formulariop__input--sociales" 
                placeholder="Youtube"
                value="<?php echo $ponente->youtube ?? '';?>" 

            />
         </div>  
    </div>
    
    <div class="formulariop__campo">
         <div class="formulariop__contenedor-icono">
            <div class="formulariop__icono">
                <i class="fa-brands fa-instagram"></i>
            </div>
            <input 
                type="text" 
                name="redes[instagram]"
                class="formulariop__input--sociales" 
                placeholder="Instagram"
                value="<?php echo $ponente->instagram ?? '';?>" 

            />
         </div>  
    </div>

    <div class="formulariop__campo">
         <div class="formulariop__contenedor-icono">
            <div class="formulariop__icono">
                <i class="fa-brands fa-tiktok"></i>
            </div>
            <input 
                type="text" 
                name="redes[tiktok]"
                class="formulariop__input--sociales" 
                placeholder="tiktok"
                value="<?php echo $ponente->tiktok ?? '';?>" 

            />
         </div>  
    </div>

 </fieldset>       
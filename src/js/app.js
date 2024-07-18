(function(){
    
    const nuevoRegistro = document.querySelector('#vicaria');
    nuevoRegistro.addEventListener('click', mostrarFormulario);

    function mostrarFormulario() {
        const modal = document.createElement('DIV');
        modal.classList.add('modal');
        modal.innerHTML=`
    
         <form class="formulario">
                <fieldset>
                    <legend>Información Personal</legend>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Tu nombre">

                    <label for="edad">Edad: </label>
                    <input type="number" name="edad" id="edad" placeholder="Tu edad" >

                    <label for="parroquia">Parroquia: </label>
                    <input type="text" name="parroquia" id="parroquia" placeholder="Tu parroquia">

                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" placeholder="Tu Teléfono">

                     <label for="talla">⁠Talla de playera (unisex):</label>
                    <select name="talla">
                        <option value ="">-- Selecciona --</option>
                        <option value ="xs">xs</Option>
                        <option value ="s">s</Option>
                        <option value ="m">m</Option>
                        <option value ="l">l</Option>
                        <option value ="xl">xl</Option>
                        <option value ="2xl">2xl</Option>
                    </select>    

                  </fieldset>

                  <fieldset>
                  <legend>Transporte</legend>
                        <label for="usarias">⁠¿Usarías transporte?</label>
                        <input type="text" id="usarias" placeholder="Transporte">

                    <label for="ruta">⁠¿Que ruta te beneficiaría?</label>
                    <input type="text" id="ruta" placeholder="Ruta">
                </fieldset>
                  <fieldset>
                        <legend>Salud</legend>
                            <label for="enfermedad">⁠¿Padeces alguna enfermedad? Especifica:</label>
                            <input type="text" id="enfermedad" placeholder="Especifica" >

                            <label for="medicamento">⁠¿Tomas algún medicamento? Especifica:</label>
                            <input type="text" id="medicamento" placeholder="Especifica" >

                            <label for="telefono">⁠Contacto de emergencia:</label>
                            <input type="tel" id="contacto" placeholder="Teléfono" >
                  </fieldset>
                  <fieldset>
                   <legend>Te llama..</legend>
                

                    <label for="llama">¿Por cuál nombre crees que te llama Jesús?</label>
                    <input type="text" id="llama" placeholder="Nombre" >
                   </fieldset>
                    
                

                


                <input type="submit" value="Enviar" class="boton boton-verde">
                <input type="submit" value="Cancelar" class="boton boton-verde">

                </form>
        
        `;

        setTimeout(() => {
           const formulario = document.querySelector('.formulario');
           formulario.classList.add('animar');
        }, 0);

        document.querySelector('body').appendChild(modal);
    }

        async function agregarRegistro(registro){
        const datos = new FormData();
        datos.append('nombre', 'Juan');

        try {
            const url = 'http://localhost:3000/api/registrar';
            const respuesta = await fetch (url, {
                method:'POST',
                body:datos
            });
            console.log(respuesta);
        } catch (error) {
            console.log(error);
        }
    }
})();
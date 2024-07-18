(function(){

   
  var parroquias_1=new Array("-","San Francisco de Asís","Cristo Rey","San José","Nuestra Señora de San Juan de los Lagos","Santo Cristo del Ojo de Agua","Nuestra Señora de Lourdes","Nuestra Señora del Tepeyac","Santo Niño de la Salud","Nuestra Señora de Schoenstatt","Nuestra Señora de la Soledad","Nuestra Señora del Sagrado Corazón","Santa María de las Parras","San Juan Bautista","Templo Santa Cruz","Templo Nuestra Señora del Refugio","Templo Ascensión del Señor");
  var parroquias_2=new Array("-","Nuestra Señora del Sagrado Corazón","Sagrada Familia","Santa María Reyna","San Antonio de Padua","San Patricio Misionero","Nuestra Señora de San Juan de los Lagos","Medalla Milagrosa","Inmaculada Concepción","San Francisco de Asís","San Nicolás de Tolentino","Templo San Pedro Apóstol","Templo Corpus Christi");
  var parroquias_3=new Array("-","Santiago Apóstol","San Carlos Borromeo","Sagrado Corazón de Jesús","Nuestra Señora del Buen Suceso","San José Obrero","San Antonio de Padua","Nuestra Señora de San Juan de los Lagos","Verbo Encarnado","Santuario de Guadalupe","Espíritu Santo","Divina Providencia","Sagrada Familia","Nuestra Señora del Refugio","Nuestra Señora del Sagrado Corazón","San Juan Bautista de la Salle", "San Isidro Labrador","San Francisco de Asís");
  var parroquias_4=new Array("-","Nuestra Señora del Perpetuo Socorro","Santa María Goretti","San Patricio","Nuestra Señora de Atocha","San Miguel","Santa María Magdalena","San Alfonso María de Ligorio","Santa Teresita del Niño Jesús","San Andrés Apóstol","Nuestra Señora del Refugio","San Felipe de Jesús","Templo Nuestra Señora del Sagrado Corazón","Templo San Charbel");
  var parroquias_5=new Array("-","San Buenaventura","San José","Nuestra Señora de las Victorias","Santa Catalina de Siena","Nuestra Señora del Refugio","Templo Cristo Rey","Templo San Cayetano");
  var parroquias_6=new Array("-","San Isidro Labrador","Sagrado Corazón de Jesús","Nuestra Señora del Rosario","Divina Providencia","San Pablo Apóstol","San Antonio de Padua","Señor de la Misericordia","Santa María Reina de los Apóstoles","Santiago Apóstol","Templo Nuestra Señora de los Dolores","Templo San Francisco de Asís");
  var parroquias_7=new Array("-","Sagrario de la Catedral","San Esteban","Santísima Trinidad","Sagrado Corazón de Jesús","Jesús Obrero","Espíritu Santo","Santa María","Nuestra Señora  de Fátima","Santiago Apóstol","Templo San Martín de Porres","Templo San Judas Tadeo","Templo San Juan Nepomuceno","Templo Padre Nuestro","Templo Nuestra Señora  de la Luz","Templo Calvario","Templo Santa Ana","Templo Santuario de Guadalupe","Templo Nuestra Señora del Carmen","Templo San Francisco de Asís");

  var todasParroquias = [
    [],
    parroquias_1,
    parroquias_2,
    parroquias_3,
    parroquias_4,
    parroquias_5,
    parroquias_6,
    parroquias_7,

  ];
  
  function cambia_parroquia(){ 
    
    //tomo el valor del select del pais elegido 
    var vicaria
    vicaria = document.f1.vicaria[document.f1.vicaria.selectedIndex].value 
    //miro a ver si el pais está definido 
    if (vicaria != 0) { 
       //si estaba definido, entonces coloco las opciones de la provincia correspondiente. 
       //selecciono el array de provincia adecuado 
       mis_parroquias=todasParroquias[vicaria]
       //calculo el numero de provincias 
       num_parroquias = mis_parroquias.length 
       //marco el número de provincias en el select 
       document.f1.parroquias.length = num_parroquias
       //para cada provincia del array, la introduzco en el select 
       for(i=0;i<num_parroquias;i++){ 
          document.f1.parroquias.options[i].value=mis_parroquias[i] 
          document.f1.parroquias.options[i].text=mis_parroquias[i] 
       }	
    }else{ 
       //si no había provincia seleccionada, elimino las provincias del select 
       document.f1.parroquias.length = 1 
       //coloco un guión en la única opción que he dejado 
       document.f1.parroquias.options[0].value = "-" 
       document.f1.parroquias.options[0].text = "-" 
    } 
    //marco como seleccionada la opción primera de provincia 
    document.f1.parroquias.options[0].selected = true 
}
    
    const nuevoRegistro = document.querySelector('#vicaria');
    nuevoRegistro.addEventListener('click', mostrarFormulario);

    const select =document.querySelector('#vicaria');
    select.addEventListener('click', onload);

   
    function onload(){
        const select2 =document.querySelector('#vic');
        select2.addEventListener('change', cambia_parroquia);
      }

    
    function mostrarFormulario() {
        
    
    
 

        const modal = document.createElement('DIV');
        modal.classList.add('modal');
        
        modal.innerHTML=`
    
         <form class="formulario" name="f1" data-bs-focus="false">
                <fieldset>
                    <legend>Información Personal</legend>
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" id="registro" placeholder="Tu nombre" required>
                    
                    <label for="edad">Edad: </label>
                    <input type="number" name="edad" id="edad" placeholder="Tu edad" required>

                    <label for="vic">Vicaria:</label>
                      <select id="vic" name="vicaria"  required>
                        <option value ="0">-- Selecciona --</option>
                        <option value ="1">Carlos Dávila</Option>
                        <option value ="2">Fray Juan Larios</Option>
                        <option value ="3">Nuestra Señora de Guadalupe</Option>
                        <option value ="4">Patricio Quinn</Option>
                        <option value ="5">Sagrada Familia</Option>
                        <option value ="6">San Juan Pablo II</Option>
                        <option value ="7">Santo Cristo</Option>
                    </select>    

                    <label for="parroquia">Parroquia: </label>
                    <select  name="parroquias" id="parroquia" placeholder="Tu parroquia" required>
                        <option value="-">- 
                    </select> 

                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" placeholder="Tu Teléfono" required>

                     <label for="talla">⁠Talla de playera (unisex):</label>
                      <select name="talla" id="talla" required>
                        <option value ="">-- Selecciona --</option>
                        <option value ="XS">XS</Option>
                        <option value ="S">S</Option>
                        <option value ="M">M</Option>
                        <option value ="L">L</Option>
                        <option value ="XL">XL</Option>
                        <option value ="2XL">2XL</Option>
                    </select>    

                  </fieldset>

                  <fieldset>
                  <legend>Transporte</legend>
                   <label for="usarias">⁠¿Usarías transporte?</label>
                        <select name="usarias" id="usarias" required>
                            <option value ="">-- Selecciona --</option>
                            <option value ="Si">Si</Option>
                            <option value ="No">No</Option>
                        </select>

                    <label for="ruta">⁠¿Que ruta te beneficiaría?</label>
                    <select name="ruta" id="ruta" required>
                            <option value ="">-- Selecciona --</option>
                            <option value ="Ninguna">Ninguna</Option>
                            <option value ="Ruta Vicaria Santo Cristo">Ruta Vicaria Santo Cristo</Option>
                            <option value ="Ruta Vicaria San Juan Pablo II">Ruta Vicaria San Juan Pablo II</Option>
                            <option value ="Ruta Vicaria Carlos Davila">Ruta Vicaria Carlos Davila</Option>
                            <option value ="Ruta Vicaria Patricio Quinn 1">Ruta Patricio Quinn 1</Option>
                            <option value ="Ruta Vicaria Patricio Quinn 2">Ruta Patricio Quinn 2</Option>
                            <option value ="Ruta Fray Juan Larios (Saltillo)">Ruta Fray Juan Larios (Saltillo)</Option>
                            <option value ="Ruta Fray Juan Larios (Ramos Arizpe)">Ruta Fray Juan Larios (Ramos Arizpe)</Option>
                        </select>
                        
                    
                    </fieldset>
                    
                  <fieldset>
                        <legend>Salud</legend>
                            <label for="enfermedad">⁠¿Padeces alguna enfermedad? Especifica:</label>
                            <input type="text" id="enfermedad" placeholder="Especifica" required>

                            <label for="medicamento">⁠¿Tomas algún medicamento? Especifica:</label>
                            <input type="text" id="medicamento" placeholder="Especifica"  required>

                            <label for="telefono">⁠Contacto de emergencia:</label>
                            <input type="tel" id="contacto" placeholder="Teléfono" required>
                             
                            
                            
                            
                  </fieldset>
                  
                  <fieldset>
                        <legend>Te llama..</legend>
                    
                            
                            <label for="llama">¿Por cuál nombre crees que te llama Jesús?</label>
                            <input type="text" id="llama" placeholder="Nombre" required>
                    </fieldset>
                    
                    
                
                 
                
                

                <input type="submit" value="Guardar" class="botonc submit-nueva-tarea">
                <input type="submit" value="Cancelar"  class="botonc cerrar-modal">

                </form>
           
        `;
        
        setTimeout(() => {
           const formulario = document.querySelector('.formulario');
           formulario.classList.add('animar');
        }, 0);

      

        modal.addEventListener('click', function(e){
            e.preventDefault();
            

            if(e.target.classList.contains('cerrar-modal')) {
                
                setTimeout(() => {
                    const formulario = document.querySelector('.formulario');
                    formulario.classList.add('cerrar');
                    modal.remove();
                }, 500);
            }
                if(e.target.classList.contains('submit-nueva-tarea')){
                    submitFormularioNuevoRegistro();
                }
        
            

        })

        document.querySelector('body').appendChild(modal);
    }

        function submitFormularioNuevoRegistro(){
            const nombre = document.querySelector('#nombre').value.trim();
            const edad = document.querySelector('#edad').value.trim();
            const parroquia = document.querySelector('#parroquia').value.trim();
            const vicaria= document.querySelector('#vic').value.trim();
            const telefono = document.querySelector('#telefono').value.trim();
            const talla = document.querySelector('#talla').value.trim();
            const usarias = document.querySelector('#usarias').value.trim();
            const ruta = document.querySelector('#ruta').value.trim();
            const enfermedad = document.querySelector('#enfermedad').value.trim();
            const medicamento = document.querySelector('#medicamento').value.trim();
            const contacto = document.querySelector('#contacto').value.trim();
            const llama = document.querySelector('#llama').value.trim();

           
            
            agregarRegistro(nombre, edad, parroquia, vicaria ,telefono, talla, usarias, ruta, enfermedad, medicamento, contacto, llama);
        }

   
        async function agregarRegistro(nombre, edad, parroquia, vicaria,telefono, talla, usarias, ruta, enfermedad, medicamento, contacto, llama){
        const datos = new FormData();
        datos.append('nombre', nombre);
        datos.append('edad', edad);
        datos.append('parroquia', parroquia);
        datos.append('vicaria', vicaria);
        datos.append('telefono', telefono);
        datos.append('talla', talla);
        datos.append('usarias', usarias);
        datos.append('ruta', ruta);
        datos.append('enfermedad', enfermedad);
        datos.append('medicamento', medicamento);
        datos.append('contacto', contacto);
        datos.append('llama', llama);
        
        if(nombre === '' || edad === '' || parroquia === ''|| vicaria === '' || telefono  === ''|| talla === ''|| usarias === '' || ruta === '' || enfermedad === '' || medicamento === '' || contacto === '' || llama === ''){
            mostrarAlerta('Falta Información', 'error',document.querySelector('.formulario legend'));
            return;
        }


        try {
            const url = `${Location.origin}/api/registrar`;
            const respuesta = await fetch (url, {
                method:'POST',
                body:datos
            });
            const resultado = await respuesta.json();

            if(resultado.resultado){
                Swal.fire({
                    icon: "success",
                    title: "Haz Sido Registrado",
                    text: "Se descargo tu ficha de pago",
                    button: 'OK'
                  }).then(() =>{
                   setTimeout(() => {
                       window.location.reload();
                   }, 3000);
                     
                  })
              
            const pdf = new jsPDF()
            //var fecha = Date(DD/MM/YYYY);
            var imageData =  "data:image/png;base64,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"
            pdf.addImage(imageData, 'PNG', 20, 10, 20, 20, 'logo', 'NONE', 0);
            pdf.text(80, 30, 'Ficha de Pago');
            //pdf.text(110, 30, 'Folio'+ ' ' + id);
            pdf.setFontSize(16);
            pdf.text(20, 60, 'Nombre:'+ ' ' + nombre);
            pdf.text(20, 70, 'Banco:'+ ' ' + 'BBVA bancomer');
            pdf.text(20, 80, 'Cuenta:'+ ' ' + '0157257767');
            pdf.text(20, 90, 'Nombre de la cuenta:'+ ' ' + 'Diócesis de Saltillo A.R ');
            pdf.text(20, 100, 'Concepto:'+ ' ' + 'JDJ');
            pdf.line(20,105,180,105);
            pdf.text(20, 120, 'Nota:'+ ' ' + 'El pago sera únicamente por ventanilla del banco,');
            pdf.text(20, 130, 'cajero multiservicio o transferencia');
            pdf.save('Ficha_de_pago')
        }
            
           
        } catch (error) {
            Swal.fire({
                icon: "error",
                title: "Error",
                text: "Hubo un error al guardar tu registro!"
               
              });
        }
    }

    function mostrarAlerta(mensaje, tipo, referencia){
           const alertaPrevia = document.querySelector('.alerta');
           if(alertaPrevia){
             alertaPrevia.remove();

           }
           
           const alerta = document.createElement('DIV');
           alerta.classList.add('alerta', tipo);
           alerta.textContent = mensaje;

          referencia.parentElement.insertBefore(alerta, referencia.nextElementSibling);
          //referencia.appendChild(alerta);

          setTimeout(() => {
            alerta.remove();
          }, 5000);
          
    }
   
})();
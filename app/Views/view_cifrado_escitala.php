<div class="contenedor">
    <center>
        <div class="imagenes-esquinas">
            <div class="tooltip-container" data-tooltip="Información del Cifrado Escítala">
                <img src="<?= base_url('img/expediente.png'); ?>" alt="informacion" id="imagen-info3" class="imagen-info">
            </div>
            <div class="tooltip-container">
                <p class="mensaje-error3 oculto" id="mensaje-error2"></p>
            </div>
            <div class="tooltip-container" data-tooltip="Cómo usar">
                <img src="<?= base_url('img/buscando.png'); ?>" alt="informacion" id="imagen-uso4" class="imagen-uso">
            </div>
        </div>

        <h2>Cifrado Escítala</h2>
        <div class="formulario">

            <div class="campo">
                <label for="mensaje2">Mensaje</label>
                <div>
                    <input type="text" id="mensaje2" name="mensaje" class="mensaje" placeholder="Ingresa el mensaje">
                    <div class="tooltip-container" data-tooltip="Copiar texto">
                        <img class="boton-copiar_img" data-tooltip="copiar texto" onclick="copiarTexto2('mensaje2')" src="<?= base_url('img/pegar.png'); ?>" alt="copiar">
                    </div>
                </div>
            </div>

            <div class="campo">
                <label for="columnas">Columnas</label>
                <input type="number" id="columnas" name="columnas" class="numeroDesplazamiento" placeholder="Número de columnas" min="1">
            </div>

            <div class="campo">
                <label for="mensajeCifrado2">Mensaje Cifrado</label>
                <div>
                    <input type="text" id="mensajeCifrado2" name="mensajeCifrado" class="mensajeCifrado" placeholder="Mensaje cifrado">
                    <div class="tooltip-container" data-tooltip="Copiar texto">
                        <img class="boton-copiar_img" data-tooltip="copiar texto" onclick="copiarTexto2('mensajeCifrado2')" src="<?= base_url('img/pegar.png'); ?>" alt="copiar">
                    </div>
                </div>
            </div>
        </div>
    </center>
</div>

<div class="modal" id="modal-info3">
    <div class="modal-content">
        <span class="close-btn" id="close-btn3">&times;</span>
        <h3>Información del Cifrado Escítala</h3>
        <h4>Funcionamiento del Cifrado Escítala</h4>
        <p>
            El Cifrado Escítala es un método de cifrado antiguo que utiliza una tira de papel enrollada en un cilindro para cifrar un mensaje. El mensaje se escribe en la tira, y cuando se desenrolla, el texto queda desordenado y se vuelve ilegible sin el cilindro adecuado.
        </p>

        <h4>Proceso de Cifrado</h4>
        <ol>
            <li>
                <strong>Concepto Básico:</strong>
                Se selecciona un cilindro de un tamaño específico (el diámetro determina el ancho de la tira).
            </li>
            <li>
                <strong>Escritura:</strong>
                La tira se enrolla alrededor del cilindro, y el mensaje se escribe a lo largo de la tira.
            </li>
            <li>
                <strong>Desenrollado:</strong>
                Al desenrollar la tira, las letras aparecen en una secuencia diferente, volviéndose ininteligibles.
            </li>
            <li>
                <strong>Cifrado:</strong>
                El emisor y el receptor deben tener cilindros del mismo tamaño para poder descifrar el mensaje.
            </li>
        </ol>

        <h4>Proceso de Descifrado</h4>
        <p>
            Para recuperar el mensaje original, se vuelve a enrollar la tira en el cilindro. Al hacerlo, las letras se alinean en el orden correcto, revelando el mensaje original.
        </p>

        <h4>Ventajas y Desventajas</h4>
        <h5>Ventajas:</h5>
        <ul>
            <li>Es un método simple y efectivo para cifrar mensajes en la antigüedad.</li>
            <li>Permite una comunicación secreta sin necesidad de herramientas complicadas.</li>
        </ul>

        <h5>Desventajas:</h5>
        <ul>
            <li>Es susceptible a la interceptación, ya que una vez que se conoce el método, el cifrado puede ser descifrado fácilmente.</li>
            <li>La longitud del mensaje debe ser un múltiplo de la longitud de la tira para que el cifrado funcione correctamente.</li>
        </ul>

        <h4>Uso Histórico</h4>
        <p>
            El Cifrado Escítala se utilizó en la antigua Grecia, especialmente por los soldados espartanos. Aunque hoy en día no se considera seguro para proteger información sensible, sigue siendo un interesante ejemplo de técnicas de cifrado en la historia.
        </p>
    </div>
</div>

<div class="modal" id="modal-uso4">
    <div class="modal-content">
        <span class="close-btn" id="close-btn4">&times;</span>
        <h3>Ayuda</h3>
        <div>
            <img src="<?= base_url('img/Leel.png'); ?>" alt="Ayuda 1" class="imagenayuda" />
        </div>
    </div>
</div>

<script>
    const cifrarMensajeEscitala = (mensaje2, columnas) => {
        let mensajeLimpio = mensaje2.replace(/\s/g, ''); // Remover espacios
        let cifrado = '';

        for (let i = 0; i < columnas; i++) {
            for (let j = i; j < mensajeLimpio.length; j += columnas) {
                cifrado += mensajeLimpio[j];
            }
        }

        return cifrado;
    };

    const descifrarMensajeEscitala = (mensajeCifrado2, columnas) => {
        let descifrado = new Array(mensajeCifrado2.length).fill('');
        let posicion = 0;

        for (let i = 0; i < columnas; i++) {
            for (let j = i; j < mensajeCifrado2.length && posicion < mensajeCifrado2.length; j += columnas) {
                descifrado[j] = mensajeCifrado2[posicion++];
            }
        }

        return descifrado.join('');
    };

    // Función para limpiar los campos
    const limpiarCampos2 = () => {
        document.getElementById('mensaje2').value = '';
        document.getElementById('mensajeCifrado2').value = '';
        document.getElementById('columnas').value = '';
    };


const copiarTexto2 = (inputId) => {
    const inputElement = document.getElementById(inputId); // Obtener el input por su ID
    if (inputElement) {
        const texto = inputElement.value; // Obtener el valor del input
        if (navigator.clipboard) {
            navigator.clipboard.writeText(texto)
                .then(() => {
                    mostrarMensajeError2('Texto copiado al portapapeles.');
                })
                .catch(() => {
                    mostrarMensajeError2('Error al copiar el texto.');
                });
        } else {
            // Solución alternativa si la API del portapapeles no está disponible
            const textArea = document.createElement('textarea');
            textArea.value = texto;
            document.body.appendChild(textArea);
            textArea.select();
            try {
                document.execCommand('copy');
                mostrarMensajeError2('Texto copiado al portapapeles.');
            } catch (err) {
                mostrarMensajeError2('Error al copiar el texto.');
            }
            document.body.removeChild(textArea);
        }
    } else {
        mostrarMensajeError2('El elemento con el ID especificado no existe.');
    }
};



    const mostrarMensajeError2 = (mensaje2) => { // Cambié "mensaje" por "mensaje2"
        const mensajeError = document.getElementById('mensaje-error');
        mensajeError.textContent = mensaje2; // Aquí debería ser mensaje2
        mensajeError.classList.remove('oculto'); // Mostrar el mensaje
    };

    document.addEventListener('click', function() {
        const mensajeError = document.getElementById('mensaje-error2');
        mensajeError.classList.add('oculto'); // Ocultar el mensaje de error
    });

    document.querySelectorAll('.boton-copiar_img, input').forEach(element => {
        element.addEventListener('click', function(event) {
            event.stopPropagation(); // Evitar que el evento de clic global afecte estos elementos
        });
    });

    // Escucha el evento de entrada en el campo de mensaje
    document.getElementById('mensaje2').addEventListener('input', function() {
        let mensaje2 = this.value;
        let columnas = parseInt(document.getElementById('columnas').value) || 0;

        if (mensaje2 && columnas > 0) {
            document.getElementById('mensajeCifrado2').value = cifrarMensajeEscitala(mensaje2, columnas);
        } else if (!mensaje2) {
            limpiarCampos2(); // Si el mensaje se borra, limpiar ambos campos
        }
    });

    // Escucha el evento de entrada en el campo de mensaje cifrado
    document.getElementById('mensajeCifrado2').addEventListener('input', function() {
        let mensajeCifrado2 = this.value;
        let columnas = parseInt(document.getElementById('columnas').value) || 0;

        if (mensajeCifrado2 && columnas > 0) {
            document.getElementById('mensaje2').value = descifrarMensajeEscitala(mensajeCifrado2, columnas);
        } else if (!mensajeCifrado2) {
            limpiarCampos2(); // Si el mensaje cifrado se borra, limpiar ambos campos
        }
    });

    // Corrige el id de columnas aquí
    document.getElementById('columnas').addEventListener('input', function() {
        let columnas = parseInt(this.value) || 0;
        let mensaje2 = document.getElementById('mensaje2').value;
        let mensajeCifrado2 = document.getElementById('mensajeCifrado2').value;

        if (mensaje2 && columnas > 0) {
            document.getElementById('mensajeCifrado2').value = cifrarMensajeEscitala(mensaje2, columnas);
        } else if (mensajeCifrado2 && columnas > 0) {
            document.getElementById('mensaje2').value = descifrarMensajeEscitala(mensajeCifrado2, columnas);
        } else if (columnas <= 0) {
            document.getElementById('mensajeCifrado2').value = '';
           
        }
    });
</script>
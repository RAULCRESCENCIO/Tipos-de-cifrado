<div class="contenedor">
    <center>
        <div class="imagenes-esquinas">
            <div class="tooltip-container" data-tooltip="Información del Cifrado MD5">
                <img src="<?= base_url('img/expediente.png'); ?>" alt="informacion" id="imagen-info71" class="imagen-info">
            </div>
            <div class="tooltip-container">
                <p class="mensaje-error3 oculto" id="mensaje-error5"></p>
            </div>
            <div class="tooltip-container" data-tooltip="Cómo usar">
                <img src="<?= base_url('img/buscando.png'); ?>" alt="informacion" id="imagen-uso72" class="imagen-uso">
            </div>
        </div>

        <h2>Cifrado MD5 (Message Digest Algorithm 5)</h2>
        <div class="formulario">
            <div class="campo">
                <label for="mensajeMD5">Mensaje</label>
                <div>
                    <input type="text" id="mensajeMD5" name="mensaje" class="mensaje" placeholder="Ingresa el mensaje">
                    <div class="tooltip-container" data-tooltip="Copiar texto">
                        <img class="boton-copiar_img" data-tooltip="copiar texto" onclick="copiarTexto5('mensajeMD5')" src="<?= base_url('img/pegar.png'); ?>" alt="copiar">
                    </div>
                </div>
            </div>

            <div class="campo">
                <label for="hashConocido">Mensaje Cifrado Conocido (Hash MD5) </label>
                <div>
                    <input type="text" id="hashConocido" name="mensajeCifrado" class="mensajeCifrado" placeholder="Mensaje cifrado">
                    <div class="tooltip-container" data-tooltip="Copiar texto">
                        <img class="boton-copiar_img" data-tooltip="copiar texto" onclick="copiarTexto5('hashConocido')" src="<?= base_url('img/pegar.png'); ?>" alt="copiar">
                    </div>
                </div>
            </div>


            <div class="campo">
                <label for="mensajeCifradoMD5">Mensaje Cifrado (Hash MD5)</label>
                <div>
                    <input type="text" id="mensajeCifradoMD5" name="mensajeCifrado" class="mensajeCifrado" placeholder="Mensaje cifrado">
                    <div class="tooltip-container" data-tooltip="Copiar texto">
                        <img class="boton-copiar_img" data-tooltip="copiar texto" onclick="copiarTexto5('mensajeCifradoMD5')" src="<?= base_url('img/pegar.png'); ?>" alt="copiar">
                    </div>
                </div>
            </div>
        </div>
    </center>
</div>

<div class="modal" id="modal-info71">
    <div class="modal-content">
        <span class="close-btn" id="close-btn71">&times;</span>
        <h3>Información sobre MD5</h3>

        <h4>¿Qué es MD5?</h4>
        <p>
            MD5 (Message-Digest Algorithm 5) es un algoritmo de hash criptográfico que produce un valor hash de 128 bits (16 bytes) a partir de una entrada de datos de longitud variable. Fue diseñado por Ronald Rivest en 1991 y se ha utilizado ampliamente para verificar la integridad de los datos y almacenar contraseñas.
        </p>

        <h4>Funcionamiento de MD5</h4>
        <p>
            MD5 toma una cadena de entrada y la procesa en bloques de 512 bits. El resultado es un hash de 128 bits, que es típicamente representado como una cadena hexadecimal de 32 caracteres. El algoritmo se compone de varias etapas, incluyendo la inicialización de un conjunto de variables, la división de la entrada en bloques y la aplicación de una serie de operaciones matemáticas.
        </p>

        <h4>Proceso de Hashing</h4>
        <ol>
            <li>
                <strong>Padding:</strong>
                <p>
                    Se agrega un relleno a los datos originales para que su longitud sea un múltiplo de 512 bits. Este relleno incluye un bit 1 seguido de suficientes ceros.
                </p>
            </li>
            <li>
                <strong>Inicialización:</strong>
                <p>
                    Se inicializan cuatro variables de estado (A, B, C, D) que se utilizarán para calcular el hash.
                </p>
            </li>
            <li>
                <strong>Proceso de compresión:</strong>
                <p>
                    Se procesan los bloques de 512 bits mediante una serie de operaciones aritméticas y lógicas, que transforman las variables de estado en función de los datos de entrada.
                </p>
            </li>
            <li>
                <strong>Resultado:</strong>
                <p>
                    Al final del proceso, las variables de estado se concatenan para formar el hash MD5 de 128 bits.
                </p>
            </li>
        </ol>

        <h4>Aplicaciones de MD5</h4>
        <ul>
            <li>Verificación de integridad de archivos: Comprobando que un archivo no ha sido alterado durante la transferencia.</li>
            <li>Almacenamiento de contraseñas: Aunque no se recomienda por su vulnerabilidad, algunas aplicaciones todavía lo usan para almacenar contraseñas de manera segura.</li>
            <li>Identificación de datos: Generar hashes únicos para identificar datos en bases de datos.</li>
        </ul>

        <h4>Ventajas y Desventajas</h4>
        <h5>Ventajas:</h5>
        <ul>
            <li>Rápido y eficiente en el cálculo del hash, lo que lo hace adecuado para aplicaciones en tiempo real.</li>
            <li>Genera un hash de longitud fija (128 bits) independientemente del tamaño de la entrada, lo que facilita su almacenamiento.</li>
            <li>Amplia compatibilidad y uso en diversas aplicaciones y sistemas.</li>
        </ul>

        <h5>Desventajas:</h5>
        <ul>
            <li>Vulnerabilidades conocidas: Se han encontrado colisiones (dos entradas diferentes que producen el mismo hash), lo que compromete la seguridad del algoritmo.</li>
            <li>No se recomienda para aplicaciones de seguridad críticas, como el almacenamiento de contraseñas, debido a su debilidad frente a ataques de fuerza bruta y diccionario.</li>
            <li>Menor seguridad en comparación con algoritmos más modernos, como SHA-256.</li>
        </ul>

        <h4>Consideraciones Adicionales</h4>
        <p>
            Debido a sus debilidades, es recomendable utilizar algoritmos de hash más seguros, como SHA-256, para aplicaciones que requieren una alta seguridad. MD5 puede seguir siendo útil para fines no críticos, como verificar la integridad de archivos en sistemas donde no se requiere un alto nivel de seguridad.
        </p>

        <h4>Ejemplo de Uso</h4>
        <p>
            Un ejemplo común de uso de MD5 es en la verificación de integridad de archivos descargados de Internet. Al proporcionar un hash MD5 junto con el archivo, los usuarios pueden verificar que el archivo no ha sido alterado al calcular el hash del archivo descargado y compararlo con el hash proporcionado.
        </p>

    </div>
</div>

<div class="modal" id="modal-uso72">
    <div class="modal-content">
        <span class="close-btn" id="close-btn72">&times;</span>
        <h3>Ayuda</h3>
        <div>
            <img src="<?= base_url('img/Leel.png'); ?>" alt="Ayuda 1" class="imagenayuda" />
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js"></script>
<script>
     // Función para generar el hash MD5
     function generarHashMD5(mensaje) {
        return CryptoJS.MD5(mensaje).toString();
    }

    function verificarHash() {
        const hashConocido = document.getElementById('hashConocido').value;
        const mensajeVerificar = document.getElementById('mensajeMD5').value;

        const hashGenerado = generarHashMD5(mensajeVerificar);
        const resultado = (hashGenerado === hashConocido) ? "¡Coincide!" : "No coincide.";
        document.getElementById('mensajeCifradoMD5').value = resultado;
    }

    const limpiarCampos5 = () => {
        document.getElementById('mensajeMD5').value = '';
        document.getElementById('mensajeCifradoMD5').value = '';
    };

  
const copiarTexto5 = (inputId) => {
    const inputElement = document.getElementById(inputId); // Obtener el input por su ID
    if (inputElement) {
        const texto = inputElement.value; // Obtener el valor del input
        if (texto) {
            if (navigator.clipboard) {
                // Intentar usar la API del Portapapeles
                navigator.clipboard.writeText(texto)
                    .then(() => {
                        mostrarMensajeError5('Texto copiado al portapapeles.');
                    })
                    .catch(() => {
                        mostrarMensajeError5('Error al copiar el texto.');
                    });
            } else {
                // Fallback si la API del portapapeles no está disponible
                const textArea = document.createElement('textarea');
                textArea.value = texto;
                document.body.appendChild(textArea);
                textArea.select();
                try {
                    document.execCommand('copy');
                    mostrarMensajeError5('Texto copiado al portapapeles.');
                } catch (err) {
                    mostrarMensajeError5('Error al copiar el texto.');
                }
                document.body.removeChild(textArea);
            }
        } else {
            mostrarMensajeError5('No hay texto para copiar.');
        }
    } else {
        mostrarMensajeError5('El elemento con el ID especificado no existe.');
    }
};

 

    document.querySelectorAll('.boton-copiar_img, input').forEach(element => {
        element.addEventListener('click', function(event) {
            event.stopPropagation();
        });
    });

    const mostrarMensajeError5 = (mensajeMD5) => {
        const mensajeError = document.getElementById('mensaje-error5');
        mensajeError.textContent = mensajeMD5;
        mensajeError.classList.remove('oculto');
    };

    document.addEventListener('click', function() {
        const mensajeError = document.getElementById('mensaje-error5');
        mensajeError.classList.add('oculto');
    });

    // Actualizar el hash MD5 cuando se ingresa un mensaje
    document.getElementById('mensajeMD5').addEventListener('input', function() {
        const mensajeMD5 = this.value;
        const hashConocido = document.getElementById("hashConocido").value;

        if (hashConocido && mensajeMD5) {
            verificarHash();
        } else if (mensajeMD5) {
            const hashMD5 = generarHashMD5(mensajeMD5);
            document.getElementById('mensajeCifradoMD5').value = hashMD5;
        } else {
            limpiarCampos5(); // Limpiar ambos campos si se borra el mensaje
        }
    });

    document.getElementById('hashConocido').addEventListener('input', function() {
        const hashConocido = this.value;
        const mensajeMD5 = document.getElementById("mensajeMD5").value;
        if (hashConocido && mensajeMD5) {
            verificarHash();
        } else {
            limpiarCampos5(); // Limpiar ambos campos si se borra el mensaje
        }
    });


</script>
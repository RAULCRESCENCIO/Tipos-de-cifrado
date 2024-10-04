<div class="contenedor">
    <center>
        <div class="imagenes-esquinas">
            <div class="tooltip-container" data-tooltip="Información del Cifrado AES">
                <img src="<?= base_url('img/expediente.png'); ?>" alt="informacion" id="imagen-info53" class="imagen-info">
            </div>
            <div class="tooltip-container">
                <p class="mensaje-error3 oculto" id="mensaje-error3"></p>
            </div>
            <div class="tooltip-container" data-tooltip="Cómo usar">
                <img src="<?= base_url('img/buscando.png'); ?>" alt="informacion" id="imagen-uso52" class="imagen-uso">
            </div>
        </div>

        <h2>Cifrado AES (Advanced Encryption Standard)</h2>
        <div class="formulario">
            <div class="campo">
                <label for="mensajeAES">Mensaje</label>
                <div>
                    <input type="text" id="mensajeAES" name="mensaje" class="mensaje" placeholder="Ingresa el mensaje">
                    <div class="tooltip-container" data-tooltip="Copiar texto">
                        <img class="boton-copiar_img" data-tooltip="copiar texto" onclick="copiarTexto3('mensajeAES')" src="<?= base_url('img/pegar.png'); ?>" alt="copiar">
                    </div>
                </div>
            </div>

            <div class="campo">
                <label for="Clave">Generar Clave</label>
                <div class="tooltip-container" data-tooltip="Generar Clave">
                    <img class="boton-copiar_clave" data-tooltip="Generar Clave" onclick="generarClaveAES()" src="<?= base_url('img/clave.png'); ?>" alt="copiar">
                </div>
            </div>

            <div class="campo">
                <label for="Clave">Clave Secreta</label>
                <div>
                    <input type="text" id="Clave" name="Clave" class="numeroDesplazamiento" placeholder="Clave Secreta">
                    <div class="tooltip-container" data-tooltip="Copiar texto">
                        <img class="boton-copiar_img" data-tooltip="copiar texto" onclick="copiarTexto3('Clave')" src="<?= base_url('img/pegar.png'); ?>" alt="copiar">
                    </div>
                </div>
            </div>

            <div class="campo">
                <label for="mensajeCifradoAES">Mensaje Cifrado</label>
                <div>
                    <input type="text" id="mensajeCifradoAES" name="mensajeCifrado" class="mensajeCifrado" placeholder="Mensaje cifrado">
                    <div class="tooltip-container" data-tooltip="Copiar texto">
                        <img class="boton-copiar_img" data-tooltip="copiar texto" onclick="copiarTexto3('mensajeCifradoAES')" src="<?= base_url('img/pegar.png'); ?>" alt="copiar">
                    </div>
                </div>
            </div>
        </div>
    </center>
</div>

<div class="modal" id="modal-info53">
    <div class="modal-content">
        <span class="close-btn" id="close-btn53">&times;</span>
        <h3>Información del Cifrado AES</h3>

        <h4>¿Qué es el Cifrado AES?</h4>
        <p>
            El Cifrado AES (Estándar de Cifrado Avanzado) es un algoritmo de cifrado simétrico adoptado como estándar por el Gobierno de los Estados Unidos en 2001. Diseñado para reemplazar el antiguo estándar DES, AES se basa en la estructura de bloque y es ampliamente utilizado para proteger datos en todo el mundo.
        </p>

        <h4>Funcionamiento del Cifrado AES</h4>
        <p>
            AES cifra datos en bloques de 128 bits utilizando claves de 128, 192 o 256 bits. Su diseño es eficiente y seguro, lo que lo convierte en uno de los métodos de cifrado más utilizados en la industria.
        </p>

        <h4>Proceso de Cifrado</h4>
        <ol>
            <li>
                <strong>Inicialización:</strong>
                <p>
                    El mensaje se divide en bloques de 128 bits. Si el mensaje no es un múltiplo de 128, se aplica un padding (relleno) para completar el bloque.
                </p>
            </li>
            <li>
                <strong>Rondas de Cifrado:</strong>
                <p>
                    AES aplica un número variable de rondas de cifrado, dependiendo de la longitud de la clave:
                <ul>
                    <li><strong>Clave de 128 bits (16 bytes):</strong> 10 rondas.</li>
                    <li><strong>Clave de 192 bits (24 bytes):</strong> 12 rondas.</li>
                    <li><strong>Clave de 256 bits (32 bytes):</strong> 14 rondas.</li>
                </ul>
                En cada ronda se realizan las siguientes operaciones:
                <ol>
                    <li><strong>Sustitución:</strong> Cada byte del bloque se reemplaza por otro byte usando una tabla de sustitución (S-Box).</li>
                    <li><strong>Transposición:</strong> Se reorganizan los bytes del bloque a través de una técnica de permutación.</li>
                    <li><strong>Mezcla:</strong> Se mezclan las columnas del bloque para aumentar la difusión de los datos.</li>
                    <li><strong>Adición de clave:</strong> Se combina el bloque con una subclave derivada de la clave original.</li>
                </ol>
                </p>
            </li>
            <li>
                <strong>Resultado:</strong>
                <p>
                    El resultado final es un bloque cifrado que se puede almacenar o transmitir de manera segura.
                </p>
            </li>
        </ol>

        <h4>Proceso de Descifrado</h4>
        <p>
            El proceso de descifrado de AES es el inverso del cifrado. Utiliza la misma clave secreta y aplica las operaciones en orden inverso para recuperar el mensaje original.
        </p>

        <h4>Aplicaciones del Cifrado AES</h4>
        <ul>
            <li>Cifrado de datos en dispositivos de almacenamiento, como discos duros y unidades USB.</li>
            <li>Seguridad en comunicaciones de red a través de protocolos como HTTPS, IPsec y SSL/TLS.</li>
            <li>Protección de datos en aplicaciones móviles y de escritorio.</li>
            <li>Uso en servicios de almacenamiento en la nube para asegurar datos sensibles.</li>
        </ul>

        <h4>Longitud de Clave: 128 vs 256 bits</h4>
        <p>
            Las claves de 128 bits (16 bytes) y 256 bits (32 bytes) son las más comunes en el cifrado AES, y cada una tiene sus ventajas:
        </p>
        <ul>
            <li><strong>Clave de 128 bits:</strong>
                <ul>
                    <li>Proporciona un nivel de seguridad fuerte para la mayoría de las aplicaciones.</li>
                    <li>Es más rápida en términos de rendimiento, ya que utiliza menos rondas de cifrado.</li>
                    <li>Recomendado para la mayoría de las aplicaciones comerciales y personales.</li>
                </ul>
            </li>
            <li><strong>Clave de 256 bits:</strong>
                <ul>
                    <li>Ofrece un nivel de seguridad muy alto, ideal para información extremadamente sensible.</li>
                    <li>Utiliza más rondas de cifrado, lo que puede resultar en un rendimiento más lento en algunos sistemas.</li>
                    <li>Ideal para aplicaciones que requieren el más alto nivel de seguridad, como el cifrado de datos gubernamentales y financieros.</li>
                </ul>
            </li>
        </ul>

        <h4>Ventajas y Desventajas</h4>
        <h5>Ventajas:</h5>
        <ul>
            <li>Alta eficiencia y velocidad de cifrado, lo que lo hace adecuado para aplicaciones en tiempo real.</li>
            <li>Ofrece un alto nivel de seguridad con claves de longitud variable (128, 192 y 256 bits).</li>
            <li>Amplia aceptación y uso en la industria, lo que lo convierte en un estándar confiable.</li>
            <li>Es resistente a ataques de fuerza bruta y otros tipos de ataques criptográficos conocidos.</li>
        </ul>

        <h5>Desventajas:</h5>
        <ul>
            <li>La seguridad de AES depende de la clave secreta; si la clave es comprometida, la seguridad se ve afectada.</li>
            <li>El rendimiento puede verse afectado en sistemas con recursos limitados, especialmente con claves más largas.</li>
            <li>Requiere una gestión segura de claves, lo que puede ser un desafío en entornos distribuidos.</li>
        </ul>

        <h4>Consideraciones Adicionales</h4>
        <p>
            Es crucial implementar AES con buenas prácticas de gestión de claves y utilizar un modo de operación adecuado (como CBC, GCM, etc.) para garantizar la seguridad de los datos cifrados. La longitud de la clave debe ser seleccionada según el nivel de seguridad requerido, considerando también la capacidad computacional de los sistemas involucrados.
        </p>

        <h4>Ejemplo de Uso</h4>
        <p>
            Un ejemplo común de uso de AES es en el cifrado de datos en aplicaciones de banca en línea. Los datos sensibles, como información de cuentas y transacciones, se cifran usando AES antes de ser transmitidos, lo que garantiza que solo las partes autorizadas puedan acceder a ellos. Además, los archivos almacenados en la nube también pueden ser cifrados con AES para proteger la privacidad de los usuarios.
        </p>

    </div>
</div>

<div class="modal" id="modal-uso52">
    <div class="modal-content">
        <span class="close-btn" id="close-btn52">&times;</span>
        <h3>Ayuda</h3>
        <div>
            <img src="<?= base_url('img/Leel.png'); ?>" alt="Ayuda 1" class="imagenayuda" />
        </div>
    </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
<script>
    async function generarClaveAES() {
        // Generar clave AES de 128 bits
    const claveAES = CryptoJS.lib.WordArray.random(128 / 8).toString(CryptoJS.enc.Base64);

    // Asignar la clave al campo de texto
    document.getElementById('Clave').value = claveAES;

    console.log("Clave AES generada con CryptoJS:", claveAES);

    // Cifrar mensaje si existe
    const mensajeAES = document.getElementById('mensajeAES').value;
    if (mensajeAES) {
        const cifrado = CryptoJS.AES.encrypt(mensajeAES, claveAES).toString();
        document.getElementById('mensajeCifradoAES').value = cifrado;
        console.log("Mensaje cifrado:", cifrado);
    }
}
    

    // Función para convertir ArrayBuffer a Base64
    function arrayBufferToBase64(buffer) {
        let binary = '';
        const bytes = new Uint8Array(buffer);
        const len = bytes.byteLength;
        for (let i = 0; i < len; i++) {
            binary += String.fromCharCode(bytes[i]);
        }
        return window.btoa(binary);
    }

    // Función optimizada para cifrar usando AES
    async function cifrarAES(textoPlano, claveSecreta) {
        const keyMaterial = Uint8Array.from(atob(claveSecreta), c => c.charCodeAt(0));
        const data = new TextEncoder().encode(textoPlano);

        const claveCriptografica = await window.crypto.subtle.importKey(
            "raw",
            keyMaterial, {
                name: "AES-GCM"
            },
            false,
            ["encrypt"]
        );

        const iv = window.crypto.getRandomValues(new Uint8Array(12));

        const textoCifradoBuffer = await window.crypto.subtle.encrypt({
                name: "AES-GCM",
                iv: iv
            },
            claveCriptografica,
            data
        );

        const textoCifradoArray = new Uint8Array(textoCifradoBuffer);
        const textoCifradoBase64 = btoa(String.fromCharCode(...textoCifradoArray));
        const ivBase64 = btoa(String.fromCharCode(...iv));

        return `${textoCifradoBase64}::${ivBase64}`;
    }

    // Función optimizada para descifrar usando AES
    async function descifrarAES(textoCifrado, claveSecreta) {
        const [textoCifradoBase64, ivBase64] = textoCifrado.split('::');

        const iv = Uint8Array.from(atob(ivBase64), c => c.charCodeAt(0));
        const cifradoArray = Uint8Array.from(atob(textoCifradoBase64), c => c.charCodeAt(0));

        const keyMaterial = Uint8Array.from(atob(claveSecreta), c => c.charCodeAt(0));

        const claveCriptografica = await window.crypto.subtle.importKey(
            "raw",
            keyMaterial, {
                name: "AES-GCM"
            },
            false,
            ["decrypt"]
        );

        const textoDescifradoBuffer = await window.crypto.subtle.decrypt({
                name: "AES-GCM",
                iv: iv
            },
            claveCriptografica,
            cifradoArray
        );

        return new TextDecoder().decode(textoDescifradoBuffer);
    }

    const limpiarCampos3 = () => {
        document.getElementById('mensajeAES').value = '';
        document.getElementById('Clave').value = '';
        document.getElementById('mensajeCifradoAES').value = '';
    };

   
   const copiarTexto3 = (inputId) => {
    const inputElement = document.getElementById(inputId); // Obtener el input por su ID
    if (inputElement) {
        const texto = inputElement.value; // Obtener el valor del input
        if (navigator.clipboard) {
            navigator.clipboard.writeText(texto)
                .then(() => {
                    mostrarMensajeError3('Texto copiado al portapapeles.');
                })
                .catch(() => {
                    mostrarMensajeError3('Error al copiar el texto.');
                });
        } else {
            // Solución alternativa si la API del portapapeles no está disponible
            const textArea = document.createElement('textarea');
            textArea.value = texto;
            document.body.appendChild(textArea);
            textArea.select();
            try {
                document.execCommand('copy');
                mostrarMensajeError3('Texto copiado al portapapeles.');
            } catch (err) {
                mostrarMensajeError3('Error al copiar el texto.');
            }
            document.body.removeChild(textArea);
        }
    } else {
        mostrarMensajeError3('El elemento con el ID especificado no existe.');
    }
};
   

    const mostrarMensajeError3 = (mensajeAES) => {
        const mensajeError = document.getElementById('mensaje-error3');
        mensajeError.textContent = mensajeAES;
        mensajeError.classList.remove('oculto');
    };

    document.addEventListener('click', function() {
        const mensajeError = document.getElementById('mensaje-error3');
        mensajeError.classList.add('oculto');
    });

    document.querySelectorAll('.boton-copiar_img, input').forEach(element => {
        element.addEventListener('click', function(event) {
            event.stopPropagation();
        });
    });

    // Función para manejar el cifrado y descifrado de mensajes
    document.getElementById('mensajeAES').addEventListener('input', function() {
        let mensajeAES = this.value;
        let claveAES = document.getElementById('Clave').value;

        // Validar que la clave sea de 16 o 32 caracteres
        if (claveAES.length !== 24 && claveAES.length !== 44) {
            mostrarMensajeError3('La clave debe tener 24 o 44 caracteres.');
            return;
        }

        if (mensajeAES && claveAES) {
            cifrarAES(mensajeAES, claveAES).then(cifrado => {
                document.getElementById('mensajeCifradoAES').value = cifrado;
            });
        } else if (!mensajeAES) {
            limpiarCampos3(); // Si el mensaje cifrado se borra, limpiar ambos campos
        }
    });

    document.getElementById('mensajeCifradoAES').addEventListener('input', function() {
        let mensajeCifradoAES = this.value;
        let claveAES = document.getElementById('Clave').value;

        // Validar que la clave sea de 16 o 32 caracteres
        if (claveAES.length !== 24 && claveAES.length !== 44) {
            mostrarMensajeError3('La clave debe tener 24 o 44 caracteres.');
            return;
        }

        if (mensajeCifradoAES && claveAES) {
            descifrarAES(mensajeCifradoAES, claveAES).then(descifrado => {
                document.getElementById('mensajeAES').value = descifrado;
            });
        } else if (!mensajeCifradoAES) {
            limpiarCampos3(); // Si el mensaje cifrado se borra, limpiar ambos campos
        }
    });

    document.getElementById('Clave').addEventListener('input', function() {
        let claveAES = this.value;
        let mensajeAES = document.getElementById('mensajeAES').value;
        let mensajeCifradoAES = document.getElementById('mensajeCifradoAES').value;

        // Validar la longitud de la clave en Base64
        if (claveAES.length !== 24 && claveAES.length !== 44) {
            mostrarMensajeError3('La clave debe tener 24 o 44 caracteres.');
            return;
        }

        if (mensajeAES && claveAES) {
            cifrarAES(mensajeAES, claveAES).then(cifrado => {
                document.getElementById('mensajeCifradoAES').value = cifrado;
            });
        } else if (mensajeCifradoAES && claveAES) {
            descifrarAES(mensajeCifradoAES, claveAES).then(descifrado => {
                document.getElementById('mensajeAES').value = descifrado;
            });
        } else if (!claveAES) {
            document.getElementById('mensajeCifradoAES').value = '';
        }
    });
</script>


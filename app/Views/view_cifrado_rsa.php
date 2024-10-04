<div class="contenedor">
    <center>
        <div class="imagenes-esquinas">
            <div class="tooltip-container" data-tooltip="Información del Cifrado RSA">
                <img src="<?= base_url('img/expediente.png'); ?>" alt="informacion" id="imagen-info61" class="imagen-info">
            </div>
            <div class="tooltip-container">
                <p class="mensaje-error3 oculto" id="mensaje-error4"></p>
            </div>
            <div class="tooltip-container" data-tooltip="Cómo usar">
                <img src="<?= base_url('img/buscando.png'); ?>" alt="informacion" id="imagen-uso62" class="imagen-uso">
            </div>
        </div>

        <h2>Cifrado RSA (Rivest-Shamir-Adleman)</h2>
        <div class="formulario">
            <div class="campo">
                <label for="mensajeRSA">Mensaje</label>
                <div>
                    <input type="text" id="mensajeRSA" name="mensaje" class="mensaje" placeholder="Ingresa el mensaje">
                    <div class="tooltip-container" data-tooltip="Copiar texto">
                        <img class="boton-copiar_img" data-tooltip="copiar texto" onclick="copiarTexto4('mensajeRSA')" src="<?= base_url('img/pegar.png'); ?>" alt="copiar">
                    </div>
                </div>
            </div>

            <div class="campo">
                <label for="Clave">Generar Claves</label>
                <div class="tooltip-container" data-tooltip="Generar Claves">
                    <img class="boton-copiar_clave" data-tooltip="Generar Claves" onclick="generarClavesRSA()" src="<?= base_url('img/clave.png'); ?>" alt="copiar">
                </div>
            </div>


            <div class="campo">
                <label for="ClavePublica">Clave Publica</label>
                <div>
                    <input type="text" id="ClavePublica" name="ClavePublica" class="numeroDesplazamiento" placeholder="Clave Publica">
                    <div class="tooltip-container" data-tooltip="Copiar texto">
                        <img class="boton-copiar_img" data-tooltip="copiar texto" onclick="copiarTexto4('ClavePublica')" src="<?= base_url('img/pegar.png'); ?>" alt="copiar">
                    </div>
                </div>
            </div>

            <div class="campo">
                <label for="ClavePrivada">Clave Privada</label>
                <div>
                    <input type="text" id="ClavePrivada" name="ClavePrivada" class="numeroDesplazamiento" placeholder="Clave Privada">
                    <div class="tooltip-container" data-tooltip="Copiar texto">
                        <img class="boton-copiar_img" data-tooltip="copiar texto" onclick="copiarTexto4('ClavePrivada')" src="<?= base_url('img/pegar.png'); ?>" alt="copiar">
                    </div>
                </div>
            </div>

            <div class="campo">
                <label for="mensajeCifradoRSA">Mensaje Cifrado</label>
                <div>
                    <input type="text" id="mensajeCifradoRSA" name="mensajeCifrado" class="mensajeCifrado" placeholder="Mensaje cifrado">
                    <div class="tooltip-container" data-tooltip="Copiar texto">
                        <img class="boton-copiar_img" data-tooltip="copiar texto" onclick="copiarTexto4('mensajeCifradoRSA')" src="<?= base_url('img/pegar.png'); ?>" alt="copiar">
                    </div>
                </div>
            </div>
        </div>
    </center>
</div>

<div class="modal" id="modal-info61">
    <div class="modal-content">
        <span class="close-btn" id="close-btn61">&times;</span>
        <h3>Información del Cifrado RSA</h3>

        <h4>¿Qué es el Cifrado RSA?</h4>
        <p>
            El Cifrado RSA (Rivest-Shamir-Adleman) es un algoritmo de cifrado asimétrico utilizado para la seguridad de datos. Fue desarrollado en 1977 por Ron Rivest, Adi Shamir y Leonard Adleman. Su diseño se basa en la teoría de números y utiliza la dificultad de factorizar grandes números primos como base de su seguridad.
        </p>

        <h4>Funcionamiento del Cifrado RSA</h4>
        <p>
            El cifrado RSA opera mediante un par de claves: una clave pública, que puede ser compartida con cualquier persona, y una clave privada, que se mantiene en secreto por el propietario. Este algoritmo es fundamental en la criptografía moderna y se utiliza para proteger la confidencialidad y la integridad de la información.
        </p>

        <h4>Proceso de Cifrado</h4>
        <ol>
            <li>
                <strong>Generación de Claves:</strong>
                <ul>
                    <li>Se seleccionan dos números primos grandes (p y q).</li>
                    <li>Se calcula n = p * q, que se usa como módulo para ambas claves.</li>
                    <li>Se calcula el valor de φ(n) = (p-1)(q-1).</li>
                    <li>Se elige un número entero e tal que 1 < e < φ(n) y que sea coprimo con φ(n), comúnmente 65537.</li>
                    <li>Finalmente, se calcula d, la clave privada, tal que d * e ≡ 1 (mod φ(n)).</li>
                </ul>
            </li>
            <li>
                <strong>Cifrado:</strong>
                <p>
                    El mensaje se convierte a un número m (en formato numérico) que debe ser menor que n. El mensaje cifrado se calcula como:
                    <code>c = m^e mod n</code>, donde c es el texto cifrado.
                </p>
            </li>
            <li>
                <strong>Seguridad:</strong>
                <p>
                    La seguridad del cifrado RSA se basa en la dificultad de factorizar el producto de dos grandes números primos, lo que hace que la clave privada sea prácticamente imposible de derivar a partir de la clave pública.
                </p>
            </li>
        </ol>

        <h4>Proceso de Descifrado</h4>
        <p>
            El destinatario utiliza su clave privada para descifrar el mensaje. El proceso se realiza como sigue:
            <code>m = c^d mod n</code>, donde m es el mensaje original recuperado.
        </p>

        <h4>Aplicaciones del Cifrado RSA</h4>
        <ul>
            <li>Intercambio seguro de claves en protocolos de comunicación como SSL/TLS.</li>
            <li>Firmas digitales, que permiten verificar la autenticidad e integridad de un mensaje.</li>
            <li>Cifrado de datos para proteger información sensible en aplicaciones y sistemas.</li>
        </ul>

        <h4>Ventajas y Desventajas</h4>
        <h5>Ventajas:</h5>
        <ul>
            <li>Proporciona un alto nivel de seguridad debido a la naturaleza asimétrica del algoritmo.</li>
            <li>No requiere que las partes compartan una clave secreta antes de la comunicación.</li>
            <li>Ideal para intercambios seguros de información en redes no seguras.</li>
            <li>Permite la implementación de firmas digitales, lo que asegura la autenticidad del mensaje.</li>
        </ul>

        <h5>Desventajas:</h5>
        <ul>
            <li>Es más lento en comparación con algoritmos de cifrado simétrico como AES.</li>
            <li>Requiere claves más largas (al menos 2048 bits recomendados) para mantener la seguridad, lo que puede aumentar la carga computacional.</li>
            <li>La gestión y almacenamiento seguro de claves son críticos para mantener la seguridad del sistema.</li>
            <li>Vulnerable a ciertos ataques como el ataque de canal lateral si no se implementa correctamente.</li>
        </ul>

        <h4>Consideraciones Adicionales</h4>
        <p>
            Para garantizar la seguridad de las comunicaciones usando RSA, es esencial mantener la clave privada en secreto y utilizar claves de longitud adecuada. Además, es importante actualizar las claves periódicamente para mitigar riesgos de seguridad. También se debe considerar la implementación de RSA en combinación con otros algoritmos de cifrado simétrico para optimizar la velocidad y la seguridad en aplicaciones prácticas.
        </p>

        <h4>Ejemplo de Uso</h4>
        <p>
            Un ejemplo común de uso de RSA es en las conexiones HTTPS. Al establecer una conexión segura, el servidor envía su clave pública al cliente, que la utiliza para cifrar un mensaje que incluye una clave secreta simétrica (usando AES). Este mensaje cifrado es enviado al servidor, que lo descifra utilizando su clave privada.
        </p>

    </div>
</div>

<div class="modal" id="modal-uso62">
    <div class="modal-content">
        <span class="close-btn" id="close-btn62">&times;</span>
        <h3>Ayuda</h3>
        <div>
            <img src="<?= base_url('img/Leel.png'); ?>" alt="Ayuda 1" class="imagenayuda" />
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/node-forge@0.10.0/dist/forge.min.js"></script>
<script>
    // Función para generar claves RSA
 function generarClavesRSA() {
    const { pki } = forge;

    // Generar claves RSA
    const claves = pki.rsa.generateKeyPair(2048);
    const clavePublica = pki.publicKeyToPem(claves.publicKey);
    const clavePrivada = pki.privateKeyToPem(claves.privateKey);

    document.getElementById("ClavePublica").value = clavePublica;
    document.getElementById("ClavePrivada").value = clavePrivada;

    console.log("Claves generadas con Forge:", clavePublica, clavePrivada);
}


    // Función para cifrar si ya hay claves y mensaje
    async function cifrarSiHayClaves() {
        const mensaje = document.getElementById("mensajeRSA").value;
        const ClavePublica = document.getElementById("ClavePublica").value;

        // Solo cifrar si existe mensaje y claves ya generadas
        if (mensaje && clavePublica) {
            const encoder = new TextEncoder();
            const datosCifrados = await window.crypto.subtle.encrypt({
                    name: "RSA-OAEP"
                },
                clavePublica,
                encoder.encode(mensaje)
            );

            mensajeCifradoArrayBuffer = datosCifrados;

            // Convertir a base64 y mostrar en el campo de mensaje cifrado
            const mensajeCifradoBase64 = btoa(String.fromCharCode(...new Uint8Array(datosCifrados)));
            document.getElementById("mensajeCifradoRSA").value = mensajeCifradoBase64;
        }
    }

    // Función auxiliar para convertir ArrayBuffer a Base64
    function arrayBufferToBase64(buffer) {
        let binary = '';
        const bytes = new Uint8Array(buffer);
        const len = bytes.byteLength;
        for (let i = 0; i < len; i++) {
            binary += String.fromCharCode(bytes[i]);
        }
        return btoa(binary);
    }

    // Función para descifrar el mensaje cifrado usando la clave privada
    async function descifrarMensajeRSA() {
        const mensajeCifradoBase64 = document.getElementById("mensajeCifradoRSA").value;
        const clavePrivadaPEM = document.getElementById("ClavePrivada").value;

        if (mensajeCifradoBase64 && clavePrivadaPEM) {
            try {
                // Convertir la clave privada PEM a CryptoKey
                const clavePrivada = await importarClavePrivada(clavePrivadaPEM);

                // Convertir el mensaje cifrado (Base64) a ArrayBuffer
                const mensajeCifradoArrayBuffer = base64ToArrayBuffer(mensajeCifradoBase64);

                const datosDescifrados = await window.crypto.subtle.decrypt({
                        name: "RSA-OAEP"
                    },
                    clavePrivada,
                    mensajeCifradoArrayBuffer
                );

                const decoder = new TextDecoder();
                const mensajeDescifrado = decoder.decode(datosDescifrados);

                // Mostrar el mensaje descifrado en el campo correspondiente
                document.getElementById("mensajeRSA").value = mensajeDescifrado;
            } catch (error) {
                console.error("Error al descifrar el mensaje:", error);
                alert("Hubo un error al descifrar el mensaje.");
            }
        } else {
            alert("No hay mensaje cifrado o clave privada disponibles.");
        }
    }

    // Función para importar la clave privada desde PEM a CryptoKey
    async function importarClavePrivada(clavePrivadaPEM) {
        // Limpiar el formato de la clave PEM
        const clavePrivadaBase64 = clavePrivadaPEM
            .replace("-----BEGIN PRIVATE KEY-----", "")
            .replace("-----END PRIVATE KEY-----", "")
            .replace(/\s/g, '');

        const clavePrivadaArrayBuffer = base64ToArrayBuffer(clavePrivadaBase64);

        return window.crypto.subtle.importKey(
            "pkcs8",
            clavePrivadaArrayBuffer, {
                name: "RSA-OAEP",
                hash: "SHA-256"
            },
            true,
            ["decrypt"]
        );
    }

    // Función para convertir Base64 a ArrayBuffer
    function base64ToArrayBuffer(base64) {
        const binaryString = atob(base64);
        const len = binaryString.length;
        const bytes = new Uint8Array(len);
        for (let i = 0; i < len; i++) {
            bytes[i] = binaryString.charCodeAt(i);
        }
        return bytes.buffer;
    }

    // Función para manejar el cifrado y descifrado de mensajes
    document.getElementById('mensajeRSA').addEventListener('input', function() {
        let mensajeAES = this.value;

        if (mensajeRSA && clavePublica) {
            cifrarSiHayClaves();
        } else if (!mensajeRSA) {
            limpiarCampos4(); // Si el mensaje cifrado se borra, limpiar ambos campos
        }
    });

    // Función para manejar el descifrado de mensajes
    document.getElementById('mensajeCifradoRSA').addEventListener('input', function() {
        let mensajeCifradoRSA = this.value;
        let clavePrivada = document.getElementById("ClavePrivada").value;

        if (mensajeCifradoRSA && clavePrivada) {
            descifrarMensajeRSA()
        } else if (!mensajeCifradoRSA) {
            limpiarCampos4(); // Si el mensaje cifrado se borra, limpiar ambos campos
        }
    });

    document.getElementById('ClavePrivada').addEventListener('input', function() {
        let mensajeCifradoRSA = this.value;
        let clavePrivada = document.getElementById("mensajeCifradoRSA").value;

        if (mensajeCifradoRSA && clavePrivada) {
            descifrarMensajeRSA()
        } else if (!mensajeCifradoRSA) {
            limpiarCampos4(); // Si el mensaje cifrado se borra, limpiar ambos campos
        }
    });



    const limpiarCampos4 = () => {
        document.getElementById('mensajeRSA').value = '';
        document.getElementById('ClavePublica').value = '';
        document.getElementById('ClavePrivada').value = '';
        document.getElementById('mensajeCifradoRSA').value = '';
    };

 const copiarTexto4 = (inputId) => {
    const inputElement = document.getElementById(inputId); // Obtener el input por su ID
    if (inputElement) {
        const texto = inputElement.value; // Obtener el valor del input
        if (navigator.clipboard) {
            navigator.clipboard.writeText(texto)
                .then(() => {
                    mostrarMensajeError4('Texto copiado al portapapeles.');
                })
                .catch(() => {
                    mostrarMensajeError4('Error al copiar el texto.');
                });
        } else {
            // Solución alternativa si la API del portapapeles no está disponible
            const textArea = document.createElement('textarea');
            textArea.value = texto;
            document.body.appendChild(textArea);
            textArea.select();
            try {
                document.execCommand('copy');
                mostrarMensajeError4('Texto copiado al portapapeles.');
            } catch (err) {
                mostrarMensajeError4('Error al copiar el texto.');
            }
            document.body.removeChild(textArea);
        }
    } else {
        mostrarMensajeError4('El elemento con el ID especificado no existe.');
    }
};

    const mostrarMensajeError4 = (mensajeRSA) => {
        const mensajeError = document.getElementById('mensaje-error4');
        mensajeError.textContent = mensajeRSA;
        mensajeError.classList.remove('oculto');
    };

    document.addEventListener('click', function() {
        const mensajeError = document.getElementById('mensaje-error4');
        mensajeError.classList.add('oculto');
    });

    document.querySelectorAll('.boton-copiar_img, input').forEach(element => {
        element.addEventListener('click', function(event) {
            event.stopPropagation();
        });
    });
    /*

        document.getElementById('mensajeCifradoRSA').addEventListener('input', function() {
            let mensajeCifradoRSA = this.value;
            let claveAES = document.getElementById('Clave').value;

            // Comprobar la longitud de la clave
            if (claveAES.length === 16 || claveAES.length === 32) {

            } else {
                mostrarMensajeError4('La clave debe tener 16 o 32 caracteres');
            }

            if (mensajeCifradoRSA && claveAES) {
                descifrarAES(mensajeCifradoRSA, claveAES).then(descifrado => {
                    document.getElementById('mensajeRSA').value = descifrado;
                });
            } else if (!mensajeCifradoRSA) {
                limpiarCampos4(); // Si el mensaje cifrado se borra, limpiar ambos campos
            }
        });

        document.getElementById('Clave').addEventListener('input', function() {
            let claveAES = this.value;
            let mensajeRSA = document.getElementById('mensajeRSA').value;
            let mensajeCifradoRSA = document.getElementById('mensajeCifradoRSA').value;

            // Comprobar la longitud de la clave
            if (claveAES.length === 16 || claveAES.length === 32) {

            } else {
                mostrarMensajeError4('La clave debe tener 16 o 32 caracteres');
            }

            if (mensajeRSA && claveAES) {
                cifrarAES(mensajeRSA, claveAES).then(cifrado => {
                    document.getElementById('mensajeCifradoRSA').value = cifrado;
                });
            } else if (mensajeCifradoRSA && claveAES) {
                descifrarAES(mensajeCifradoRSA, claveAES).then(descifrado => {
                    document.getElementById('mensajeRSA').value = descifrado;
                });
            } else if (!claveAES) {
                document.getElementById('mensajeCifradoRSA').value = '';
            }
        });*/
</script>
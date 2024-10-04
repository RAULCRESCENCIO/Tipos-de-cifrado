
    <div class="contenedor">
        <center>
            <div class="imagenes-esquinas">
                <div class="tooltip-container" data-tooltip="Información del Cifrado César">
                    <img src="<?= base_url('img/expediente.png'); ?>" alt="informacion" id="imagen-info1" class="imagen-info">
                </div>
                <div class="tooltip-container">
                    <p class="mensaje-error3 oculto" id="mensaje-error"></p>
                </div>
                <div class="tooltip-container" data-tooltip="Cómo usar">
                    <img src="<?= base_url('img/buscando.png'); ?>" alt="informacion" id="imagen-uso2" class="imagen-uso">
                </div>
            </div>

            <h2>Cifrado César</h2>
            <div class="formulario">

                <div class="campo">
                    <label for="mensaje">Mensaje</label>
                    <div>
                        <input type="text" id="mensaje" name="mensaje" class="mensaje" placeholder="Ingresa el mensaje">
                        <div class="tooltip-container" data-tooltip="Copiar texto">
                            <img class="boton-copiar_img" data-tooltip="copiar texto" onclick="copiarTexto('mensaje')" src="<?= base_url('img/pegar.png'); ?>" alt="copiar">
                        </div>
                    </div>
                </div>

                <div class="campo">
                    <label for="desplazamiento">Desplazamiento</label>
                    <input type="number" id="desplazamiento" name="desplazamiento" class="numeroDesplazamiento" placeholder="Número de desplazamiento" min="1">
                </div>

                <div class="campo">
                    <label for="mensajeCifrado">Mensaje Cifrado</label>
                    <div>
                        <input type="text" id="mensajeCifrado" name="mensajeCifrado" class="mensajeCifrado" placeholder="Mensaje cifrado">
                        <div class="tooltip-container" data-tooltip="Copiar texto">
                            <img class="boton-copiar_img" data-tooltip="copiar texto" onclick="copiarTexto('mensajeCifrado')" src="<?= base_url('img/pegar.png'); ?>" alt="copiar">
                        </div>

                    </div>
                </div>
            </div>
        </center>
    </div>

    <div class="modal" id="modal-info1">
        <div class="modal-content">
            <span class="close-btn" id="close-btn1">&times;</span>
            <h3>Información del Cifrado César</h3>
            <h4>Funcionamiento del Cifrado César</h4>
            <p>
                <strong>Desplazamiento:</strong> Se elige un número entero que determina cuántas posiciones se moverán las letras.
                Este número se conoce como "desplazamiento" o "clave". Por ejemplo, si el desplazamiento es 3,
                la letra A se convertirá en D, B en E, C en F, y así sucesivamente.
            </p>
            <p>
                <strong>Alfabeto Circular:</strong> El cifrado se aplica de manera circular. Por ejemplo, si el desplazamiento lleva a
                la letra Z, vuelve a comenzar desde A. Así, con un desplazamiento de 3, Z se convierte en C.
            </p>
            <h4>Cifrado:</h4>
            <p>
                Para cifrar un mensaje, cada letra se reemplaza por la letra que está el número de posiciones del desplazamiento hacia
                adelante en el alfabeto. Los caracteres que no son letras (números, espacios, signos de puntuación) se dejan sin cambios.
            </p>
            <p>
                <strong>Descifrado:</strong> Para recuperar el texto original, se aplica el desplazamiento en sentido contrario. Si el
                desplazamiento fue de 3, se resta 3 para obtener el texto original.
            </p>
            <h4>Ejemplo</h4>
            <p>
                <strong>Texto Original:</strong> "HOLA" <br />
                <strong>Desplazamiento:</strong> 3
            </p>
            <table>
                <thead>
                    <tr>
                        <th>Letra</th>
                        <th>Cifrado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>H</td>
                        <td>K</td>
                    </tr>
                    <tr>
                        <td>O</td>
                        <td>R</td>
                    </tr>
                    <tr>
                        <td>L</td>
                        <td>O</td>
                    </tr>
                    <tr>
                        <td>A</td>
                        <td>D</td>
                    </tr>
                </tbody>
            </table>
            <p>
                <strong>Texto Cifrado:</strong> "KROD"
            </p>
            <h4>Seguridad</h4>
            <p>
                El cifrado César es muy fácil de romper, especialmente con herramientas modernas, ya que hay solo 25 posibles
                desplazamientos (en el caso del alfabeto inglés) y puede ser descifrado rápidamente con un ataque de fuerza bruta.
            </p>
            <h4>Uso Histórico</h4>
            <p>
                Este método recibe su nombre de Julio César, quien lo utilizaba para comunicarse con sus generales. Aunque hoy en
                día no es seguro para proteger información sensible, es una excelente manera de introducir conceptos básicos de
                criptografía.
            </p>
        </div>
    </div>


    <div class="modal" id="modal-uso2">
        <div class="modal-content">
            <span class="close-btn" id="close-btn2">&times;</span>
            <h3>Ayuda</h3>
            <div>
                <img src="<?= base_url('img/Leel.png'); ?>" alt="Ayuda 1" class="imagenayuda" />
            </div>
        </div>
    </div>


    <script>
       

        const cifrarMensaje = (texto, desplazamiento) => {
            return texto
                .split('')
                .map(char => {
                    if (char.match(/[A-Z]/)) {
                        return String.fromCharCode((char.charCodeAt(0) + desplazamiento - 65) % 26 + 65);
                    } else if (char.match(/[a-z]/)) {
                        return String.fromCharCode((char.charCodeAt(0) + desplazamiento - 97) % 26 + 97);
                    } else {
                        return char; // No cifrar caracteres que no son letras
                    }
                })
                .join('');
        };

        const descifrarMensaje = (texto, desplazamiento) => {
            return texto
                .split('')
                .map(char => {
                    if (char.match(/[A-Z]/)) {
                        return String.fromCharCode((char.charCodeAt(0) - desplazamiento + 26 - 65) % 26 + 65);
                    } else if (char.match(/[a-z]/)) {
                        return String.fromCharCode((char.charCodeAt(0) - desplazamiento + 26 - 97) % 26 + 97);
                    } else {
                        return char; // No descifrar caracteres que no son letras
                    }
                })
                .join('');
        };

        // Función que limpia ambos campos
        function limpiarCampos() {
            document.getElementById('mensaje').value = '';
            document.getElementById('mensajeCifrado').value = '';
            document.getElementById('desplazamiento').value = '';
        }

       const copiarTexto = (inputId) => {
    const inputElement = document.getElementById(inputId); // Obtener el input por su ID
    if (inputElement) {
        const texto = inputElement.value; // Obtener el valor del input
        if (navigator.clipboard) {
            navigator.clipboard.writeText(texto)
                .then(() => {
                    mostrarMensajeError('Texto copiado al portapapeles.');
                })
                .catch(() => {
                    mostrarMensajeError('Error al copiar el texto.');
                });
        } else {
            // Solución alternativa si la API del portapapeles no está disponible
            const textArea = document.createElement('textarea');
            textArea.value = texto;
            document.body.appendChild(textArea);
            textArea.select();
            try {
                document.execCommand('copy');
                mostrarMensajeError('Texto copiado al portapapeles.');
            } catch (err) {
                mostrarMensajeError('Error al copiar el texto.');
            }
            document.body.removeChild(textArea);
        }
    } else {
        mostrarMensajeError('El elemento con el ID especificado no existe.');
    }
};

        // Mostrar mensaje de error
        const mostrarMensajeError = (mensaje) => {
            const mensajeError = document.getElementById('mensaje-error');
            mensajeError.textContent = mensaje;
            mensajeError.classList.remove('oculto'); // Mostrar el mensaje
        };

        // Ocultar mensaje de error cuando se hace clic en cualquier lugar de la página
        document.addEventListener('click', function() {
            const mensajeError = document.getElementById('mensaje-error');
            mensajeError.classList.add('oculto'); // Ocultar el mensaje de error
        });

        // Evitar que el mensaje desaparezca si hacemos clic en las imágenes o inputs
        document.querySelectorAll('.boton-copiar_img, input').forEach(element => {
            element.addEventListener('click', function(event) {
                event.stopPropagation(); // Evitar que el evento de clic global afecte estos elementos
            });
        });

        // Eventos para manejar el cifrado y descifrado
        document.getElementById('mensaje').addEventListener('input', function() {
            let mensaje = this.value;
            let desplazamiento = parseInt(document.getElementById('desplazamiento').value) || 0;

            if (mensaje && desplazamiento > 0) {
                document.getElementById('mensajeCifrado').value = cifrarMensaje(mensaje, desplazamiento);
            } else if (!mensaje) {
                limpiarCampos(); // Si el mensaje se borra, limpiar ambos campos
            }
        });

        document.getElementById('mensajeCifrado').addEventListener('input', function() {
            let mensajeCifrado = this.value;
            let desplazamiento = parseInt(document.getElementById('desplazamiento').value) || 0;

            if (mensajeCifrado && desplazamiento > 0) {
                document.getElementById('mensaje').value = descifrarMensaje(mensajeCifrado, desplazamiento);
            } else if (!mensajeCifrado) {
                limpiarCampos(); // Si el mensaje cifrado se borra, limpiar ambos campos
            }
        });

        document.getElementById('desplazamiento').addEventListener('input', function() {
            let desplazamiento = parseInt(this.value) || 0;
            let mensaje = document.getElementById('mensaje').value;
            let mensajeCifrado = document.getElementById('mensajeCifrado').value;

            if (mensaje && desplazamiento > 0) {
                document.getElementById('mensajeCifrado').value = cifrarMensaje(mensaje, desplazamiento);
            } else if (mensajeCifrado && desplazamiento > 0) {
                document.getElementById('mensaje').value = descifrarMensaje(mensajeCifrado, desplazamiento);
            } else if (desplazamiento <= 0) {
                document.getElementById('mensajeCifrado').value = ''; // Limpiar mensaje cifrado si el desplazamiento es 0 o negativo
            }
        });
    </script>


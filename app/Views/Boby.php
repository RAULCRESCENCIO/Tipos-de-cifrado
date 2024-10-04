

<script>
    const modal1 = document.getElementById('modal-info1');
    const closeModalBtn1 = document.getElementById('close-btn1');
    const infoIcon1 = document.getElementById('imagen-info1');

    const modal2 = document.getElementById('modal-uso2');
    const closeModalBtn2 = document.getElementById('close-btn2');
    const infoIcon2 = document.getElementById('imagen-uso2')

    const modal3 = document.getElementById('modal-info3');
    const closeModalBtn3 = document.getElementById('close-btn3');
    const infoIcon3 = document.getElementById('imagen-info3');

    const modal4 = document.getElementById('modal-uso4');
    const closeModalBtn4 = document.getElementById('close-btn4');
    const infoIcon4 = document.getElementById('imagen-uso4')

    const modal53 = document.getElementById('modal-info53');
    const closeModalBtn53 = document.getElementById('close-btn53');
    const infoIcon53 = document.getElementById('imagen-info53');

    const modal52 = document.getElementById('modal-uso52');
    const closeModalBtn52 = document.getElementById('close-btn52');
    const infoIcon52 = document.getElementById('imagen-uso52')

    const modal61 = document.getElementById('modal-info61');
    const closeModalBtn61 = document.getElementById('close-btn61');
    const infoIcon61 = document.getElementById('imagen-info61');

    const modal62 = document.getElementById('modal-uso62');
    const closeModalBtn62 = document.getElementById('close-btn62');
    const infoIcon62 = document.getElementById('imagen-uso62')


    const modal71 = document.getElementById('modal-info71');
    const closeModalBtn71 = document.getElementById('close-btn71');
    const infoIcon71 = document.getElementById('imagen-info71');

    const modal72 = document.getElementById('modal-uso72');
    const closeModalBtn72 = document.getElementById('close-btn72');
    const infoIcon72 = document.getElementById('imagen-uso72')

    // Mostrar la ventana modal al hacer clic en la imagen de información
    infoIcon1.onclick = function() {
        modal1.style.display = 'block';
    };

    // Cerrar la ventana modal al hacer clic en la "X"
    closeModalBtn1.onclick = function() {
        modal1.style.display = 'none';
    };

    // Mostrar la ventana modal al hacer clic en la imagen de información
    infoIcon2.onclick = function() {
        modal2.style.display = 'block';
    };

    // Cerrar la ventana modal al hacer clic en la "X"
    closeModalBtn2.onclick = function() {
        modal2.style.display = 'none';
    };

    // Mostrar la ventana modal al hacer clic en la imagen de información
    infoIcon3.onclick = function() {
        modal3.style.display = 'block';
    };

    // Cerrar la ventana modal al hacer clic en la "X"
    closeModalBtn3.onclick = function() {
        modal3.style.display = 'none';
    };

    // Mostrar la ventana modal al hacer clic en la imagen de información
    infoIcon4.onclick = function() {
        modal4.style.display = 'block';
    };

    // Cerrar la ventana modal al hacer clic en la "X"
    closeModalBtn4.onclick = function() {
        modal4.style.display = 'none';
    };


    // Cerrar la ventana modal al hacer clic en la "X"
    infoIcon53.onclick = function() {
        modal53.style.display = 'block';
    };

    // Cerrar la ventana modal al hacer clic en la "X"
    closeModalBtn53.onclick = function() {
        modal53.style.display = 'none';
    };

    // Mostrar la ventana modal al hacer clic en la imagen de información
    infoIcon52.onclick = function() {
        modal52.style.display = 'block';
    };

    // Cerrar la ventana modal al hacer clic en la "X"
    closeModalBtn52.onclick = function() {
        modal52.style.display = 'none';
    };

    // Mostrar la ventana modal al hacer clic en la imagen de información
    infoIcon61.onclick = function() {
        modal61.style.display = 'block';
    };

    // Cerrar la ventana modal al hacer clic en la "X"
    closeModalBtn61.onclick = function() {
        modal61.style.display = 'none';
    };

    // Mostrar la ventana modal al hacer clic en la imagen de información
    infoIcon62.onclick = function() {
        modal62.style.display = 'block';
    };

    // Cerrar la ventana modal al hacer clic en la "X"
    closeModalBtn62.onclick = function() {
        modal62.style.display = 'none';
    };

    // Mostrar la ventana modal al hacer clic en la imagen de información
    infoIcon71.onclick = function() {
        modal71.style.display = 'block';
    };

    // Cerrar la ventana modal al hacer clic en la "X"
    closeModalBtn71.onclick = function() {
        modal71.style.display = 'none';
    };

    // Mostrar la ventana modal al hacer clic en la imagen de información
    infoIcon72.onclick = function() {
        modal72.style.display = 'block';
    };

    // Cerrar la ventana modal al hacer clic en la "X"
    closeModalBtn72.onclick = function() {
        modal72.style.display = 'none';
    };

    // Cerrar la ventana modal al hacer clic fuera de la ventana modal
    window.onclick = function(event) {
        if (event.target == modal1) {
            modal1.style.display = 'none';
        }
        if (event.target == modal2) {
            modal2.style.display = 'none';
        }
        if (event.target == modal3) {
            modal3.style.display = 'none';
        }
        if (event.target == modal4) {
            modal4.style.display = 'none';
        }
        if (event.target == modal53) {
            modal53.style.display = 'none';
        }
        if (event.target == modal52) {
            modal52.style.display = 'none';
        }
        if (event.target == modal61) {
            modal61.style.display = 'none';
        }
        if (event.target == modal62) {
            modal62.style.display = 'none';
        }
        if (event.target == modal71) {
            modal71.style.display = 'none';
        }
        if (event.target == modal72) {
            modal72.style.display = 'none';
        }
    };
</script>
<div>
    <div class="App-header2">
        <div>
            <img src="<?= base_url('img/cifrado.png'); ?>" alt="cifrado" id="img-menu" class="img-menu">
        </div>

        <div>
            <h1 class="titulo">Métodos de Cifrado</h1>
            <h2 class="titulo">Simétricos, Asimétricos, Hash, de desplazamiento y de transposición</h2>
        </div>


    </div>


  
    <nav>
        <a href="#seccion-cesar">Cifrado César</a>
        <a href="#seccion-scytale">Cifrado Escitala</a>
        <a href="#seccion-aes">Cifrado AES</a>
        <a href="#seccion-rsa">Cifrado RSA</a>
        <a href="#seccion-md5">Cifrado MD5</a>
        <a href="<?= base_url('/Comparación de Frameworks - Bina 1.pdf') ?>">Reporte</a>
        <div class="animation start-home"></div>
    </nav>

</div>


<!-- Secciones del contenido -->
<div id="seccion-cesar">
    <?= $contenido1; ?> <!-- Contenido de César -->
</div>

<div id="seccion-scytale">
    <?= $contenido2; ?> <!-- Contenido de Scytale -->
</div>

<div id="seccion-aes">
    <?= $contenido3; ?> <!-- Contenido de AES -->
</div>

<div id="seccion-rsa">
    <?= $contenido4; ?> <!-- Contenido de RSA -->
</div>

<div id="seccion-md5">
    <?= $contenido5; ?> <!-- Contenido de MD5 -->
</div>
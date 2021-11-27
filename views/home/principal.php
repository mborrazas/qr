<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>

<body id="home" class="container-fluid">
    <section id="first" class="row">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">Logo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Planes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Inicia sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="registrate" href="#">Registrate</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <div class="leftHeader col">
            <h2 id="titleHeader">
                Crea tus propios códigos QR y comparte tu información con los demás
            </h2>
            <p id="subtitleHeader">
                Es muy fácil. Puedes generar, gestionar tus códigos QR.
            </p>
            <a href="/generate">
                <button id="buttonHeader">
                    Crear código QR
                </button>
            </a>
        </div>
        <div class="rightHeader col">
            <img src="header.png" alt="">
        </div>
    </section>
    <section id="step2">
        <h2>Crea tu QR en minutos</h2>
        <div class="row">
            <div class="col">
                <img src="step1.svg" alt="">
                <h2 class="subtitle">Elige el contenido de tu QR
                </h2>
                <p>
                    Selecciona entre una amplia variedad de opciones: PDF, menú, video, tarjetas de visita, web, apps, etc.
                </p>
            </div>
            <div class="col">
                <img src="step2.svg" alt="">
                <h2 class="subtitle"> Personaliza y diseñalo a medida
                </h2>
                <p>
                    Completa toda la información y utiliza nuestro generador de QR para conseguir un diseño único.
                </p>
            </div>
            <div class="col">
                <img src="step3.svg" alt="">
                <h2 class="subtitle">Descarga tu código QR
                </h2>
                <p>Consigue tu código QR en distintos formatos (pdf, png, svg), imprímelo o muéstralo en formato digital y listo!
                </p>
            </div>
        </div>
        <button>
            Crear código QR
        </button>
    </section>
    <section id="step3">
        <h2>Crea distintos tipos de QR</h2>
        <p class="subtitle">Los códigos QR pueden tener una amplia cantidad de contenidos y nosotros tenemos todos esos formatos.</p>
        <div id="containerTipos">
            <div class="item">
                <p>Menú</p>
            </div>
            <div class="item">
                <p>Vcard Plus</p>
            </div>
            <div class="item">
                <p>Negocio
                </p>
            </div>
            <div class="item">
                <p>Página web
                </p>
            </div>
            <div class="item">
                <p>Apps
                </p>
            </div>
            <div class="item">
                <p>
                    WIFI
                </p>
            </div>
            <div class="item">
                <p>Video</p>
            </div>
            <div class="item">
                <p>PDF</p>
            </div>
            <div class="item">
                <p>Imágenes</p>
            </div>
            <div class="item">
                <p>
                    Listado de enlaces
                </p>
            </div>
        </div>
        <button>
            Crear código QR
        </button>
    </section>
    <section id="step4">
        <h2>Suscríbete y accede a nuestros beneficios</h2>
    </section>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
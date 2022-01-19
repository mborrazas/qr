<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body id="home" class="container-fluid">
<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
        <img src="Logo.jpeg" alt="" />
    </a>
    <ul class="nav nav-pills">
        <li class="nav-item"><a href="#step4" class="nav-link">Precios</a></li>
        <li class="nav-item"><a href="/generate" class="nav-link">Crear código QR</a></li>
    </ul>
</header>
    <section id="first" class="row">
        <div class="leftHeader col">
            <h2 id="titleHeader">
                Crea tus propios códigos QR y comparte tu información con los demás
            </h2>
            <p id="subtitleHeader">
                Es muy fácil. Puedes generar, gestionar tus códigos QR.
            </p>
            <a href="/generate">
                <button class="button">
                    Crear código QR
                </button>
            </a>
        </div>
        <div class="rightHeader col">
            <img src="https://qrty.mobi/static/media/main_banner_x2.d3be16a9.png" alt="">
        </div>
    </section>
    <section id="step2">
        <h2 id="title">Crea tu QR en minutos</h2>
        <div class="row">
            <div class="col">
                <img src="https://qrty.mobi/static/media/step_1.d650ec93.svg" alt="">
                <h2 class="subtitle">Elige el contenido de tu QR
                </h2>
                <p>
                    Selecciona entre una amplia variedad de opciones: PDF, menú, video, tarjetas de visita, web, apps, etc.
                </p>
            </div>
            <div class="col">
                <img src="https://qrty.mobi/static/media/step_2.94540cdc.svg" alt="">
                <h2 class="subtitle"> Personaliza y diseñalo a medida
                </h2>
                <p>
                    Completa toda la información y utiliza nuestro generador de QR para conseguir un diseño único.
                </p>
            </div>
            <div class="col">
                <img src="https://qrty.mobi/static/media/step_3.e66c4ab2.svg" alt="">
                <h2 class="subtitle">Descarga tu código QR
                </h2>
                <p>Consigue tu código QR en distintos formatos (pdf, png, svg), imprímelo o muéstralo en formato digital y listo!
                </p>
            </div>
        </div>
        <a href="/generate">
            <button>
                Crear código QR
            </button>
        </a>
    </section>
    <section id="step4">
        <h2>Suscríbete y accede a nuestros beneficios</h2>
        <div id="box">
            <div id="top">
                <p id="title">Accede a todas estas ventajas que te ofrecemos</p>
                <div id="list">
                    <p class="floatleft">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 24px;"><path class="custom-color--circle-check-green" fill="#31d3b3" d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path><path fill="#000" d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path></svg>
                        Crea QR dinámicos ilimitados
                    </p>
                    <p class="floatright">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 24px;"><path class="custom-color--circle-check-green" fill="#31d3b3" d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path><path fill="#000" d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path></svg>
                        Escaneos ilimitados
                    </p>
                    <p class="floatleft">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 24px;"><path class="custom-color--circle-check-green" fill="#31d3b3" d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path><path fill="#000" d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path></svg>
                        Variedad de tipos de QR
                    </p>
                    <p class="floatright">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 24px;"><path class="custom-color--circle-check-green" fill="#31d3b3" d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path><path fill="#000" d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path></svg>
                        Analítica completa de QR
                    </p>
                    <p class="floatleft">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 24px;"><path class="custom-color--circle-check-green" fill="#31d3b3" d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path><path fill="#000" d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path></svg>
                        Edición y gestión de QR
                    </p>
                    <p class="floatright">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 24px;"><path class="custom-color--circle-check-green" fill="#31d3b3" d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path><path fill="#000" d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path></svg>
                        Variedad de formatos de descarga
                    </p>
                </div>
            </div>
            <div id="bottom">
                <div class="item">
                    <p class="title">
                        Plan de prueba
                    </p>
                    <div class="days">(14 días)</div>
                    <p class="price">0,50 €*</p>
                    <a href="/generate">
                        <button class="button">
                            Comprar
                        </button>
                    </a>
                </div>
                <div class="item">
                    <p class="title">
                        Plan Anual
                    </p>
                    <div class="days">(12 meses)</div>
                    <p class="price">200,00 €</p>
                    <a href="/generate">
                        <button class="button">
                            Comprar
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body id="home" class="container-fluid">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><img src="Logo.jpeg" alt="" style="width: 29%;" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#step4">Precios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/generate">Crear código QR</a>
            </li>
        </ul>
    </div>
</nav>
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
<section id="step5">
    <h2 class="title">Crea diferentes tipos de códigos QR</h2>
    <p class="subtitle">Los códigos QR pueden contener una gran cantidad de contenido y en Qrty los ofrecemos todos.</p>
    <div id="buttons">
        <div class="containerButtons">
            <div class="col element" data-type="website">
                <div class="containerIcon">
                    <i class="far fa-window-maximize"></i>
                </div>
                <h3 class="title">Página web</h3>
            </div>
            <div class="col element seletType" data-type="listOfLinks">
                <div class="containerIcon">
                    <i class="fas fa-list"></i>
                </div>
                <h3 class="title">Listado de Enlaces</h3>
            </div>
            <div class="col element seletType" data-type="vcard">
                <div class="containerIcon">
                    <i class="fas fa-user-friends"></i>
                </div>
                <h3 class="title">Vcard Plus</h3>
            </div>
            <div class="col element seletType" data-type="business">
                <div class="containerIcon">
                    <i class="fas fa-store"></i>
                </div>
                <h3 class="title">Negocio</h3>
            </div>
        </div>
        <div class="containerButtons">
            <div class="col element seletType" data-type="apps">
                <div class="containerIcon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="title">Apps</h3>
            </div>
            <div class="col element seletType" data-type="pdf">
                <div class="containerIcon">
                    <i class="far fa-file-pdf"></i>
                </div>
                <h3 class="title">PDF</h3>
            </div>
            <div class="col element seletType" data-type="menu">
                <div class="containerIcon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3 class="title">Carta / Menú</h3>
            </div>
            <div class="col element seletType" data-type="gallery">
                <div class="containerIcon">
                    <i class="fas fa-images"></i>
                </div>
                <h3 class="title">Imágenes</h3>
            </div>
        </div>
        <div class="containerButtons">
            <div class="col element seletType" data-type="video">
                <div class="containerIcon">
                    <i class="fas fa-photo-video"></i>
                </div>
                <h3 class="title">Video</h3>
            </div>
            <div class="col element seletType" data-type="wifi">
                <div class="containerIcon">
                    <i class="fas fa-wifi"></i>
                </div>
                <h3 class="title">WiFi</h3>
            </div>
        </div>
    </div>
    <aside>
        <h2>Ejemplo</h2>
        <div id="containerExample">
            <div id="phone">
                <div id="noch">
                    <div id="camera"></div>
                    <div id="speaker"></div>
                </div>
                <div id="containerScreen">
                    <div id="message">
                        <p>Selecciona un tipo de QR</p>
                    </div>
                    <div class="hide" id="website">
                        <div id="title">
                            <p>http://www.tutiendaonline.com</p>
                        </div>
                        <div id="containerWebsite">
                            <img src="https://qrty.mobi/static/media/mockup_url.fc2d63b8.png" alt="">
                            <h3>Tu tienda online</h3>
                            <p id="subtitle">Compra productos al mejor precio</p>
                            <button disabled>Ver más</button>
                        </div>
                    </div>
                    <div class="hide" id="listOfLinks">
                        <div id="title">
                            <img src="https://d25rq8gxcq0p71.cloudfront.net/dictionary-images/324/419665d2-74b7-49d4-b3c8-3aea253f966f.jpg"
                                 alt="" id="imgTitle">
                            <h3>Fernando Rodriguez</h3>
                            <p>Recetas gourmet</p>
                        </div>
                        <div id="links">
                            <div class="item">
                                <img src="" alt="">
                                <p>Tortas</p>
                            </div>
                            <div class="item">
                                <img src="" alt="">
                                <p>Pastas</p>
                            </div>
                            <div class="item">
                                <img src="" alt="">
                                <p>Carnes</p>
                            </div>
                        </div>
                    </div>
                    <div class="hide" id="vcard">
                        <div id="backgroundTop"></div>
                        <div id="title">
                            <img src="https://qrty.mobi/static/media/mockup_vcard.d33781cd.png" alt="">
                            <h3>Esteban Rodriguez</h3>
                            <p>CEO</p>
                        </div>
                        <div id="icons">

                        </div>
                    </div>
                    <div id="business" class="hide">
                        <div id="backgroundTop">
                            <h3>Café de especialidad</h3>
                        </div>
                        <img src="https://qrty.mobi/static/media/mockup_business.8d33c299.png" alt="">
                        <div id="containerInfo">
                            <h3>Special Coffee</h3>
                            <p>Café natural, artesano y local.
                                Abierto de martes a domingo de 8 a 19h.
                                Los lunes se imparten cursos de barista.
                            </p>
                            <button>Pedido online</button>
                        </div>
                    </div>
                    <div id="apps" class="hide">
                        <div id="title">
                            <h3>Myfintech</h3>
                            <p>Tech & Corp</p>
                        </div>
                        <div id="containerInfo">
                            <img src="" alt="">
                            <p>Controla todas tus finanzas de forma sencilla y rápida.</p>
                            <button>Google</button>
                            <button>Apple</button>
                        </div>
                    </div>
                    <div id="pdf" class="hide">
                        <div id="title">
                            <p id="miniTitle">Los Burgueses</p>
                            <h2>Las Burguers</h2>
                            <p>Nuestra selección de hamburguesas te sorprenderá. Su sabor te deleitará.</p>
                        </div>
                        <div id="backgroundPdf">
                            <img src="/assets/img/pdfmenu.jpeg" alt="">
                        </div>
                    </div>
                    <div  id="menu" class="hide">
                        <div id="title">
                            <h2>Don Tulio</h2>
                            <p>100% Parrilla Argentina de campo</p>
                        </div>
                        <div id="containerMenu">
                            <h3>ENTRANTES</h3>
                            <div class="item">
                                <img src="https://qrty.mobi/static/media/mockup_menu_bone.0c9fb772.png" alt="">
                                <div class="info">
                                    <p class="title">T-Bone</p>
                                    <p class="subtitle">Nuestra pieza estrella. Una vez lo pruebas, no hay vuelta atrás.</p>
                                    <p class="price">65€</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="https://qrty.mobi/static/media/mockup_menu_chorizo.49c1c4fb.png" alt="">
                                <div class="info">
                                    <p class="title">Chorizo Criollo</p>
                                    <p class="subtitle">Nuestra pieza estrella. Una vez lo pruebas, no hay vuelta atrás.</p>
                                    <p class="price">65€</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hide" id="gallery">
                        <div id="title">
                            <h2>Nuestra boda</h2>
                            <p>Las palabras no alcanzan para describir el amor que tenemos. Por eso compartimos con
                                vosotros las fotos de nuestra boda.
                                Con cariño M y P.
                            </p>
                        </div>
                        <div id="imagesGallery"></div>
                    </div>
                    <div class="hide" id="video">
                        <p id="firstTitle">Tech & Corp</p>
                        <img src="https://qrty.mobi/static/media/mockup_business.8d33c299.png" alt="">
                        <p id="title">Manifiesto Tech & Corp</p>
                        <p id="subitle">Un decálogo para que conozcas todo lo que somos en Tech & Corp.</p>
                        <button>Saber más</button>
                    </div>
                    <div class="hide" id="wifi">
                        <div id="containerWifi">
                            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 40 40" aria-hidden="true" style="font-size: 54px;"><path d="M19.994 21.581c2.877 0 5.209 2.333 5.209 5.209s-2.333 5.209-5.209 5.209c-2.877 0-5.209-2.333-5.209-5.209s2.333-5.209 5.209-5.209zM19.994 23.070c-2.055 0-3.721 1.666-3.721 3.721s1.666 3.721 3.721 3.721c2.055 0 3.721-1.666 3.721-3.721s-1.666-3.721-3.721-3.721zM19.994 14.884c3.495 0 6.768 1.34 9.242 3.7l0.23 0.224-1.052 1.052c-2.222-2.222-5.214-3.488-8.419-3.488-3.102 0-6.003 1.185-8.201 3.276l-0.217 0.212-1.052-1.052c2.499-2.499 5.867-3.924 9.471-3.924zM19.994 7.442c5.482 0 10.619 2.123 14.477 5.853l0.255 0.251-1.052 1.052c-3.609-3.609-8.476-5.669-13.68-5.669-5.086 0-9.85 1.967-13.432 5.425l-0.248 0.244-1.052-1.052c3.886-3.886 9.129-6.104 14.733-6.104zM19.994-0c7.467 0 14.467 2.906 19.71 8.005l0.284 0.28-1.052 1.052c-4.996-4.996-11.738-7.849-18.942-7.849-7.071 0-13.696 2.748-18.662 7.574l-0.279 0.275-1.052-1.052c5.273-5.273 12.391-8.285 19.994-8.285z"></path></svg>
                            <p>¿Unirse a la red Wi-fi
                                “Mi Restaurante”?</p>
                            <button id="cancelButton">Cancelar</button>
                            <button id="acceptButton">Acceder</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

</section>
    <footer>

    </footer>
<!-- IMPORT BOOTSTRAP SCRIPTS-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
    $( document ).ready(function() {
        $('.element').each(function () {
            this.addEventListener('click', selectElement);
        });

        function selectElement() {
            $(".element.active").removeClass("active");
            $(this).addClass('active');
            $('#containerScreen>div').addClass('hide');
            $('#' + $(this).attr("data-type")).removeClass('hide');
        }
     });
</script>
</body>

</html>
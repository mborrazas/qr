<?php $translate = Translate::getInstance(); ?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body id="home" class="container-fluid">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><img src="Logo.jpeg" alt="" style="width: 29%;"/></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <div class="dropdown">
                    <button style="
    background: transparent;
    color: rgba(0,0,0,.5);
    border: 0px;
    margin-top: 22px;
    margin-right: 34px;
    /* margin-top: 15px; */
" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <svg style="font-size: 24px;
    height: 20px;
    margin-right: 10px;" class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                             style="font-size: 24px;">
                            <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm6.93 6h-2.95c-.32-1.25-.78-2.45-1.38-3.56 1.84.63 3.37 1.91 4.33 3.56zM12 4.04c.83 1.2 1.48 2.53 1.91 3.96h-3.82c.43-1.43 1.08-2.76 1.91-3.96zM4.26 14C4.1 13.36 4 12.69 4 12s.1-1.36.26-2h3.38c-.08.66-.14 1.32-.14 2 0 .68.06 1.34.14 2H4.26zm.82 2h2.95c.32 1.25.78 2.45 1.38 3.56-1.84-.63-3.37-1.9-4.33-3.56zm2.95-8H5.08c.96-1.66 2.49-2.93 4.33-3.56C8.81 5.55 8.35 6.75 8.03 8zM12 19.96c-.83-1.2-1.48-2.53-1.91-3.96h3.82c-.43 1.43-1.08 2.76-1.91 3.96zM14.34 14H9.66c-.09-.66-.16-1.32-.16-2 0-.68.07-1.35.16-2h4.68c.09.65.16 1.32.16 2 0 .68-.07 1.34-.16 2zm.25 5.56c.6-1.11 1.06-2.31 1.38-3.56h2.95c-.96 1.65-2.49 2.93-4.33 3.56zM16.36 14c.08-.66.14-1.32.14-2 0-.68-.06-1.34-.14-2h3.38c.16.64.26 1.31.26 2s-.1 1.36-.26 2h-3.38z"></path>
                        </svg>

                        <?php $translate->echoTranslate('Idiomas'); ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"
                         style="max-height: 113px;overflow-y:scroll;">
                        <a class="dropdown-item" href="/CS/"> <?php $translate->echoTranslate('Czech'); ?></a>
                        <a class="dropdown-item" href="/DA/"> <?php $translate->echoTranslate('Danish'); ?></a>
                        <a class="dropdown-item" href="/DE/"> <?php $translate->echoTranslate('German'); ?></a>
                        <a class="dropdown-item" href="/EL/"> <?php $translate->echoTranslate('Greek'); ?></a>
                        <a class="dropdown-item" href="/EN-GB/"> <?php $translate->echoTranslate('English (British)'); ?></a>
                        <a class="dropdown-item" href="/EN-US/"> <?php $translate->echoTranslate('English (American)'); ?></a>
                        <a class="dropdown-item" href="/ET/"> <?php $translate->echoTranslate('Estonian'); ?></a>
                        <a class="dropdown-item" href="/FI/"> <?php $translate->echoTranslate('Finnish'); ?></a>
                        <a class="dropdown-item" href="/FR/"> <?php $translate->echoTranslate('French'); ?></a>
                        <a class="dropdown-item" href="/HU/"> <?php $translate->echoTranslate('Hungarian'); ?></a>
                        <a class="dropdown-item" href="/IT/"> <?php $translate->echoTranslate('Italian'); ?></a>
                        <a class="dropdown-item" href="/JA/"> <?php $translate->echoTranslate('Japanese'); ?></a>
                        <a class="dropdown-item" href="/LT/"> <?php $translate->echoTranslate('Lithuanian'); ?></a>
                        <a class="dropdown-item" href="/LV/"> <?php $translate->echoTranslate('Latvian'); ?></a>
                        <a class="dropdown-item" href="/NL/"> <?php $translate->echoTranslate('Dutch'); ?></a>
                        <a class="dropdown-item" href="/BG/"> <?php $translate->echoTranslate('Bulgarian'); ?></a>
                        <a class="dropdown-item" href="/PL/"> <?php $translate->echoTranslate('Polish'); ?></a>
                        <a class="dropdown-item" href="/PT-BR/"> <?php $translate->echoTranslate('Portuguese (Brazilian)'); ?></a>
                        <a class="dropdown-item" href="/PT-PT/"> <?php $translate->echoTranslate('Portuguese (European)'); ?></a>
                        <a class="dropdown-item" href="/RO/"> <?php $translate->echoTranslate('Romanian'); ?></a>
                        <a class="dropdown-item" href="/RU/"> <?php $translate->echoTranslate('Russian'); ?></a>
                        <a class="dropdown-item" href="/SK/"> <?php $translate->echoTranslate('Slovak'); ?></a>
                        <a class="dropdown-item" href="/SL/"> <?php $translate->echoTranslate('Slovenian'); ?></a>
                        <a class="dropdown-item" href="/SV/"> <?php $translate->echoTranslate('Swedish'); ?></a>
                        <a class="dropdown-item" href="/ZH/"> <?php $translate->echoTranslate('Chinese'); ?></a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#step4"><?php $translate->echoTranslate('Precios'); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/faq"><?php $translate->echoTranslate('FAQ'); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=""><?php $translate->echoTranslate('Iniciar Sesi??n'); ?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="generate" href=""><?php $translate->echoTranslate('Registrate'); ?></a>
            </li>
        </ul>
    </div>
</nav>
<section id="first" class="row">
    <div class="leftHeader col">
        <h2 id="titleHeader">
            <?php $translate->echoTranslate('Crea tus propios c??digos QR y comparte tu informaci??n con los dem??s'); ?>
        </h2>
        <p id="subtitleHeader">
            <?php $translate->echoTranslate('Es muy f??cil. Puedes generar, gestionar tus c??digos QR.'); ?>
        </p>
        <a href="/generate">
            <button class="button">
                <?php $translate->echoTranslate('Crear c??digo QR'); ?>
            </button>
        </a>
    </div>
    <div class="rightHeader col">
        <img src="https://qrty.mobi/static/media/main_banner_x2.d3be16a9.png" alt="">
    </div>
</section>
<section id="itermediaStep2">
    <h2 class="title" style="
    font-size: 38px;
    font-weight: 500;
"> <?php $translate->echoTranslate('Qrgen hace la diferencia'); ?></h2>
    <p class="subtitle" style="

    font-size: 18px;
    line-height: 30px;
    color: rgb(90,91,112);
    width: 38%;
    text-align: center;
    margin: 0 auto;
    margin-top: 25px;
    font-weight: 100;
    "> <?php $translate->echoTranslate('Si lo que quieres es crear tu propio c??digo QR, una buena herramienta para hacerlo es el generador de QR de
        QRGEN.
        Por su facilidad de uso y todas las opciones que ofrece para que tus ideas se hagan realidad o tu negocio
        crezca.'); ?></p>
    <div class="containerOptionsStep2 container-fluid">
        <div class="row">
            <div class="col ">
                <div>
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                         style="font-size: 24px;">
                        <path class="custom-color--circle-check-green" fill="#31d3b3"
                              d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path>
                        <path fill="#000"
                              d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path>
                    </svg>
                </div>
                <p>
                    <?php $translate->echoTranslate('C??digos QR din??micos, que puedes editar y gestionar cuando quieras.'); ?>
                </p>
            </div>
            <div class="col ">
                <p>
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                         style="font-size: 24px;">
                        <path class="custom-color--circle-check-green" fill="#31d3b3"
                              d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path>
                        <path fill="#000"
                              d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path>
                    </svg>
                    <?php $translate->echoTranslate('Crea QR din??micos ilimitados.'); ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div>
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                         style="font-size: 24px;">
                        <path class="custom-color--circle-check-green" fill="#31d3b3"
                              d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path>
                        <path fill="#000"
                              d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path>
                    </svg>
                </div>
                <p>
                    <?php $translate->echoTranslate('Anal??tica completa para hacer seguimiento a tus QR.'); ?>
                </p>
            </div>
            <div class="col">
                <div>
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                         style="font-size: 24px;">
                        <path class="custom-color--circle-check-green" fill="#31d3b3"
                              d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path>
                        <path fill="#000"
                              d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path>
                    </svg>
                </div>
                <p>
                    <?php $translate->echoTranslate('Personalizaci??n de c??digos con nuestra herramienta de dise??o.'); ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div>
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                         style="font-size: 24px;">
                        <path class="custom-color--circle-check-green" fill="#31d3b3"
                              d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path>
                        <path fill="#000"
                              d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path>
                    </svg>
                </div>
                <p>
                    <?php $translate->echoTranslate('Exportaci??n de datos en CSV/XLSX.'); ?>
                </p>
            </div>
            <div class="col">
                <div>
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                         style="font-size: 24px;">
                        <path class="custom-color--circle-check-green" fill="#31d3b3"
                              d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path>
                        <path fill="#000"
                              d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path>
                    </svg>
                </div>
                <p>
                    <?php $translate->echoTranslate('Descarga de c??digo QR en distintos formatos.'); ?>
                </p>
            </div>
        </div>
        <a href="/generate"> <button><?php $translate->echoTranslate('Crear Qr'); ?></button></a>
    </div>

</section>
<section id="step2">
    <h2 id="title"><?php $translate->echoTranslate('Crea tu QR en minutos'); ?></h2>
    <div class="row">
        <div class="col">
            <img src="https://qrty.mobi/static/media/step_1.d650ec93.svg" alt="">
            <h2 class="subtitle"><?php $translate->echoTranslate('Elige el contenido de tu QR'); ?>
            </h2>
            <p>
                <?php $translate->echoTranslate('Selecciona entre una amplia variedad de opciones: PDF, men??, video, tarjetas de visita, web, apps, etc.'); ?>
            </p>
        </div>
        <div class="col">
            <img src="https://qrty.mobi/static/media/step_2.94540cdc.svg" alt="">
            <h2 class="subtitle"> <?php $translate->echoTranslate('Personaliza y dise??alo a medida'); ?>
            </h2>
            <p>
                <?php $translate->echoTranslate('Completa toda la informaci??n y utiliza nuestro generador de QR para conseguir un dise??o ??nico.'); ?>
            </p>
        </div>
        <div class="col">
            <img src="https://qrty.mobi/static/media/step_3.e66c4ab2.svg" alt="">
            <h2 class="subtitle"><?php $translate->echoTranslate('Descarga tu c??digo QR'); ?>
            </h2>
            <p><?php $translate->echoTranslate('Consigue tu c??digo QR en distintos formatos (pdf, png, svg), impr??melo o mu??stralo en formato digital y listo!'); ?>
            </p>
        </div>
    </div>
    <a href="/generate">
        <button>
            <?php $translate->echoTranslate('Crear c??digo QR'); ?>
        </button>
    </a>
</section>
<section id="step4">
    <h2 style="
    margin-top: 35px;
    margin-bottom: 45px;
"><?php $translate->echoTranslate('Suscr??bete y accede a nuestros beneficios'); ?></h2>
    <div id="box" style="    background: white;margin-top:77px;">
        <div id="top">
            <p id="title"><?php $translate->echoTranslate('Accede a todas estas ventajas que te ofrecemos'); ?></p>
            <div id="list">
                <p class="floatleft">
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                         style="font-size: 24px;">
                        <path class="custom-color--circle-check-green" fill="#31d3b3"
                              d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path>
                        <path fill="#000"
                              d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path>
                    </svg>
                    <?php $translate->echoTranslate('Crea QR din??micos ilimitados'); ?>
                </p>
                <p class="floatright">
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                         style="font-size: 24px;">
                        <path class="custom-color--circle-check-green" fill="#31d3b3"
                              d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path>
                        <path fill="#000"
                              d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path>
                    </svg>
                    <?php $translate->echoTranslate('Escaneos ilimitados'); ?>
                </p>
                <p class="floatleft">
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                         style="font-size: 24px;">
                        <path class="custom-color--circle-check-green" fill="#31d3b3"
                              d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path>
                        <path fill="#000"
                              d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path>
                    </svg>
                    <?php $translate->echoTranslate('Variedad de tipos de QR'); ?>
                </p>
                <p class="floatright">
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                         style="font-size: 24px;">
                        <path class="custom-color--circle-check-green" fill="#31d3b3"
                              d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path>
                        <path fill="#000"
                              d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path>
                    </svg>
                    <?php $translate->echoTranslate('Anal??tica completa de QR'); ?>
                </p>
                <p class="floatleft">
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                         style="font-size: 24px;">
                        <path class="custom-color--circle-check-green" fill="#31d3b3"
                              d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path>
                        <path fill="#000"
                              d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path>
                    </svg>
                    <?php $translate->echoTranslate('Edici??n y gesti??n de QR'); ?>
                </p>
                <p class="floatright">
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"
                         style="font-size: 24px;">
                        <path class="custom-color--circle-check-green" fill="#31d3b3"
                              d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path>
                        <path fill="#000"
                              d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path>
                    </svg>
                    <?php $translate->echoTranslate('Variedad de formatos de descarga'); ?>
                </p>
            </div>
        </div>
        <div id="bottom">
            <div class="item">
                <p class="title">
                    <?php $translate->echoTranslate('Plan de prueba'); ?>
                </p>
                <div class="days">(14 <?php $translate->echoTranslate('d??as'); ?>)</div>
                <p class="price">0,50 ???*</p>
                <a href="/generate">
                    <button class="button">
                        <?php $translate->echoTranslate('Comprar'); ?>
                    </button>
                </a>
            </div>
            <div class="item">
                <p class="title">
                    <?php $translate->echoTranslate('Plan Anual'); ?>
                </p>
                <div class="days">(12 <?php $translate->echoTranslate('meses'); ?>)</div>
                <p class="price">200,00 ???</p>
                <a href="/generate">
                    <button class="button">
                        <?php $translate->echoTranslate('Comprar'); ?>
                    </button>
                </a>
            </div>
        </div>
    </div>
</section>
<section id="step5">
    <h2 class="title"><?php $translate->echoTranslate('Crea diferentes tipos de c??digos QR'); ?></h2>
    <p class="subtitle"><?php $translate->echoTranslate('Los c??digos QR pueden contener una gran cantidad de contenido y en Qrty los ofrecemos todos.'); ?></p>
    <div id="buttons">
        <div class="containerButtons">
            <div class="col element" data-type="website">
                <div class="containerIcon">
                    <i class="far fa-window-maximize"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('P??gina web'); ?></h3>
            </div>
            <div class="col element seletType" data-type="listOfLinks">
                <div class="containerIcon">
                    <i class="fas fa-list"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('Listado de Enlaces'); ?></h3>
            </div>
            <div class="col element seletType" data-type="vcard">
                <div class="containerIcon">
                    <i class="fas fa-user-friends"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('Vcard Plus'); ?></h3>
            </div>
            <div class="col element seletType" data-type="business">
                <div class="containerIcon">
                    <i class="fas fa-store"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('Negocio'); ?></h3>
            </div>
        </div>
        <div class="containerButtons">
            <div class="col element seletType" data-type="apps">
                <div class="containerIcon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('Apps'); ?></h3>
            </div>
            <div class="col element seletType" data-type="pdf">
                <div class="containerIcon">
                    <i class="far fa-file-pdf"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('PDF'); ?></h3>
            </div>
            <div class="col element seletType" data-type="menu">
                <div class="containerIcon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('Carta / Men??'); ?></h3>
            </div>
            <div class="col element seletType" data-type="gallery">
                <div class="containerIcon">
                    <i class="fas fa-images"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('Im??genes'); ?></h3>
            </div>
        </div>
        <div class="containerButtons">
            <div class="col element seletType" data-type="video">
                <div class="containerIcon">
                    <i class="fas fa-photo-video"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('Video'); ?></h3>
            </div>
            <div class="col element seletType" data-type="wifi">
                <div class="containerIcon">
                    <i class="fas fa-wifi"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('WiFi'); ?></h3>
            </div>
        </div>
    </div>
    <aside>
        <h2><?php $translate->echoTranslate('Ejemplo'); ?></h2>
        <div id="containerExample">
            <div id="phone">
                <div id="noch">
                    <div id="camera"></div>
                    <div id="speaker"></div>
                </div>
                <div id="containerScreen">
                    <div id="message">
                        <p><?php $translate->echoTranslate('Selecciona un tipo de QR'); ?></p>
                    </div>
                    <div class="hide" id="website">
                        <div id="title">
                            <p><?php $translate->echoTranslate('http://www.tutiendaonline.com'); ?></p>
                        </div>
                        <div id="containerWebsite">
                            <img src="https://qrty.mobi/static/media/mockup_url.fc2d63b8.png" alt="">
                            <h3><?php $translate->echoTranslate('Tu tienda online'); ?></h3>
                            <p id="subtitle"><?php $translate->echoTranslate('Compra productos al mejor precio'); ?></p>
                            <button disabled><?php $translate->echoTranslate('Ver m??s'); ?></button>
                        </div>
                    </div>
                    <div class="hide" id="listOfLinks">
                        <div id="title">
                            <img src="https://d25rq8gxcq0p71.cloudfront.net/dictionary-images/324/419665d2-74b7-49d4-b3c8-3aea253f966f.jpg"
                                 alt="" id="imgTitle">
                            <h3><?php $translate->echoTranslate('Fernando Rodriguez'); ?></h3>
                            <p><?php $translate->echoTranslate('Recetas gourmet'); ?></p>
                        </div>
                        <div id="links">
                            <div class="item">
                                <img src="" alt="">
                                <p><?php $translate->echoTranslate('Tortas'); ?></p>
                            </div>
                            <div class="item">
                                <img src="" alt="">
                                <p><?php $translate->echoTranslate('Pastas'); ?></p>
                            </div>
                            <div class="item">
                                <img src="" alt="">
                                <p><?php $translate->echoTranslate('Carnes'); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="hide" id="vcard">
                        <div id="backgroundTop"></div>
                        <div id="title">
                            <img src="https://qrty.mobi/static/media/mockup_vcard.d33781cd.png" alt="">
                            <h3><?php $translate->echoTranslate('Esteban Rodriguez'); ?></h3>
                            <p><?php $translate->echoTranslate('CEO'); ?></p>
                        </div>
                        <div id="icons">

                        </div>
                    </div>
                    <div id="business" class="hide">
                        <div id="backgroundTop">
                            <h3><?php $translate->echoTranslate('Caf?? de especialidad'); ?></h3>
                        </div>
                        <img src="https://qrty.mobi/static/media/mockup_business.8d33c299.png" alt="">
                        <div id="containerInfo">
                            <h3><?php $translate->echoTranslate('Special Coffee'); ?></h3>
                            <p><?php $translate->echoTranslate('Caf?? natural, artesano y local.
                                Abierto de martes a domingo de 8 a 19h.
                                Los lunes se imparten cursos de barista.'); ?>
                            </p>
                            <button><?php $translate->echoTranslate('Pedido online'); ?></button>
                        </div>
                    </div>
                    <div id="apps" class="hide">
                        <div id="title">
                            <h3><?php $translate->echoTranslate('Myfintech'); ?></h3>
                            <p><?php $translate->echoTranslate('Tech & Corp'); ?></p>
                        </div>
                        <div id="containerInfo">
                            <img src="" alt="">
                            <p><?php $translate->echoTranslate('Controla todas tus finanzas de forma sencilla y r??pida.'); ?></p>
                            <button><?php $translate->echoTranslate('Google'); ?></button>
                            <button><?php $translate->echoTranslate('Apple'); ?></button>
                        </div>
                    </div>
                    <div id="pdf" class="hide">
                        <div id="title">
                            <p id="miniTitle"><?php $translate->echoTranslate('Los Burgueses'); ?></p>
                            <h2><?php $translate->echoTranslate('Las Burguers'); ?></h2>
                            <p><?php $translate->echoTranslate('Nuestra selecci??n de hamburguesas te sorprender??. Su sabor te deleitar??.'); ?></p>
                        </div>
                        <div id="backgroundPdf">
                            <img src="/assets/img/pdfmenu.jpeg" alt="">
                        </div>
                    </div>
                    <div id="menu" class="hide">
                        <div id="title">
                            <h2><?php $translate->echoTranslate('Don Tulio'); ?></h2>
                            <p><?php $translate->echoTranslate('100% Parrilla Argentina de campo'); ?></p>
                        </div>
                        <div id="containerMenu">
                            <h3><?php $translate->echoTranslate('ENTRANTES'); ?></h3>
                            <div class="item">
                                <img src="https://qrty.mobi/static/media/mockup_menu_bone.0c9fb772.png" alt="">
                                <div class="info">
                                    <p class="title"><?php $translate->echoTranslate('T-Bone'); ?></p>
                                    <p class="subtitle"><?php $translate->echoTranslate('Nuestra pieza estrella. Una vez lo pruebas, no hay vuelta atr??s.'); ?></p>
                                    <p class="price"><?php $translate->echoTranslate('65???'); ?></p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="https://qrty.mobi/static/media/mockup_menu_chorizo.49c1c4fb.png" alt="">
                                <div class="info">
                                    <p class="title"><?php $translate->echoTranslate('Chorizo Criollo'); ?></p>
                                    <p class="subtitle"><?php $translate->echoTranslate('Nuestra pieza estrella. Una vez lo pruebas, no hay vuelta atr??s.'); ?></p>
                                    <p class="price"><?php $translate->echoTranslate('65???'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hide" id="gallery">
                        <div id="title">
                            <h2><?php $translate->echoTranslate('Nuestra boda'); ?></h2>
                            <p><?php $translate->echoTranslate('Las palabras no alcanzan para describir el amor que tenemos. Por eso compartimos con
                                vosotros las fotos de nuestra boda.
                                Con cari??o M y P.'); ?>
                            </p>
                        </div>
                        <div id="imagesGallery"></div>
                    </div>
                    <div class="hide" id="video">
                        <p id="firstTitle"><?php $translate->echoTranslate('Tech & Corp'); ?></p>
                        <img src="https://qrty.mobi/static/media/mockup_business.8d33c299.png" alt="">
                        <p id="title"><?php $translate->echoTranslate('Manifiesto Tech & Corp'); ?></p>
                        <p id="subitle"><?php $translate->echoTranslate('Un dec??logo para que conozcas todo lo que somos en Tech & Corp.'); ?></p>
                        <button><?php $translate->echoTranslate('Saber m??s'); ?></button>
                    </div>
                    <div class="hide" id="wifi">
                        <div id="containerWifi">
                            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 40 40" aria-hidden="true"
                                 style="font-size: 54px;">
                                <path d="M19.994 21.581c2.877 0 5.209 2.333 5.209 5.209s-2.333 5.209-5.209 5.209c-2.877 0-5.209-2.333-5.209-5.209s2.333-5.209 5.209-5.209zM19.994 23.070c-2.055 0-3.721 1.666-3.721 3.721s1.666 3.721 3.721 3.721c2.055 0 3.721-1.666 3.721-3.721s-1.666-3.721-3.721-3.721zM19.994 14.884c3.495 0 6.768 1.34 9.242 3.7l0.23 0.224-1.052 1.052c-2.222-2.222-5.214-3.488-8.419-3.488-3.102 0-6.003 1.185-8.201 3.276l-0.217 0.212-1.052-1.052c2.499-2.499 5.867-3.924 9.471-3.924zM19.994 7.442c5.482 0 10.619 2.123 14.477 5.853l0.255 0.251-1.052 1.052c-3.609-3.609-8.476-5.669-13.68-5.669-5.086 0-9.85 1.967-13.432 5.425l-0.248 0.244-1.052-1.052c3.886-3.886 9.129-6.104 14.733-6.104zM19.994-0c7.467 0 14.467 2.906 19.71 8.005l0.284 0.28-1.052 1.052c-4.996-4.996-11.738-7.849-18.942-7.849-7.071 0-13.696 2.748-18.662 7.574l-0.279 0.275-1.052-1.052c5.273-5.273 12.391-8.285 19.994-8.285z"></path>
                            </svg>
                            <p><?php $translate->echoTranslate('??Unirse a la red Wi-fi
                                ???Mi Restaurante????'); ?></p>
                            <button id="cancelButton"><?php $translate->echoTranslate('Cancelar'); ?></button>
                            <button id="acceptButton"><?php $translate->echoTranslate('Acceder'); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

</section>
<section id="step6">
    <h2 style="    padding-top: 45px;
    padding-bottom: 45px;">
        <?php $translate->echoTranslate('Conceptos b??sicos de un C??digo QR'); ?>
    </h2>
    <div class="itemStep6">
        <h2><?php $translate->echoTranslate('??Qu?? es un c??digo QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Para entenderlo de forma sencilla podemos decir que el c??digo QR es la evoluci??n natural del c??digo de barras. Su nombre deriva del ingl??s ???Quick Response Code??? o ???C??digo de respuesta r??pida???, y esto se debe a que tiene una alta velocidad de lectura. Dicho c??digo permite un f??cil acceso a distinta informaci??n a trav??s del m??vil.'); ?></p>
    </div>
    <div class="itemStep6">
        <h2><?php $translate->echoTranslate('??Qu?? utilidad tienen los c??digos QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Tienen tanta utilidad como tipos de contenidos puedan ofrecer. De hecho, en los ??ltimos a??os este tipo de c??digo ha ido aumentando su aprobaci??n entre la audiencia. Es l??gico, con tan solo un escaneo puedes acceder a un mont??n de informaci??n variada e incluso facilitar ciertas tareas como la de conectarse a una red wifi. Un c??digo QR te puede ayudar a mejorar el servicio o producto que ofreces, a interactuar con tus clientes y a promocionar tu negocio, entre otras cosas.'); ?></p>
    </div>
    <div class="itemStep6">
        <h2><?php $translate->echoTranslate('??C??mo se lee un c??digo QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Existen varios factores que influyen a la hora de que una persona o cliente potencial lea un c??digo QR, pero sin duda el m??s importante es que el individuo que desee escanear el c??digo tenga un tel??fono. Al d??a de hoy muchos son los m??viles que pueden leer QR con la propia c??mara, basta con apuntar al c??digo para escanearlo. En caso de que esto no funcione es posible que necesites descargar una aplicaci??n pensada para leer QR. ??Pero no te preocupes! Existen varias apps que cumplen con esta funci??n.'); ?></p>
    </div>
    <div class="itemStep6">
        <h2><?php $translate->echoTranslate('??C??mo puedo generar mi propio c??digo QR?'); ?></h2>
        <p><?php $translate->echoTranslate('Existen distintas plataformas y herramientas para crear tu propio QR, pero ninguna como Qrty. Con Qrty no solo podr??s generar c??digos QR personalizados, tambi??n podr??s gestionar y editar tus c??digos, y hacer un seguimiento anal??tico de los mismos.'); ?></p>
    </div>
    <div class="itemStep6">
        <h2><?php $translate->echoTranslate('??Qu?? diferencia hay entre un QR est??tico y uno din??mico?'); ?></h2>
        <p><?php $translate->echoTranslate('La mayor diferencia entre los dos es que el c??digo QR din??mico puede ser editado incluso despu??s de ser impreso, y el est??tico no. Por lo tanto el c??digo QR din??mico nos permite cambiar tanto la funci??n como el contenido en cualquier momento y cuantas veces queramos.')?> <br><br><?php echo $translate->echoTranslate('Otra gran diferencia es que los QR din??micos permiten recopilar estad??sticas de escaneo para obtener la mayor informaci??n posible.'); ?></p>
    </div>

    <h2 style="
    margin-top: 25px;
    font-size: 23px;
"><?php $translate->echoTranslate('??Quieres saber m??s?')?></h2>
    <p style="font-size:13px;"><?php $translate->echoTranslate('Consulta nuestras preguntas frecuentes y qu??tate cualquier duda que puedas tener sobre los c??digos QR.'); ?></p>

    <a href="/faq"><button class="button" style=" margin:0 auto;margin-bottom:80px;width: 20%;font-weight: 100;"><?php $translate->echoTranslate('S??cate las dudas'); ?></button></a>
</section>
<footer style="padding: 0 27%;padding-top: 34px;">
    <div class="logoContainer" style="float:left;">
        <img src="Logo.jpeg" alt="" style="height: 48px;">
    </div>
    <div class="row" style="width: 68%;float: right;">
        <div class="col">
            <p><?php $translate->echoTranslate('Servicio'); ?></p>
            <a href=""  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Crear QR'); ?></a>
        </div>
        <div class="col">
            <p><?php $translate->echoTranslate('Empresa'); ?></p>
            <a href="/prices"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Precios'); ?></a>
            <a href="/conditions"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Condiciones de uso y Contrataci??n'); ?></a>
            <a href="/privacity"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Pol??tica de privacidad'); ?></a>
            <a href="/cookies"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Pol??tica de cookies'); ?></a>
        </div>
        <div class="col">
            <p><?php $translate->echoTranslate('Ayuda'); ?></p>
            <a href="/contact" style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Cont??ctanos'); ?></a>
            <a href="/faq"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('FAQ'); ?></a>
            <a href="/cancelarSuscription"  style="    color: gray;
    font-size: 11px;
    display: block;
    margin-bottom: 10px;"><?php $translate->echoTranslate('Cancelar suscripci??n'); ?></a>
        </div>
    </div>
</footer>
<!-- IMPORT BOOTSTRAP SCRIPTS-->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
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
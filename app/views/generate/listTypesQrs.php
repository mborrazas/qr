<?php $translate = Translate::getInstance(); ?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body class="container-fluid" id="step1">
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/header.php"; ?>
<form method="POST" action="/generate" id="formList">
    <section id="containerTypes">
        <h2 id="title"><?php $translate->echoTranslate('Elige un tipo de QR'); ?></h2>
        <div class="row">
            <div class="col element" data-type="website">
                <div class="containerIcon">
                    <i class="far fa-window-maximize"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('Página web'); ?></h3>
                <p><?php $translate->echoTranslate('Abre una URL'); ?></p>
            </div>
            <div class="col element seletType" data-type="listOfLinks">
                <div class="containerIcon">
                    <i class="fas fa-list"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('Listado de Enlaces'); ?></h3>
                <p><?php $translate->echoTranslate('Agrupa enlaces'); ?></p>
            </div>
            <div class="col element seletType" data-type="vcard">
                <div class="containerIcon">
                    <i class="fas fa-user-friends"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('Vcard Plus'); ?></h3>
                <p><?php $translate->echoTranslate('Comparte detalles de contacto'); ?></p>
            </div>
            <div class="col element seletType" data-type="business">
                <div class="containerIcon">
                    <i class="fas fa-store"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('Negocio'); ?></h3>
                <p><?php $translate->echoTranslate('Comparte información sobre tu negocio'); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col element seletType" data-type="apps">
                <div class="containerIcon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('Apps'); ?></h3>
                <p><?php $translate->echoTranslate('Redirecciona a una tienda de apps'); ?></p>
            </div>
            <div class="col element seletType" data-type="pdf">
                <div class="containerIcon">
                    <i class="far fa-file-pdf"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('PDF'); ?></h3>
                <p><?php $translate->echoTranslate('Muestra un PDF'); ?></p>
            </div>
            <div class="col element seletType" data-type="menu">
                <div class="containerIcon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('Carta / Menú'); ?></h3>
                <p><?php $translate->echoTranslate('Despliega el menú de un restaurante o bar'); ?></p>
            </div>
            <div class="col element seletType" data-type="gallery">
                <div class="containerIcon">
                    <i class="fas fa-images"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('Imágenes'); ?></h3>
                <p><?php $translate->echoTranslate('Enseña una galería de imágenes'); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col element seletType" data-type="video">
                <div class="containerIcon">
                    <i class="fas fa-photo-video"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('Video'); ?></h3>
                <p><?php $translate->echoTranslate('Enseña un video'); ?></p>
            </div>
            <div class="col element seletType" data-type="wifi">
                <div class="containerIcon">
                    <i class="fas fa-wifi"></i>
                </div>
                <h3 class="title"><?php $translate->echoTranslate('WiFi'); ?></h3>
                <p><?php $translate->echoTranslate('Conecta a una red WiFi'); ?></p>
            </div>
        </div>
    </section>
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
                           <p>http://www.tutiendaonline.com</p>
                        </div>
                        <div id="containerWebsite">
                            <img src="https://qrty.mobi/static/media/mockup_url.fc2d63b8.png" alt="">
                            <h3><?php $translate->echoTranslate('Tu tienda online'); ?></h3>
                            <p id="subtitle"><?php $translate->echoTranslate('Compra productos al mejor precio'); ?></p>
                            <button disabled><?php $translate->echoTranslate('Ver más'); ?></button>
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
                            <h3><?php $translate->echoTranslate('Special Coffee'); ?></h3>
                            <p><?php $translate->echoTranslate('Café natural, artesano y local.
                                Abierto de martes a domingo de 8 a 19h.
                                Los lunes se imparten cursos de barista.'); ?>
                            </p>
                            <button><?php $translate->echoTranslate('Pedido online'); ?></button>
                        </div>
                    </div>
                    <div id="apps" class="hide">
                        <div id="title">
                            <h3>Myfintech</h3>
                            <p>Tech & Corp</p>
                        </div>
                        <div id="containerInfo">
                            <img src="" alt="">
                            <p><?php $translate->echoTranslate('Controla todas tus finanzas de forma sencilla y rápida.'); ?></p>
                            <button><?php $translate->echoTranslate('Google'); ?></button>
                            <button><?php $translate->echoTranslate('Apple'); ?></button>
                        </div>
                    </div>
                    <div id="pdf" class="hide">
                        <div id="title">
                            <p id="miniTitle"><?php $translate->echoTranslate('Los Burgueses'); ?></p>
                            <h2><?php $translate->echoTranslate('Las Burguers'); ?></h2>
                            <p><?php $translate->echoTranslate('Nuestra selección de hamburguesas te sorprenderá. Su sabor te deleitará.'); ?></p>
                        </div>
                        <div id="backgroundPdf">
                            <img src="/assets/img/pdfmenu.jpeg" alt="">
                        </div>
                    </div>
                    <div  id="menu" class="hide">
                        <div id="title">
                            <h2><?php $translate->echoTranslate('Don Tulio'); ?></h2>
                            <p><?php $translate->echoTranslate('100% Parrilla Argentina de campo'); ?></p>
                        </div>
                        <div id="containerMenu">
                            <h3><?php $translate->echoTranslate('ENTRANTES'); ?></h3>
                            <div class="item">
                                <img src="https://qrty.mobi/static/media/mockup_menu_bone.0c9fb772.png" alt="">
                                <div class="info">
                                    <p class="title">T-Bone</p>
                                    <p class="subtitle"><?php $translate->echoTranslate('Nuestra pieza estrella. Una vez lo pruebas, no hay vuelta atrás.'); ?></p>
                                    <p class="price">65€</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="https://qrty.mobi/static/media/mockup_menu_chorizo.49c1c4fb.png" alt="">
                                <div class="info">
                                    <p class="title"><?php $translate->echoTranslate('Chorizo Criollo'); ?></p>
                                    <p class="subtitle"><?php $translate->echoTranslate('Nuestra pieza estrella. Una vez lo pruebas, no hay vuelta atrás.'); ?></p>
                                    <p class="price">65€</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hide" id="gallery">
                        <div id="title">
                            <h2><?php $translate->echoTranslate('Nuestra boda'); ?></h2>
                            <p><?php $translate->echoTranslate('Las palabras no alcanzan para describir el amor que tenemos. Por eso compartimos con
                                vosotros las fotos de nuestra boda.
                                Con cariño M y P.'); ?>
                            </p>
                        </div>
                        <div id="imagesGallery"></div>
                    </div>
                    <div class="hide" id="video">
                        <p id="firstTitle">Tech & Corp</p>
                        <img src="https://qrty.mobi/static/media/mockup_business.8d33c299.png" alt="">
                        <p id="title"><?php $translate->echoTranslate('Manifiesto Tech & Corp'); ?></p>
                        <p id="subitle"><?php $translate->echoTranslate('Un decálogo para que conozcas todo lo que somos en Tech & Corp.'); ?></p>
                        <button><?php $translate->echoTranslate('Saber más'); ?></button>
                    </div>
                    <div class="hide" id="wifi">
                        <div id="containerWifi">
                            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 40 40" aria-hidden="true" style="font-size: 54px;"><path d="M19.994 21.581c2.877 0 5.209 2.333 5.209 5.209s-2.333 5.209-5.209 5.209c-2.877 0-5.209-2.333-5.209-5.209s2.333-5.209 5.209-5.209zM19.994 23.070c-2.055 0-3.721 1.666-3.721 3.721s1.666 3.721 3.721 3.721c2.055 0 3.721-1.666 3.721-3.721s-1.666-3.721-3.721-3.721zM19.994 14.884c3.495 0 6.768 1.34 9.242 3.7l0.23 0.224-1.052 1.052c-2.222-2.222-5.214-3.488-8.419-3.488-3.102 0-6.003 1.185-8.201 3.276l-0.217 0.212-1.052-1.052c2.499-2.499 5.867-3.924 9.471-3.924zM19.994 7.442c5.482 0 10.619 2.123 14.477 5.853l0.255 0.251-1.052 1.052c-3.609-3.609-8.476-5.669-13.68-5.669-5.086 0-9.85 1.967-13.432 5.425l-0.248 0.244-1.052-1.052c3.886-3.886 9.129-6.104 14.733-6.104zM19.994-0c7.467 0 14.467 2.906 19.71 8.005l0.284 0.28-1.052 1.052c-4.996-4.996-11.738-7.849-18.942-7.849-7.071 0-13.696 2.748-18.662 7.574l-0.279 0.275-1.052-1.052c5.273-5.273 12.391-8.285 19.994-8.285z"></path></svg>
                            <p><?php $translate->echoTranslate('¿Unirse a la red Wi-fi
                                “Mi Restaurante”?'); ?></p>
                            <button id="cancelButton"><?php $translate->echoTranslate('Cancelar'); ?></button>
                            <button id="acceptButton"><?php $translate->echoTranslate('Acceder'); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <section id="bar">
        <div class="row">
            <div class="col">
                <a class="cancelar" href="/"><?php $translate->echoTranslate('Cancelar'); ?></a>
            </div>
            <div class="col" id="steps">
                <span class="step selected"><?php $translate->echoTranslate('Tipo de QR'); ?></span>
                <span class="step disabled"><?php $translate->echoTranslate('Contenido'); ?></span>
                <span class="step disabled"><?php $translate->echoTranslate('Diseño del QR'); ?></span>
            </div>
            <div class="col">
                <input type="text" hidden name="type" id="inputType"/>
                <input type="button" id="next" disabled="true" value="<?php $translate->echoTranslate('Siguiente'); ?>">
            </div>
        </div>
    </section>
</form>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/footer.php"; ?>
<script>
    $(document).ready(function () {
        var form = $('#formList');
        $('.element').each(function () {
            this.addEventListener('click', selectElement);
        });

        function selectElement() {
            $(".element.selected").removeClass("selected");
            $("#next").prop('disabled', false);
            $(this).addClass('selected');
            $('#inputType').val($(this).attr("data-type"));
            $('#containerScreen>div').addClass('hide');
            $('#' + $(this).attr("data-type")).removeClass('hide');
        }

        $('#next').click(function () {
            form.submit();
        });
    });
</script>

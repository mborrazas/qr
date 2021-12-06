<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body class="container-fluid" id="step1">
<header>
</header>
<form method="POST" action="/generate" id="formList">
    <section id="containerTypes">
        <h2 id="title">Elige un tipo de QR</h2>
        <div class="row">
            <div class="col element" data-type="website">
                <h3 class="title">Página web</h3>
                <p>Abre una URL</p>
            </div>
            <div class="col element seletType" data-type="listOfLinks">
                <h3 class="title">Listado de Enlaces</h3>
                <p>Agrupa enlaces</p>
            </div>
            <div class="col element seletType" data-type="vcard">
                <h3 class="title">Vcard Plus</h3>
                <p>Comparte detalles de contacto</p>
            </div>
            <div class="col element seletType" data-type="business">
                <h3 class="title">Negocio</h3>
                <p>Comparte información sobre tu negocio</p>
            </div>
        </div>
        <div class="row">
            <div class="col element seletType" data-type="apps">
                <h3 class="title">Apps</h3>
                <p>Redirecciona a una tienda de apps</p>
            </div>
            <div class="col element seletType" data-type="pdf">
                <h3 class="title">PDF</h3>
                <p>Muestra un PDF</p>
            </div>
            <div class="col element seletType" data-type="menu">
                <h3 class="title">Carta / Menú</h3>
                <p>Despliega el menú de un restaurante o bar</p>
            </div>
            <div class="col element seletType" data-type="galery">
                <h3 class="title">Imágenes</h3>
                <p>Enseña una galería de imágenes</p>
            </div>
        </div>
        <div class="row">
            <div class="col element seletType" data-type="video">
                <h3 class="title">Video</h3>
                <p>Enseña un video</p>
            </div>
            <div class="col element seletType" data-type="wifi">
                <h3 class="title">WiFi</h3>
                <p>Conecta a una red WiFi</p>
            </div>
        </div>
    </section>
    <aside>
        <h2>Ejemplo</h2>
        <div id="containerExample">
            <div id="phone">
                <div id="noch">
                    <div id="camera"></div>
                    <div id="speaker"></div>
                </div>
                <div id="containerScreen">
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
                            <img src="" alt="">
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
                                <img src="" alt="">
                                <div class="info">
                                    <p>T-Bone</p>
                                    <p>Nuestra pieza estrella. Una vez lo pruebas, no hay vuelta atrás.</p>
                                    <p>65€</p>
                                </div>
                            </div>
                            <div class="item">
                                <img src="" alt="">
                                <div class="info">
                                    <p>Chorizo Criollo</p>
                                    <p>Nuestra pieza estrella. Una vez lo pruebas, no hay vuelta atrás.</p>
                                    <p>65€</p>
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
                        <div id="gallery"></div>
                    </div>
                    <div class="hide" id="video">
                        <p>Tech & Corp</p>
                        <img src="" alt="">
                        <p>Manifiesto Tech & Corp</p>
                        <p>Un decálogo para que conozcas todo lo que somos en Tech & Corp.</p>
                        <button>Saber más</button>
                    </div>
                    <div class="hide" id="wifi">
                        <div id="containerWifi">
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
    <section id="bar">
        <div class="row">
            <div class="col">
                <button id="cancelar">Cancelar</button>
            </div>
            <div class="col">
                <span class="step">Tipo de QR</span>
                <span class="step">Contenido</span>
                <span class="step">Diseño del QR</span>
            </div>
            <div class="col">
                <input type="text" hidden name="type" id="inputType"/>
                <input type="button" id="next" value="Siguiente">
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
            $(".selected").removeClass("selected");
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

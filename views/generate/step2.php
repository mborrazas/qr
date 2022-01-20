<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<?php $type = $parametros['type'] ?? 'website';?>
<body class="container-fluid" id="step2">
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/header.php"; ?>
    <form method="POST" action="/generate/step2" id="formList"  enctype="multipart/form-data">
        <section id="containerData">
            <h2 id="titleForm">2. Contenido de tu código QR</h2>
            <?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/generate/typesForm/" . $type . ".php"; ?>
        </section>
        <aside id="example">
            <button id="closeExample">
                <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 22px;"><path d="M13.41,12l5.3-5.29a1,1,0,1,0-1.42-1.42L12,10.59,6.71,5.29A1,1,0,0,0,5.29,6.71L10.59,12l-5.3,5.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l5.29,5.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg>
            </button>
            <h2>Ejemplo</h2>
            <div id="containerExample">
                <div id="phone">
                    <div id="noch">
                        <div id="camera"></div>
                        <div id="speaker"></div>
                    </div>
                    <div id="containerScreen">
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

        <section id="bar">
            <div class="row">
                <div class="col">
                    <button id="cancelar" class="desktop">Atras</button>
                    <button id="cancelar" class="mobile btncancel">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 16 16" aria-hidden="true" style="font-size: 16px;"><path d="M9.69,14.56l-5.5-5.5a1.49,1.49,0,0,1,0-2.12l5.5-5.5,2.12,2.12L7.37,8l4.44,4.44Z"></path></svg>
                    </button>
                </div>
                <div class="mobile">
                    <button id="showExample">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 16 28" aria-hidden="true"><path d="M12,0 C14.209139,-4.05812251e-16 16,1.790861 16,4 L16,24 C16,26.209139 14.209139,28 12,28 L4,28 C1.790861,28 2.705415e-16,26.209139 0,24 L0,4 C-2.705415e-16,1.790861 1.790861,4.05812251e-16 4,0 L12,0 Z M12,2 L4,2 C2.9456382,2 2.08183488,2.81587779 2.00548574,3.85073766 L2,4 L2,24 C2,25.0543618 2.81587779,25.9181651 3.85073766,25.9945143 L4,26 L12,26 C13.0543618,26 13.9181651,25.1841222 13.9945143,24.1492623 L14,24 L14,4 C14,2.8954305 13.1045695,2 12,2 Z M8,20 C9.1045695,20 10,20.8954305 10,22 C10,23.1045695 9.1045695,24 8,24 C6.8954305,24 6,23.1045695 6,22 C6,20.8954305 6.8954305,20 8,20 Z"></path></svg>
                    </button>
                </div>
                <div class="col"  id="steps">
                    <span class="step disabled">Tipo de QR</span>
                    <span class="step selected">Contenido</span>
                    <span class="step disabled">Diseño del QR</span>
                </div>
                <div class="col">
                    <input type="text" hidden name="type" id="inputType" />
                    <input type="submit" id="next" value="Siguiente">
                </div>
            </div>
        </section>
    </form>
    <?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/footer.php"; ?>
    <script>
        $(document).ready(function() {
            var form = $('#formList');
            $('#next').click(function() {
                form.validate();
                 form.submit();
            });

            $('#showExample').click(function(e) {
                e.preventDefault();
                $('#example').show();
            });

            $('#closeExample').click(function(e){
                e.preventDefault();
                $('#example').hide();
            })

            $('#<?php echo $type;?>').show();

            $('#cancelar').click(function(e){
                e.preventDefault();
                history.go(-1);
            });

            /**
                List of links
             */
            $(document).on('click','.containerEnlace .delete',function(e){
                e.preventDefault();
                if($('#containerEnlaces .containerEnlace').length > 1){
                    $(this).parent().remove();
                }
            });

            $('#addLink').click(function(e) {
                e.preventDefault();
                var element = $('#containerEnlaces .containerEnlace:first').clone();
                $('input',element).val('');
                $('#containerEnlaces').append(element);
            })
            $('#socialNetworks button').click(function(e) {
                e.preventDefault();
                var value = $(this).attr("data-type");
                $('#' + value).show();
            });
            $('#containerButtons .item').click(function(e) {
                e.preventDefault();
                var value = $(this).attr("data-info");
                if($(this).hasClass('active')){
                    $('#' + value).prop('checked', false);
                    $(this).removeClass('active');
                }else{
                    $('#' + value).prop('checked', true);
                    $(this).addClass('active');
                }

            });

            let sections = 1;
            $('#addSectionMenu').click(function (e){
                e.preventDefault();
                sections++;
                $item = $('.section').clone();
                $('#sections').append($item);
                $('#sections .idProduct:last').val(sections.toString());
                $('#sections .idSeccion:last').val(sections.toString());
            });


            $('.hour .checkbox').change(function(e) {
                $parent = $(this).parent();
                $sibling = $parent.siblings();
                if(this.checked) {
                    $sibling.each(function(item, data) {
                        $(data).removeAttr('disabled');
                       $(data).css("background-color", "white");
                    });
                }else{
                    $sibling.each(function(item, data) {
                        $(data).attr('disabled', true);
                        $(data).css("background-color", "#f1f1f1");
                    });
                }
            });

            $('.addArticleMenu').click(function(e){
                e.preventDefault();
                $item = $(this).siblings('#containerProducts').last().clone();
                $('#containerProducts').append($item);
            });

            $('.close').click(function (e){
               e.preventDefault();
                $(this).parent().hide();
            });
            $('.btnDesign').click(function(e){
                e.preventDefault();
                var first = $(this).attr("data-first");
                var second = $(this).attr("data-second");
                var third = $(this).attr("data-third");
                $('#background').val(first);
                $('#backgroundLink').val(second);
                $('#colorText').val(third);
            });

            $('#addButton').click(function(e){
                e.preventDefault();
                $('#containerButton').show();
                $(this).hide();
            })
        });
    </script>
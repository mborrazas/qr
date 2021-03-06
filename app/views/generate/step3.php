<?php $translate = Translate::getInstance(); ?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<?php $type = $parametros['type'] ?? 'website';?>
<body class="container-fluid" id="step3">
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/header.php"; ?>
<script type="text/javascript" src="https://unpkg.com/qr-code-styling@1.5.0/lib/qr-code-styling.js"></script>
<form method="POST" action="/generate/step3" id="formList">
    <section id="containerData">
        <h2 id="titleStep3"><?php $translate->echoTranslate('3. Diseño de tu código QR'); ?></h2>
        <div class="containerItem">
            <h3><?php $translate->echoTranslate('Estilo del QR'); ?></h3>
            <div id="containerFrames" class="row">
                <input type="text" name="dataType" id="dataType" hidden>
                <div class="containerImgFrame col">
                    <button class="btnTypeQR active" data-type="square">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" style="fill: rgb(0, 0, 0);"><polygon points="48 32 48 16 40 16 40 24 32 24 32 32 40 32 40 40 48 40 48 48 56 48 56 56 48 56 48 64 64 64 64 32 48 32"></polygon><rect x="56" y="16" width="8" height="8"></rect><polygon points="32 24 32 16 16 16 16 32 24 32 24 24 32 24"></polygon><path d="M40,48V40H32V32H24v8H16V64H40V56h8V48Zm-8,8H24V48h8Z"></path></svg>
                    </button>
                    <button class="btnTypeQR" data-type="rounded">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" style="fill: rgb(0, 0, 0);"><rect x="56" y="16" width="8" height="8" rx="2"></rect><path d="M18,32h4a2,2,0,0,0,2-2V24h6a2,2,0,0,0,2-2V18a2,2,0,0,0-2-2H18a2,2,0,0,0-2,2V30A2,2,0,0,0,18,32Z"></path><path d="M48,50a2,2,0,0,0-2-2H40V42a2,2,0,0,0-2-2H32V34a2,2,0,0,0-2-2H26a2,2,0,0,0-2,2v6H18a2,2,0,0,0-2,2V62a2,2,0,0,0,2,2H38a2,2,0,0,0,2-2V56h6a2,2,0,0,0,2-2ZM32,56H24V48h8Z"></path><path d="M62,32H48V18a2,2,0,0,0-2-2H42a2,2,0,0,0-2,2v6H34a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2h6v6a2,2,0,0,0,2,2h6v6a2,2,0,0,0,2,2h6v8H50a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H62a2,2,0,0,0,2-2V34A2,2,0,0,0,62,32Z"></path></svg>
                    </button>
                    <button class="btnTypeQR" data-type="extra-rounded">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" style="fill: rgb(0, 0, 0);"><rect x="56" y="16" width="8" height="8" rx="3"></rect><path d="M60,32H48V20a4,4,0,0,0-8,0v4H36a4,4,0,0,0,0,8h4v4a4,4,0,0,0,4,4h4v4a4,4,0,0,0,4,4h4v8H52a4,4,0,0,0,0,8h8a4,4,0,0,0,4-4V36A4,4,0,0,0,60,32Z"></path><path d="M20,32a4,4,0,0,0,4-4V24h4a4,4,0,0,0,0-8H20a4,4,0,0,0-4,4v8A4,4,0,0,0,20,32Z"></path><path d="M44,48H40V44a4,4,0,0,0-4-4H32V36a4,4,0,0,0-8,0v4H20a4,4,0,0,0-4,4V60a4,4,0,0,0,4,4H36a4,4,0,0,0,4-4V56h4a4,4,0,0,0,0-8ZM32,56H24V48h8Z"></path></svg>
                    </button>
                    <button class="btnTypeQR" data-type="dots">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" style="fill: rgb(0, 0, 0);"><circle cx="28" cy="36" r="4"></circle><circle cx="36" cy="44" r="4"></circle><circle cx="28" cy="44" r="4"></circle><circle cx="20" cy="44" r="4"></circle><circle cx="36" cy="60" r="4"></circle><circle cx="28" cy="60" r="4"></circle><circle cx="20" cy="60" r="4"></circle><circle cx="36" cy="52" r="4"></circle><circle cx="20" cy="52" r="4"></circle><circle cx="36" cy="28" r="4"></circle><circle cx="44" cy="20" r="4"></circle><circle cx="44" cy="28" r="4"></circle><circle cx="44" cy="36" r="4"></circle><circle cx="52" cy="36" r="4"></circle><circle cx="60" cy="20" r="4"></circle><circle cx="60" cy="36" r="4"></circle><circle cx="60" cy="44" r="4"></circle><circle cx="20" cy="28" r="4"></circle><circle cx="20" cy="20" r="4"></circle><circle cx="28" cy="20" r="4"></circle><circle cx="44" cy="52" r="4"></circle><circle cx="52" cy="44" r="4"></circle><circle cx="60" cy="52" r="4"></circle><circle cx="60" cy="60" r="4"></circle><circle cx="52" cy="60" r="4"></circle></svg>
                    </button>
                    <button class="btnTypeQR" data-type="classy">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" style="fill: rgb(0, 0, 0);"><path d="M48,32V16H42a2,2,0,0,0-2,2v6H34a2,2,0,0,0-2,2v6h8v8h8v8h8v8H50a2,2,0,0,0-2,2v6H62a2,2,0,0,0,2-2V32Z"></path><path d="M58,16a2,2,0,0,0-2,2v6h6a2,2,0,0,0,2-2V16Z"></path><path d="M24,30V24h6a2,2,0,0,0,2-2V16H18a2,2,0,0,0-2,2V32h6A2,2,0,0,0,24,30Z"></path><path d="M40,40H32V32H26a2,2,0,0,0-2,2v6H18a2,2,0,0,0-2,2V64H38a2,2,0,0,0,2-2V56h6a2,2,0,0,0,2-2V48H40ZM32,56H24V48h8Z"></path></svg>
                    </button>
                    <button class="btnTypeQR" data-type="classy-rounded">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80 80" style="fill: rgb(0, 0, 0);"><path d="M47.91,32C48,31.67,48,16,48,16H46a6,6,0,0,0-6,6v2H38a6,6,0,0,0-6,6v2h8v8h8v8h8v8H54a6,6,0,0,0-6,6v2H58a6,6,0,0,0,6-6V32Z"></path><path d="M62,16a6,6,0,0,0-6,6v2h2a6,6,0,0,0,6-6V16Z"></path><path d="M24,26V24h2a6,6,0,0,0,6-6V16H22a6,6,0,0,0-6,6V32h2A6,6,0,0,0,24,26Z"></path><path d="M40,40H32V32H30a6,6,0,0,0-6,6v2H22a6,6,0,0,0-6,6V64H34a6,6,0,0,0,6-6V56h2a6,6,0,0,0,6-6V48H40ZM24,56V48h8v8Z"></path></svg>
                    </button>
                </div>
            </div>
            <div id="miniFrame" class="row">
                <div id="containerStyles" style="width: 100%">
                    <div id="swatch">
                        <div class="info">
                            <h2><?php $translate->echoTranslate('Color de borde'); ?></h2>
                        </div>
                        <input type="color" id="background" class="input" name="color" value="#000" style="width:100% ">
                    </div>
                    <div id="swatch">
                        <div class="info">
                            <h2><?php $translate->echoTranslate('Color de fondo'); ?></h2>
                        </div>
                        <input type="color" id="background" class="input" name="background" value="#ffffff" style="width:100% ">
                    </div>
                </div>
                <div>
                    <label for="color" style="
    font-size: 21px;
    text-align: center;
    margin-top: 10px;"><?php $translate->echoTranslate('Esquinas'); ?></label>
                    <button class="btnCorner active" data-external="square" data-internal="square">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill="#000000" d="M0,0V24H24V0ZM20,20H4V4H20Z"></path><rect fill="#940000" x="8" y="8" width="8" height="8"></rect></svg>
                    </button>
                    <button class="btnCorner" data-external="square" data-internal="dot">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill="#000000" d="M0,0V24H24V0ZM20,20H4V4H20Z"></path><circle fill="#940000" cx="12" cy="12" r="4"></circle></svg>
                    </button>
                    <button class="btnCorner" data-external="extra-rounded" data-internal="square">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill="#000000" d="M18,0H6A6,6,0,0,0,0,6V18a6,6,0,0,0,6,6H18a6,6,0,0,0,6-6V6A6,6,0,0,0,18,0Zm2,18a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V6A2,2,0,0,1,6,4H18a2,2,0,0,1,2,2Z"></path><rect fill="#940000" x="8" y="8" width="8" height="8"></rect></svg>
                    </button>
                    <button class="btnCorner" data-external="extra-rounded" data-internal="dot">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill="#000000" d="M18,0H6A6,6,0,0,0,0,6V18a6,6,0,0,0,6,6H18a6,6,0,0,0,6-6V6A6,6,0,0,0,18,0Zm2,18a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V6A2,2,0,0,1,6,4H18a2,2,0,0,1,2,2Z"></path><circle fill="#940000" cx="12" cy="12" r="4"></circle></svg>
                    </button>
                    <button class="btnCorner" data-external="dot" data-internal="square">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill="#000000" d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm0,20a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"></path><rect fill="#940000" x="8" y="8" width="8" height="8"></rect></svg>
                    </button>
                    <button class="btnCorner" data-external="dot" data-internal="dot">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill="#000000" d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm0,20a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"></path><circle fill="#940000" cx="12" cy="12" r="4"></circle></svg>
                    </button>
                    <div id="containerStyles">
                        <div id="swatch">
                            <div class="info">
                                <h2><?php $translate->echoTranslate('Color de borde'); ?></h2>
                            </div>
                            <input type="color" id="background" class="input" name="colorCorner" value="#000" style="width:100% ">
                        </div>
                        <div id="swatch">
                            <div class="info">
                                <h2><?php $translate->echoTranslate('Color de fondo'); ?></h2>
                            </div>
                            <input type="color" id="background" class="input" name="backgroundCorner" value="#000" style="width:100% ">
                        </div>
                    </div>
                    <input type="text" name="dataExternal" id="dataExternal" hidden>
                    <input type="text" name="dataInteral" id="dataInternal" hidden>
                </div>
            </div>
        </div>
    </section>
    <aside id="example">
        <button id="closeExample" class="mobile">
            <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 22px;"><path d="M13.41,12l5.3-5.29a1,1,0,1,0-1.42-1.42L12,10.59,6.71,5.29A1,1,0,0,0,5.29,6.71L10.59,12l-5.3,5.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l5.29,5.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"></path></svg>
        </button>
        <h2><?php $translate->echoTranslate('Ejemplo'); ?></h2>
        <div id="containerExample">
            <div id="phone">
                <div id="noch">
                    <div id="camera"></div>
                    <div id="speaker"></div>
                </div>
                <div id="containerScreen">
                    <div id="canvas"></div>
                </div>
            </div>
        </div>
    </aside>


    <section id="bar">
        <div class="row">
            <div class="col">
                <button class="desktop cancelar"><?php $translate->echoTranslate('Atras'); ?></button>
                <button class="btncancel mobile cancelar">
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 16 16" aria-hidden="true" style="font-size: 16px;"><path d="M9.69,14.56l-5.5-5.5a1.49,1.49,0,0,1,0-2.12l5.5-5.5,2.12,2.12L7.37,8l4.44,4.44Z"></path></svg>
                </button>
            </div>
            <div class="mobile">
                <button id="showExample">
                    <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 16 28" aria-hidden="true"><path d="M12,0 C14.209139,-4.05812251e-16 16,1.790861 16,4 L16,24 C16,26.209139 14.209139,28 12,28 L4,28 C1.790861,28 2.705415e-16,26.209139 0,24 L0,4 C-2.705415e-16,1.790861 1.790861,4.05812251e-16 4,0 L12,0 Z M12,2 L4,2 C2.9456382,2 2.08183488,2.81587779 2.00548574,3.85073766 L2,4 L2,24 C2,25.0543618 2.81587779,25.9181651 3.85073766,25.9945143 L4,26 L12,26 C13.0543618,26 13.9181651,25.1841222 13.9945143,24.1492623 L14,24 L14,4 C14,2.8954305 13.1045695,2 12,2 Z M8,20 C9.1045695,20 10,20.8954305 10,22 C10,23.1045695 9.1045695,24 8,24 C6.8954305,24 6,23.1045695 6,22 C6,20.8954305 6.8954305,20 8,20 Z"></path></svg>
                </button>
            </div>
            <div class="col"  id="steps">
                <span class="step disabled"><?php $translate->echoTranslate('Tipo de QR'); ?></span>
                <span class="step disabled"><?php $translate->echoTranslate('Contenido'); ?></span>
                <span class="step selected"><?php $translate->echoTranslate('Diseño del QR'); ?></span>
            </div>
            <div class="col">
                <input type="text" hidden name="type" id="inputType" />
                <input type="button" id="next" value="<?php $translate->echoTranslate('Siguiente'); ?>">
            </div>
        </div>
    </section>

</form>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/footer.php"; ?>
<script>
    $( document ).ready(function() {
        var form = $('#formList');
        $('#next').click(function(){
            form.submit();
        });
        $('.btnTypeQR').click(function(e){
            e.preventDefault();
            $(".btnTypeQR").removeClass("active");
            $(this).addClass('active');
            var type = $(this).data('type');
            $('#dataType').val(type);
        });
        $('.btnCorner').click(function(e){
            e.preventDefault();
            $(".btnCorner").removeClass("active");
            $(this).addClass('active');
            var external = $(this).data('external');
            var internal = $(this).data('internal');
            $('#dataExternal').val(external);
            $('#dataInternal').val(internal);
        });
        $('#<?php echo $type;?>').show();
        $('.cancelar').click(function(e){
            e.preventDefault();
            history.go(-1);
        });
        $('#showExample').click(function(e) {
            e.preventDefault();
            $('#example').show();
        });

        $('#closeExample').click(function(e){
            e.preventDefault();
            $('#example').hide();
        })
    });


    const qrCode = new QRCodeStyling({
        width: 190,
        height: 190,
        type: "svg",
        data: "http://3b21-186-52-163-212.ngrok.io/site?data=",
        // image: "https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg",
    });
        qrCode.append(document.getElementById("canvas"));
</script>

<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body class="container-fluid" id="step3">
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/header.php"; ?>
<form method="POST" action="/generate/step3" id="formList">
    <section id="containerData">
        <h2 id="title">3. Diseño de tu código QR</h2>
        <div class="containerItem">
            <h3>Marco</h3>
            <div id="containerFrames" class="row">
                <div class="containerImgFrame col">
                    <img src="/assets/img/design1.svg" alt="" class="imgFrame">
                </div>
                <div class="containerImgFrame col">
                    <img src="/assets/img/design2.svg" alt="" class="imgFrame">
                </div>
                <div class="containerImgFrame col">
                    <img src="/assets/img/design3.svg" alt="" class="imgFrame">
                </div>
                <div class="containerImgFrame col">
                    <img src="/assets/img/design4.svg" alt="" class="imgFrame">
                </div>
                <div class="containerImgFrame col">
                    <img src="/assets/img/design5.svg" alt="" class="imgFrame">
                </div>
                <div class="containerImgFrame col">
                    <img src="/assets/img/design6.svg" alt="" class="imgFrame">
                </div>
                <div class="containerImgFrame col">
                    <img src="/assets/img/design7.svg" alt="" class="imgFrame">
                </div>
                <div class="containerImgFrame col">
                    <img src="/assets/img/design8.svg" alt="" class="imgFrame">
                </div>
                <div class="containerImgFrame col">
                    <img src="/assets/img/design9.svg" alt="" class="imgFrame">
                </div>
                <div class="containerImgFrame col">
                    <img src="/assets/img/design10.svg" alt="" class="imgFrame">
                </div>
                <div class="containerImgFrame col">
                    <img src="/assets/img/design11.svg" alt="" class="imgFrame">
                </div>
            </div>
            <div id="miniFrame" class="row">
                <div class="col">
                    <label for="color">Color</label>
                    <input type="text" name="color" class="input" />
                    <label for="background">Color de fondo</label>
                    <input type="text" name="background" class="input">
                </div>
                <div class="col">
                    <label for="color">Texto</label>
                    <input type="text" placeholder="Scan me!" name="text"  class="input" />
                    <label for="background">Fondo transparte</label>
                    <input type="checkbox" name="backgroundTransparent" class="input">
                </div>
            </div>
        </div>
        <div class="containerItem">
            <h3>Estilo del QR</h3>
            <div id="containerFrames" class="row">
                <div class="containerImgFrame col">
                    <img src="/assets/img/design9.svg" alt="" class="imgFrame">
                </div>
            </div>
            <div id="miniFrame" class="row">
                <div>
                    <label for="color">Color de borde</label>
                    <input type="text" name="color" class="input" />
                    <label for="background">Color de fondo</label>
                    <input type="text" name="background" class="input">
                </div>
                <div>
                    <label for="color">Esquinas</label>
                    <button class="btnCorner">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill="#000000" d="M0,0V24H24V0ZM20,20H4V4H20Z"></path><rect fill="#940000" x="8" y="8" width="8" height="8"></rect></svg>
                    </button>
                    <button class="btnCorner">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill="#000000" d="M0,0V24H24V0ZM20,20H4V4H20Z"></path><circle fill="#940000" cx="12" cy="12" r="4"></circle></svg>
                    </button>
                    <button class="btnCorner">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill="#000000" d="M18,0H6A6,6,0,0,0,0,6V18a6,6,0,0,0,6,6H18a6,6,0,0,0,6-6V6A6,6,0,0,0,18,0Zm2,18a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V6A2,2,0,0,1,6,4H18a2,2,0,0,1,2,2Z"></path><rect fill="#940000" x="8" y="8" width="8" height="8"></rect></svg>
                    </button>
                    <button class="btnCorner">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill="#000000" d="M18,0H6A6,6,0,0,0,0,6V18a6,6,0,0,0,6,6H18a6,6,0,0,0,6-6V6A6,6,0,0,0,18,0Zm2,18a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V6A2,2,0,0,1,6,4H18a2,2,0,0,1,2,2Z"></path><rect fill="#940000" x="8" y="8" width="8" height="8"></rect></svg>
                    </button>
                    <button class="btnCorner">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill="#000000" d="M18,0H6A6,6,0,0,0,0,6V18a6,6,0,0,0,6,6H18a6,6,0,0,0,6-6V6A6,6,0,0,0,18,0Zm2,18a2,2,0,0,1-2,2H6a2,2,0,0,1-2-2V6A2,2,0,0,1,6,4H18a2,2,0,0,1,2,2Z"></path><circle fill="#940000" cx="12" cy="12" r="4"></circle></svg>
                    </button>
                    <button class="btnCorner">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill="#000000" d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm0,20a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"></path><rect fill="#940000" x="8" y="8" width="8" height="8"></rect></svg>
                    </button>
                    <button class="btnCorner">
                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path fill="#000000" d="M12,0A12,12,0,1,0,24,12,12,12,0,0,0,12,0Zm0,20a8,8,0,1,1,8-8A8,8,0,0,1,12,20Z"></path><circle fill="#940000" cx="12" cy="12" r="4"></circle></svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="containerItem">
            <h3>Añadir logo</h3>
            <input type="file" name="logo" />
        </div>
    </section>
    <aside>

    </aside>

    <section id="bar">
        <div class="row">
            <div class="col">
                <button id="cancelar">Atras</button>
            </div>
            <div class="col">
                <span class="step">Tipo de QR</span>
                <span class="step">Contenido</span>
                <span class="step">Diseño del QR</span>
            </div>
            <div class="col">
                <input type="text" hidden name="type" id="inputType" />
                <input type="button" id="next" value="Siguiente">
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
        $('#cancelar').click(function(e){
            e.preventDefault();
            history.go(-1);
        });
    });
</script>

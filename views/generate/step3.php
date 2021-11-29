<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body class="container-fluid" id="step3">
<header>

</header>
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
            <h3>Añadir logo</h3>
        </div>
    </section>
    <aside>

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
    });
</script>

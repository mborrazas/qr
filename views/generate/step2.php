<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body class="container-fluid" id="step2">
<header>

</header>
<form method="POST" action="/generate/step2" id="formList">
    <section id="containerData">
        <h2 id="title">2. Contenido de tu código QR</h2>
        <?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/generate/typesForm/website.php"; ?>
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

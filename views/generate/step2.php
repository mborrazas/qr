<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body class="container-fluid" id="step2">
<header>

</header>
<form method="POST" action="/generate/step2">
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
                <span>Tipo de QR</span>
                <span>Contenido</span>
                <span>Diseño del QR</span>
            </div>
            <div class="col">
                <input type="submit" id="siguiente" value="Siguiente">
            </div>
        </div>
    </section>
</form>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/footer.php"; ?>
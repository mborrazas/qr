<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body class="container-fluid" id="step3">
<header>

</header>
<form method="POST" action="/generate/step3">

    <section id="containerData">
        <h2 id="title">3. Diseño de tu código QR</h2>
        <div class="containerItem">
            <h3>Marco</h3>
            <div id="miniFrame">
                <div class="one">
                    <label for="color">Color</label>
                    <input type="text" />
                    <label for="background">Color de fondo</label>
                    <input type="text">
                </div>
                <div class="two">
                    <label for="color">Texto</label>
                    <input type="text" placeholder="Scan me!" />
                    <label for="background">Fondo transparte</label>
                    <input type="checkbox">
                </div>
            </div>
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
                <span>Tipo de QR</span>
                <span>Contenido</span>
                <span>Diseño del QR</span>
            </div>
            <div class="col">
                <button id="siguiente">Siguiente</button>
            </div>
        </div>
    </section>

</form>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/footer.php"; ?>
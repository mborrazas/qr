<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body class="container-fluid" id="step1">
<header>
</header>
<form method="POST" action="/generate" id="formList">
    <section id="containerTypes">
        <h2 id="title">Elige un tipo de QR</h2>
        <div class="row">
            <div class="col element">
                <h3 class="title">Página web</h3>
                <p>Abre una URL</p>
            </div>
            <div class="col element seletType" data-type="listLinks">
                <h3 class="title">Listado de Enlaces</h3>
                <p>Agrupa enlaces</p>
            </div>
            <div class="col element seletType" data-type="vcard">
                <h3 class="title">Vcard Plus</h3>
                <p>Comparte detalles de contacto</p>
            </div>
        </div>
        <div class="row">
            <div class="col element seletType" data-type="business">
                <h3 class="title">Negocio</h3>
                <p>Comparte información sobre tu negocio</p>
            </div>
            <div class="col element seletType" data-type="apps">
                <h3 class="title">Apps</h3>
                <p>Redirecciona a una tienda de apps</p>
            </div>
            <div class="col element seletType" data-type="pdf">
                <h3 class="title">PDF</h3>
                <p>Muestra un PDF</p>
            </div>
        </div>
        <div class="row">
            <div class="col element seletType" data-type="business">
                <h3 class="title">Negocio</h3>
                <p>Comparte información sobre tu negocio</p>
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
       $('.element').each(function(){
           this.addEventListener('click', selectElement);
       });
       function selectElement(){
           $('#inputType').val($(this).attr("data-type"));
       }
       $('#next').click(function(){
            form.submit();
       });
    });
</script>

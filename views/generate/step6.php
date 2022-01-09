<?php $url = $parametros['url'];   ?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body class="container-fluid" id="step6">
<header>

</header>

<section id="containerData">
    <h2>¡Felicitaciones!</h2>
    <div class="containerItem">
        <h3 class="title">¡Tu QR ya está listo!</h3>
        <p class="subtitle">Descargalo y utilizalo.</p>
    </div>
    <div class="containerItem" id="registerContainer">
        <img src="/<?php echo $url.'.png'?>" alt="">
    </div>
   </section>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/footer.php"; ?>


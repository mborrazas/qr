<?php $url = $parametros['url'];   ?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<script type="text/javascript" src="https://unpkg.com/qr-code-styling@1.5.0/lib/qr-code-styling.js"></script>
<body class="container-fluid" id="step6">
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/header.php"; ?>
<section id="containerData">
    <h2 id="congratulations">¡Felicitaciones!</h2>
    <div class="containerItem">
        <h3 class="title">¡Tu QR ya está listo!</h3>
        <p class="subtitle">Descargalo y utilizalo.</p>
    </div>
    <div class="containerItem" id="registerContainer">
      <!--  <div id="canvas"></div> -->
        <img src="/<?php echo $url.'.png'?>" alt="">
    </div>
   </section>
<script type="text/javascript">
    const qrCode = new QRCodeStyling({
        width: 300,
        height: 300,
        type: "svg",
        data: "https://www.facebook.com/",
        image: "https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg",
        dotsOptions: {
            color: "#4267b2",
            type: "rounded"
        },
        backgroundOptions: {
            color: "#e9ebee",
        },
        imageOptions: {
            crossOrigin: "anonymous",
            margin: 20
        }
    });

    qrCode.append(document.getElementById("canvas"));
   // qrCode.download({ name: "qr", extension: "svg" });
</script>

<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/footer.php"; ?>


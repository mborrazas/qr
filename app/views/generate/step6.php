<?php $translate = Translate::getInstance(); ?>
<?php $url = $parametros['url'];
$design = $parametros['design'];
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
?>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<script type="text/javascript" src="https://unpkg.com/qr-code-styling@1.5.0/lib/qr-code-styling.js"></script>
<body class="container-fluid" id="step6">
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/header.php"; ?>
<section id="containerData">
    <h2 id="congratulations"><?php $translate->echoTranslate('¡Felicitaciones!'); ?></h2>
    <div class="containerItem">
        <h3 class="title"><?php $translate->echoTranslate('¡Tu QR ya está listo!'); ?></h3>
        <p class="subtitle"><?php $translate->echoTranslate('Descargalo y utilizalo.'); ?></p>
    </div>
    <div class="containerItem" id="registerContainer">
          <div id="canvas"></div>
        <button id="download"><?php $translate->echoTranslate('Descargar'); ?></button>
    </div>
   </section>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/footer.php"; ?>
<script type="text/javascript">
    const qrCode = new QRCodeStyling({
        width: 300,
        height: 300,
        type: "svg",
        data: "<?php echo "http://3b21-186-52-163-212.ngrok.io/site?data=".$url; ?>",
        // image: "https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg",
        dotsOptions: {
            type: "<?php echo $design['dataType']; ?>",
            color: "<?php echo $design['color']; ?>"
        },
        cornersSquareOptions: {
            type: "<?php echo $design['dataExternal']; ?>",
            color: "<?php echo $design['colorCorner']; ?>"
        },
        cornersDotOptions: {
            type: "<?php echo $design['dataInteral']; ?>",
            color: "<?php echo $design['backgroundCorner']; ?>"
        },
        backgroundOptions: {
            color: "<?php echo $design['background']; ?>",
        }
    });
    qrCode.append(document.getElementById("canvas"));
    $('#download').click(function (e){
        e.preventDefault();
        qrCode.download({ name: "qr", extension: "svg" });
    });
</script>


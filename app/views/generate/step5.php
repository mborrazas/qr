<?php $translate = Translate::getInstance(); ?>
<?php
$session = $parametros['session'];
?>
<script src="https://js.stripe.com/v3/"></script>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body class="container-fluid" id="step5">
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/header.php"; ?>

<section id="containerData">
    <h2 id="title"><?php $translate->echoTranslate('Un ultimo paso'); ?></h2>
    <div class="containerItem">
        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" style="font-size: 50px;"><path class="custom-color--circle-check-green" fill="#31d3b3" d="M24 12c0 6.627-5.373 12-12 12s-12-5.373-12-12c0-6.627 5.373-12 12-12s12 5.373 12 12z"></path><path fill="#000" d="M10 17.41l-4.71-4.7 1.42-1.42 3.29 3.3 7.29-7.3 1.42 1.42-8.71 8.7z"></path></svg>
        <h3 class="title"><?php $translate->echoTranslate('¡Finaliza tu pago para tu qr!'); ?></h3>
    </div>
    <div class="containerItem" >
        <p class="totalToPay"><?php $translate->echoTranslate('Total a pagar'); ?></p>
        <p class="price">0,50 €</p>
        <p class="descriptionPlan"><?php $translate->echoTranslate('Test Plan'); ?></p>
        <button id="checkout-button" class="buttonToPay"><?php $translate->echoTranslate('Pagar'); ?></button>
    </div>
</section>
<script>
    var stripe = Stripe('pk_test_51JuFHeAnD1p0AK2QoBCyJUawD1IlCNCxYbQulT8NRaUqH8e1uiLzzllD8sQCx2Vdy3r9QZz8fAOPWQep43mmftGq00SrhmNvyx');
    const btn = document.getElementById('checkout-button');
    btn.addEventListener('click', function(e){
        e.preventDefault();
        stripe.redirectToCheckout({
            sessionId: "<?php echo $session->id; ?>"
        });
    });
</script>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/footer.php"; ?>



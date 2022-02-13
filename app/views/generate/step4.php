<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body class="container-fluid" id="step4">
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/header.php"; ?>

    <section id="containerData">
        <h2>¡Felicitaciones!</h2>
        <div class="containerItem">
            <h3 class="title">¡Tu QR ya está listo!</h3>
            <p class="subtitle">Para descargar tu código QR es necesario crear una cuenta.</p>
        </div>
 
        <div class="containerItem" id="registerContainer">
        <form method="POST" action="/generate/createAccount" id="formList">
            <h3>Crear cuenta</h3>
            <?php if(isset($_GET['error'])){ ?>
                <p>Error al crear la cuenta.</p>
            <?php } ?>
            <label for="email" >Correo electrónico</label>
            <input type="email" placeholder="nombre@email.com" name="email" class="input width100"  required />
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Escribe tu contraseña aquí..." name="password" class="input width100" required minlength="8">
            <label for="passwordConfirm">Repetir contraseña</label>
            <input type="password" placeholder="Escribe tu contraseña aquí..." name="passwordConfirm" class="input width100" required minlength="8">
            <input type="checkbox" name="terms" required>
            <p>He leído y acepto los terminos y condiciones</p>
            <input type="submit" value="Crear cuenta" class="buttonAction">
            <p class="haveAccount">¿Ya tienes cuenta? <span id="login">Iniciar Sesión</span></p>
            </form>
        </div>
        <div class="containerItem" id="loginContainer">
            <form method="POST" action="/generate/login" id="formList">
                <h3>Iniciar Sesión</h3>
                <?php if(isset($_GET['errorLogin'])){ ?>
                    <p>Usuario o contraseña incorrecto.</p>
                <?php } ?>
                <label for="email">Correo electrónico</label>
                <input type="email" placeholder="nombre@email.com" name="email" class="input width100" />
                <label for="password">Contraseña</label>
                <input type="password" placeholder="Escribe tu contraseña aquí..." name="password" class="input width100">
                <input type="submit" value="Iniciar Sesión" class="buttonAction">
                <p class="haveAccount">¿No tienes cuenta? <span id="register">Crear una cuenta</span></p>
            </form>
        </div>
    </section>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/footer.php"; ?>
<script>
    $( document ).ready(function() {
        <?php if(isset($_GET['errorLogin'])): ?>
            $('#registerContainer').hide();
            $('#loginContainer').show();
        <?php endif; ?>
        var form = $('#formList');
        $('#next').click(function(){
            form.submit();
        });
        $('#login').click(function (){
            $('#registerContainer').hide();
            $('#loginContainer').show();
        });
        $('#register').click(function (){
            $('#registerContainer').show();
            $('#loginContainer').hide();
        });
    });
</script>

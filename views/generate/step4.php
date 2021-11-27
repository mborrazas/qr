<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/head.php"; ?>
<body class="container-fluid">
<header>

</header>
<form method="POST" action="/generate/step4">
    <section>
        <h2>¡Felicitaciones!</h2>
        <div class="containerItem">
            <h3>¡Tu QR ya está listo!</h3>
            <p>Para descargar tu código QR es necesario crear una cuenta.</p>
        </div>
        <div class="containerItem" id="registerContainer">
            <h3>Crear cuenta</h3>
            <label for="email">Correo electrónico</label>
            <input type="email" placeholder="nombre@email.com" name="email" />
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Escribe tu contraseña aquí..." name="password">
            <label for="passwordConfirm">Repetir contraseña</label>
            <input type="password" placeholder="Escribe tu contraseña aquí..." name="passwordConfirm">
            <input type="checkbox" name="terms">
            <p>He leído y acepto los terminos y condiciones</p>
            <input type="submit" value="Crear cuenta">
            <p>¿Ya tienes cuenta? <span id="login">Iniciar Sesión</span></p>
        </div>
        <div class="containerItem" id="loginContainer">
            <h3>Iniciar Sesión</h3>
            <label for="email">Correo electrónico</label>
            <input type="email" placeholder="nombre@email.com" name="email" />
            <label for="password">Contraseña</label>
            <input type="password" placeholder="Escribe tu contraseña aquí..." name="password">
            <p>¿Has olvidado tu contraseña? <span>Pincha aquí</span></p>
            <input type="submit" value="Iniciar Sesión">
            <p>¿No tienes cuenta? <span id="register">Crear una cuenta</span></p>
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
        </div>
    </section>
</form>
<?php require $_SERVER["DOCUMENT_ROOT"] . "/../views/components/footer.php"; ?>
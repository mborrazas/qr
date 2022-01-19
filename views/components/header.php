<header>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="/">
            <img src="/Logo.jpeg" alt=""  style="float: left;"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if(isset($_SESSION['user'])): ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown my-2 my-lg-0">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                            if($_SESSION['user'] instanceof Usermodel):
                                echo $_SESSION['user']->getEmail();
                            else:
                                echo 'Menu';
                            endif; ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Administrador</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout">Cerrar sesión</a>
                        </div>
                    </li>
                </ul>
            </div>
        <?php endif; ?>
    </nav>
</header>

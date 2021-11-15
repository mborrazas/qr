<?php
require $_SERVER["DOCUMENT_ROOT"] . "/../routes/routes.class.php";
Routes::Add("/", "get", "HomeControlador::home");

Routes::Run();

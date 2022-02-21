<?php
require $_SERVER["DOCUMENT_ROOT"] . "/../routes/routes.class.php";
require $_SERVER["DOCUMENT_ROOT"] . "/../helpers/translate.php";

$data = new Translate();
Routes::Add("/", "get", "HomeController::home");
Routes::Add("/generate", "get", "GenerateController::listTypes");
Routes::Add("/generate", "post", "GenerateController::requestListTypes");
Routes::Add("/generate/step2", "get", "GenerateController::step2");
Routes::Add("/generate/step2", "post", "GenerateController::requestStep2");
Routes::Add("/generate/step3", "get", "GenerateController::step3");
Routes::Add("/generate/step3", "post", "GenerateController::requestStep3");
Routes::Add("/generate/step4", "get", "UserController::step4");
Routes::Add("/generate/step6", "get", "GenerateController::step6");
Routes::Add("/generate/createAccount", "post", "UserController::createAccount");
Routes::Add("/generate/login", "post", "UserController::login");
Routes::Add("/generate/createqr", "get", "GenerateController::createqr");
Routes::Add("/site", "get", "TemplateController::init");
Routes::Add("/payment/success", "get", "PaymentsController::success");
Routes::Add("/payment/cancel", "get", "PaymentsController::cancel");
Routes::Add("/generate/step5", "get", "PaymentsController::init");
Routes::Add("/logout", "get", "UserController::logout");
Routes::Run();

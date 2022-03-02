<?php

class LanguageController
{
    public static function changeLanguage()
    {
        $uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri_segments = explode('/', $uri_path);
        $_SESSION['lang'] = $uri_segments[1];
        header('Location: /');
    }
}

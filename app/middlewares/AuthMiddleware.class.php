<?php

require '../utils/autoloader.php';

class AuthMiddleware
{
    public static function authorized($post, $get, $server, $funcion)
    {
        if (isset($_SESSION['logged'])) {
            $contexto = [
                'post' => $post,
                'get' => $get,
                'server' => $server
            ];
            call_user_func($funcion, $contexto);
        } else {
            header("Location: /");
            return;
        }
    }
}

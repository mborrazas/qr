<?php

class UserController
{
    public static function step4()
    {
        return generarHtml("generate/step4", []);
    }

    public static function createAccount($request)
    {
        if (!isset($request['post']['email'])) {
            throw new Exception('El email no ingresado.');
        }
        if (!isset($request['post']['password']) || $request['post']['password'] === '') {
            throw new Exception('La contraseña esta vacia.');
        }
        if (!isset($request['post']['passwordConfirm']) || $request['post']['passwordConfirm'] === '') {
            throw new Exception('El confirmar contraseña esta vacio.');
        }
        if ($request['post']['password'] !== $request['post']['passwordConfirm']) {
            throw new Exception('Las contraseñas no coinciden.');
        }
        $userModel = new Usermodel();
        $userModel->setEmail($request['post']['email']);
        $userModel->setPassword($request['post']['password']);
        $user = $userModel->save();
    }

    public static function login($request)
    {
    }
}

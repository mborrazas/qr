<?php

class UserController
{
    public static function step4()
    {
        return generarHtml("generate/step4", []);
    }

    public static function logout(){
        unset($_SESSION['user']);
        header('Location: /generate');
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
        if(!isset($request['post']['terms']) || $request['post']['terms'] !== 'on'){
            throw new Exception('Los terminos y condiciones no fueron aceptados.');
        }
        if ($request['post']['password'] !== $request['post']['passwordConfirm']) {
            throw new Exception('Las contraseñas no coinciden.');
        }
      
        try{
            $userModel = new Usermodel();
            $userModel->setEmail($request['post']['email']);
            $userModel->setPassword($request['post']['password']);
            $userModel->save();
            $user = $userModel->getUser();
            self::createSesion($user);
            header("Location: /generate/createqr");
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    public static function login($request)
    {
         if (!isset($request['post']['email'])) {
            throw new Exception('El email no ingresado.');
        }
        if (!isset($request['post']['password']) || $request['post']['password'] === '') {
            throw new Exception('La contraseña esta vacia.');
        }
        try{
            $userModel = new Usermodel();
            $userModel->setEmail($request['post']['email']);
            $userModel->setPassword($request['post']['password']);
            $user = $userModel->getUser();
            self::createSesion($user);
            header("Location: /generate/createqr");
        }catch(Exception $e){
            return $e->getMessage();
        }
    }

    private static function createSesion($user){
        $_SESSION['user'] = $user;
    }
}

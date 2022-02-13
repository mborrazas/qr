<?php

class Usermodel extends Model
{
    private $email;
    private $password;
    private $id;

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function encryptPassword()
    {
        return sha1($this->password);
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getId()
    {
        return $this->id;
    }

    public function save()
    {
        try {
            $sql = "INSERT INTO users(email,password) VALUES(?,?);";
            $sentencia = $this->conexion->prepare($sql);
            $password = $this->encryptPassword();
            $sentencia->bind_param(
                "ss",
                $this->email,
                $password
            );
            $sentencia->execute();
            if ($sentencia->error) {
                throw new Exception("Hubo un problema al guardar el usuario: " . $sentencia->error);
            }
            return $sentencia->insert_id;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    public function getUser(){
        try{
            $sql = "SELECT * from users where email = ? AND password = ?";
            $sentencia = $this->conexion->prepare($sql);
            $password = $this->encryptPassword();
            $sentencia->bind_param(
                "ss",
                $this->email,
                $password
            );
            $sentencia->execute();
            if ($sentencia->error) {
                throw new Exception("Hubo un problema al seleccionar el usuario: " . $sentencia->error);
            }
            $usuarioDB = $sentencia->get_result();
            while ($row = $usuarioDB->fetch_assoc()) {
                $usuario = new self();
                $usuario->setEmail($row['email']);
                $usuario->setId($row['id']);
                return $usuario;
            }
            return false;
        }catch(Exception $e){
            error_log($e->getMessage());
        }
    }
}

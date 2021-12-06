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
            $sentencia->bind_param(
                "ss",
                $this->getEmail(),
                $this->encryptPassword()
            );
            $sentencia->execute();
            if ($sentencia->error) {
                throw new Exception("Hubo un problema al guardar el usuario: " . $sentencia->error);
            }
            return true;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}

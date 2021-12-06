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
    }
}

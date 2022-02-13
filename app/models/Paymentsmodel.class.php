<?php

class Paymentsmodel extends Model
{

    private $id;
    private $userId;
    private $amount;
    private $datePayment;
    private $state;
    private $expirationDate;


    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setUserId($userId){
        $this->userId = $userId;
    }

    public function getUserId(){
        return $this->userId;
    }

    public function setAmount($amount){
        $this->amount = $amount;
    }

    public function getAmount(){
        return $this->amount;
    }

    public function setDatePayment($datePayment){
        $this->datePayment = $datePayment;
    }

    public function getDatePayment(){
        return $this->datePayment;
    }

    public function setState($state){
        $this->state = $state;
    }

    public function getState(){
        return $this->state;
    }

    public function setExpirationDate($expirationDate){
        $this->expirationDate = $expirationDate;
    }

    public function getExpirationDate(){
        return $this->expirationDate;
    }

    public function save()
    {
        try {
            $sql = "INSERT INTO payments(userId,amount,statePayment,datePayment,expirationDate) VALUES(?,?,?,?,?);";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bind_param(
                "issss",
                $this->userId,
                $this->amount,
                $this->state,
                $this->datePayment,
                $this->expirationDate
            );
            $sentencia->execute();
            if ($sentencia->error) {
                throw new Exception("Hubo un problema al guardar el pago: " . $sentencia->error);
            }
            return $this->conexion->insert_id;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }


    public function approved($paymentId){
        try {
            $sql = "UPDATE payments SET statePayment = 'approved' WHERE id = ?;";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bind_param(
                "i",
                $paymentId
            );
            $sentencia->execute();
            if ($sentencia->error) {
                throw new Exception("Hubo un problema al guardar el pago: " . $sentencia->error);
            }
            return $this->conexion->insert_id;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }


    public function hasSuscription($userId){
        try {
            $sql = "SELECT * FROM payments where userId = ? AND statePayment = 'approved'";
            $sentencia = $this->conexion->prepare($sql);
            $sentencia->bind_param(
                "i",
                $userId
            );
            $sentencia->execute();
            if ($sentencia->error) {
                throw new Exception("Hubo un problema al guardar el pago: " . $sentencia->error);
            }
            $dataPayments = $sentencia->get_result();
            return $dataPayments->num_rows > 0;
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }


}
<?php
require_once($_SERVER["DOCUMENT_ROOT"] . '/../vendor/autoload.php');
\Stripe\Stripe::setApiKey('sk_test_51JuFHeAnD1p0AK2QHBwb74INleE6fDlF66tRnAWLRyQrHHUBio56aweogeAKf4Ti59nODL0jQN8i73mil0z1ovuS0023BIFki0');

class PaymentsController
{
    public static function init($request)
    {
        header('Location: /generate/step6');
        if(!$_SESSION['user'] instanceof Usermodel){
            throw new Exception('El usuario no es válido');
        }
        if(self::hasSuscription()){
            header('Location: /generate/step6');
        }

        $payment = new Paymentsmodel();
        $payment->setState('init');
        $payment->setAmount('0,50');
        $payment->setUserId($_SESSION['user']->getId());
        $payment->setDatePayment(date("Y-m-d"));
        $payment->setExpirationDate(date("Y-m-d"));
        $idPayment = $payment->save();
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'client_reference_id' => $idPayment,
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Test plan',
                    ],
                    'unit_amount' => 50,
                ],
                'quantity' => 1
            ]],
            'mode' => 'payment',
            'success_url' => 'https://localhost/payment/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => 'https://localhost/payment/cancel?session_id={CHECKOUT_SESSION_ID}'
        ]);
        return generarHtml("generate/step5", ['session' => $session]);
    }

    public static function success($request)
    {
        try{
            $session = \Stripe\Checkout\Session::retrieve($request['get']['session_id']);
            $payment = new Paymentsmodel();
            $payment->approved($session->client_reference_id);
            header('Location: /generate/step6');
        }catch(Exception $e){
            header('Location: /generate/step5');
        }
    }

    public static function cancel($request){
        header('Location: /generate/step5');
    }

    public static function hasSuscription(){
        $payment = new Paymentsmodel();
        return $payment->hasSuscription($_SESSION['user']->getId());
    }
}

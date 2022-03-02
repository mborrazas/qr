<?php


class HomeController
{
    public static function home()
    {   
        return generarHtml("home/principal", []);
        
    }

    public static function faq(){
        return generarHtml('home/faq', []);
    }

    public static function contact(){
        return generarHtml("home/contact", []);
    }

    public static function prices(){
        return generarHtml("home/prices", []);
    }

    public static function conditions(){
        return generarHtml("home/conditions", []);
    }

    public static function privacity(){
        return generarHtml("home/privacity", []);
    }

    public static function cookies(){
        return generarHtml("home/cookies", []);
    }

    public static function cancelSuscription(){
        return generarHtml("home/cancelsuscription", []);
    }
}

<?php


class HomeController
{
    public static function home()
    {
        return generarHtml("home/principal", []);
    }
}

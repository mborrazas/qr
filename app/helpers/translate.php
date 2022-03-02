<?php


class Translate{

    public static $instance;
    private $memcache;
    private $lang;
    public function __construct() {
        self::$instance = $this;
        $this->lang = $_SESSION['lang'] ? $_SESSION['lang'] :'ES';
       // $this->memcache = new Memcache();
        //$this->memcache->addServer('memcached',11211);
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function returnTranslate(string $text){
        return $this->translate($text);
    }

    public function echoTranslate(string $text){
        echo $this->translate($text);
    }

    private function translate(string $text){
        return $text;
        $key = sha1($text.$this->lang);
        //$cache = $this->memcache->get($key);
        //if(!$cache){
            return $this->api($text);
        //}
        //return $cache;
    }



    public function api(string $text){
        try{
            $url = "https://api-free.deepl.com/v2/translate";
            $curl = curl_init($url);
            $params = [
                'auth_key' => '8545c630-33f8-c2d1-19d9-7d0155fe9dbb:fx',
                "text" => $text,
                "target_lang" => $this->lang
            ];
            $url = $url . '?' . http_build_query($params);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

            $resp = curl_exec($curl);
            curl_close($curl);
            $value = json_decode($resp, true)['translations'][0]['text'];
            //$this->memcache->set( sha1($text.$this->lang), $value);
            return $value;
        }catch(Exception $e){
            return $text;
        }
    }
}
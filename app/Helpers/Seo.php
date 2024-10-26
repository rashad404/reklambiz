<?php
namespace App\Helpers;

class Seo {

    public static $add_text;
    public static $add_prefix;
    public static $host;

    public static function init() {
        self::$add_text = ' | ' . config('app.name');
        self::$add_prefix = config('app.name') . ' | ';
        self::$host = $_SERVER['HTTP_HOST'];
    }

    public static function general() {
        $array['metaTitle'] = self::$add_prefix . ' Rəklam Agentliyi, Veb Reklam, Azərbaycan';
        $array['metaKeywords'] = self::$add_prefix . ' veb reklam, rəklam agentliyi, rəqəmsal marketinq, internet reklam, reklam platforması';
        $array['metaDescription'] = 'Azərbaycanın aparıcı veb rəklam agentliyi. Rəqəmsal marketinq həlləri, internetdə reklam yerləşdirilməsi, və rəqəmsal kampaniyalar üçün effektiv platforma.';        
        $array['metaImg'] = 'images/logo/logo-fb.png';
        return $array;
    }
    public static function index() {
        return self::general();
    }


}

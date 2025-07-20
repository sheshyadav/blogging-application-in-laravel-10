<?php

use Illuminate\Support\Facades\DB;


/*
|------------------------------------------------------------
|   <!--  get site setting information  --!>
|------------------------------------------------------------
*/

if(!function_exists("site")){
    function site($id = null){
            $data = array(
                'name' => 'Softwala',
                'description' => 'Softwala provide a collection of tutorials about PHP, Laravel, VueJS, ReactJS, JavaScript, JQuery and SQL etc. You will find the best example an articles about programing Languages.',
                'url' => 'https://softwala.com',
                'address' => ' Jaunpur, UP - 222145, IN',
                'email' => 'helpsoftwala@gmail.com',
                'call' => '9170 8116 7081',
                'whatsapp' => '9170 8116 7081',
                'facebook' => 'https://www.facebook.com/softwalatech',
                'twitter' => 'https://www.twitter.com/@softwalatech',
                'instagram' => 'https://www.instagram.com/softwalatech/',
                'pinterest' => 'https://www.pinterest.com/softwala',
                'linkedin' => 'https://www.linkedin.com/company/softwala',
                'whatsapplink' => 'https://wa.me/917081167081?text=Hi%20Softwala',
            );

            if(isset($data[$id])){
                return $data[$id];
            }else{ return null;}
    }
}


/*
|--------------------------------------------------------------------------------------------
|   <!--  This function use for show time zone according user timestamp --!>
|--------------------------------------------------------------------------------------------
*/

if(!function_exists("local_time")){
    function local_time($time){
        $ip = $_SERVER['REMOTE_ADDR'];
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
        if(isset($ipdat->geoplugin_timezone)){
        $time = new DateTime($time, new DateTimeZone(env('APP_TIMEZONE')));
        $time->setTimezone(new DateTimeZone($ipdat->geoplugin_timezone));
        return $time;
        }else{ return  new DateTime($time);}
    }
}

if(!function_exists("utc_time")){
    function utc_time($time){
        $ip = $_SERVER['REMOTE_ADDR'];
        $ipdat = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
        if(isset($ipdat->geoplugin_timezone)){
        $time = new DateTime($time, new DateTimeZone($ipdat->geoplugin_timezone));
        $time->setTimezone(new DateTimeZone(env('APP_TIMEZONE')));
        return $time;
        }else{ return  new DateTime($time);}
    }
}


/*
|--------------------------------------------------------------------------------------------
|   <!--  This function use for get subscriber country name using ip --!>
|--------------------------------------------------------------------------------------------
*/

if(!function_exists("iptocountry")){
    function iptocountry($ip){
        $data = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
        if(isset($data->geoplugin_countryName)){
            return $data->geoplugin_countryName;
        }else{
            return null;
        }
    }
}

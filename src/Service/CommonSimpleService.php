<?php

namespace App\Service;

class CommonSimpleService
{
    public function encryptJson($data){
        $value = json_decode(utf8_encode($data)); // Don't forget the encoding
        return $value;
    }

    public function hashSha256($data){
        return hash("sha256", $data);
    }

    public function getCookie($cookie){
        $result = '';
        if(isset($_COOKIE[$cookie])){
            $result = $_COOKIE[$cookie];
        }

        return $result;
    }
}

?>
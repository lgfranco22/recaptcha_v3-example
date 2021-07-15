<?php

require '../Config/Config.php';

class Captcha{

    public function getCaptcha($key)
    {
        $resposta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRECT_KEY."&response={$key}&remoteip={$_SERVER['REMOTE_ADDR']}");
        $retorno = json_decode($resposta);
        return $retorno;
    }
}

?>
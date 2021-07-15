<?php

require '../Class/Captcha.php';


if(isset($_POST['g-recaptcha-response']))
{
    $secretKey = $_POST['g-recaptcha-response'];
    $consulta = new Captcha();

    $return = $consulta->getCaptcha($secretKey);
    
    if($return->success == true && $return->score >= 0.6)
    {
        echo "Passou :)";
    }
    else{
        echo "Não passou";
    }
}

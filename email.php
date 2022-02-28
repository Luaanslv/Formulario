<?php

if(isset($_POST['email']) && !empty($_POST['email'])){
$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

$to = "luaan.silva117@gmail.com";
$subject = "Contato - Trabalho";
$body = "nome:".$nome. "\n".
        "Email:".$email."\n".
        "Mensagem: ".$mensagem;

    
$header = "From: luansilvagames06@gmail.com". "\r\n".
            "reply-to:".$email. 
            "\r\n"."X=Mailer:php/" .phpversion();

if ( mail($to,$subject,$body,$header) ){

    echo("Email enviado com sucesso");
}else{
    echo ("O email não pode ser enviado");
}

}   

?>
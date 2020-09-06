<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$assunto = addslashes($_POST['assunto']);
$mensagem = addslashes($_POST['mensagem']);

$to = "thallyta180136319@gmail.com";
$subject = "Contato - DRILL MAXTER";
$body = "Nome: ".$nome. "\n".
        "Email: ".$email. "\n".
        "Assunto: ".$assunto. "\n".
        "Mensagem: ".$mensagem;

$header = "From: comercial@drillmaxter.com.br"."\r\n"
          ."Reply-to: ".$email."\r\n"
          ."X=Mailer:PHP".phpversion();

    if (mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");

    }else{
        
    echo("Email não pode ser enviado");
 }
}

?>
<?php

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);

$para = "washingtonciocci@gmail.com";
$assunto = "fomrulario SP - Instagram";

$corpo = "Name: ".$nome."\n"."Email: ".$email."\n"."Telefone: ".$telefone;

$cabeca = "From: contato@imoveisavendaemsantos.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
    echo("E-mail enviado com sucesso");

}else{
    echo("Seu email não pode ser enviado");
}

?>
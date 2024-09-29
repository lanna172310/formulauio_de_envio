<?php
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $para = "lanna172310@gmail.com";
    $assunto = "Coleta de dados - Paulo oliveira";

    $corpo = "Nome: ".$nome."\n"."Email".$email."\n"."Telefone".$telefone;
    $cabeca = "form: lanna172310@gmail.com"."\n"."Reply-to ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para, $assunto, $corpo, $cabeca)){
        echo("Email enviado com sucesso!");
    }else{
        echo("Houve um Erro ao enviar o email!");
    }
?>
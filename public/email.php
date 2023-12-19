<?php

	require_once ("../public/mailer/PHPMailer.php");
	require_once ("../public/mailer/SMTP.php");
   	$ok = 0;

try{
    if(isset($_POST["email"])){

        $nome       = $_POST["name"];
        $tel        = $_POST["tel"];
        $assuntoM   = $_POST["subject"];
        $email      = $_POST["email"];
        $mensagem   = $_POST["mensagem"];
        $assunto    = "CONTATO VIA SITE";

        $phpmail = new PHPMailer\PHPMailer\PHPMailer(); // Instânciamos a classe PHPmailer para poder utiliza-la

        $phpmail->isSMTP(); // envia por SMTP

        $phpmail->SMTPDebug = 0; // Opções de debug ( 0, 1 ou 2)
        $phpmail->Debugoutput = 'html';

        $phpmail->Host = "smtp.hostinger.com"; // SMTP servers
        $phpmail->Port = 465; // Porta SMTP do gmail

        $phpmail->SMTPSecure = 'ssl'; // Autenticação SMTP
        $phpmail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação

        $phpmail->Username = "vivabem@tipi01.smpsistema.com.br"; // SMTP username
        $phpmail->Password = "Senac@tipi01"; // SMTP password

        $phpmail->IsHTML(true);

        $phpmail->setFrom("vivabem@tipi01.smpsistema.com.br", $nome); // E-mail do remetende enviado pelo method post

        $phpmail->addAddress("vivabem@tipi01.smpsistema.com.br", $assunto);// E-mail do destinatario/*

        $phpmail->Subject = $assunto; // Assunto do remetende enviado pelo method post

        $phpmail->msgHTML(" Nome: $nome <br>
                            E-mail: $email <br>
                            Telefone: $tel <br>
                            Assunto: $assuntoM <br>
                            Mensagem: $mensagem ");

        $phpmail->AlrBody = "Nome: $nome \n
                            E-mail: $email \n
                            Telefone: $tel \n
                            Assunto: $assuntoM \n
                            Mensagem: $mensagem";

        if($phpmail->send()){

			$ok = 1;
            echo "A Mensagem foi enviada com sucesso.";
            

        }else{
			$ok = 2;
            echo "Não foi possível enviar a mensagem. Erro: " .$phpmail->ErrorInfo;
        }

        // ############## RESPOSTA AUTOMATICA
        $phpmailResposta = new PHPMailer\PHPMailer\PHPMailer();
        $phpmailResposta->isSMTP();

        $phpmailResposta->SMTPDebug = 0;
        $phpmailResposta->Debugoutput = 'html';

        $phpmailResposta->Host = "smtp.hostinger.com";
        $phpmailResposta->Port = 465;

        $phpmailResposta->SMTPSecure = 'ssl';
        $phpmailResposta->SMTPAuth = true;

        $phpmailResposta->Username = "vivabem@tipi01.smpsistema.com.br"; // SMTP username
        $phpmailResposta->Password = "Senac@tipi01"; // SMTP password

        $phpmailResposta->IsHTML(true);

        $phpmailResposta->setFrom("vivabem@tipi01.smpsistema.com.br", "SITE VIVA BEM"); // E-mail do remetende enviado pelo method post

        $phpmailResposta->addAddress($email, "CONTATO SITE");// E-mail do destinatario/*

        $phpmailResposta->Subject = "Resposta - " .$assunto; // Assunto do remetende enviado pelo method post

        $phpmailResposta->msgHTML(" Nome: $nome <br>
                            Em breve daremos o retorno - CONTATO SITE VIVA BEM <br>
                            Mensagem: $mensagem"); //Para Windows

        $phpmailResposta->AlrBody = "Nome: $nome \n
                            Em breve daremos o retorno - CONTATO SITE VIVA BEM\n
                            Mensagem: $mensagem"; //Para Linux

        $phpmailResposta->send();

	} // FECHAR O IF


}catch(Exception $e){
     Erro::tratarErro($e);
}

?>

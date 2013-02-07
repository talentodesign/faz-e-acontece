<!DOCTYPE HTML>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>E-mail</title>
</head>

<body>
<?php

      $nome =$_POST['nome'];
      $end=$_POST['endereco'];
      $cidade=$_POST["cidade"];
      $uf=$_POST['uf'];
	    $tel=$_POST['tel'];
      $email=$_POST['email'];
      $site=$_POST['site'];
      $tipo=$_POST['tipo'];
	    $desc=$_POST['msg'];

      if(empty($email))
      {
        $alert = "<div id=\"alert\" class=\"erro\"><b>Preencha o campo com seu email <b></div>";
      }
      

      else
      {
        require('PHPMailer/class.phpmailer.php');

       $mail = new PHPMailer();
       $mail->IsSMTP();
	   $mail->Host = 'smtp.googlemail.com';
       $mail->SMTPAuth = true;
       $mail->Port = 587;
	   $mail->SMTPSecure = 'tls';
       $mail->Username = 'noreplay.talentodesign@gmail.com';
       $mail->Password = 'designer2802';
       $mail->SetFrom('noreply.talentodesign@gmail.com', 'Contato via Site');
       $mail->AddAddress('web@talentodsign.com.br', 'Contato Faz e Acontece');
       $mail->Subject = 'Mensagem Via Contato do Site';

       $body = "
<meta charset='UTF-8'>
           <strong>Nome    : </strong>{$nome} <br />
            <strong>Endereço  : </strong>{$end} <br />
            <strong>Cidade/UF : </strong>{$cidade} / {$uf} <br />
            <strong>Telefone  : </strong>{$tel} <br />
            <strong>E-mail  : </strong>{$email} <br />
            <strong>Site : </strong>{$site} <br />
            <strong>tipo : </strong>{$tipo} <br />
            <strong>Mensagem : </strong>{$desc}";


       $mail->MsgHTML($body);


        $mensagem = "";


       if($mail->Send())
		   echo "Email enviado";

        else
            echo "Falha no Envio";


      }

?>

</body>

</html>


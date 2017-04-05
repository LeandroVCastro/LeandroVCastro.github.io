<?php 

$nome = $_POST["nome"];
$email = $_POST["email"];
$assunto = "Contato pelo site: ".$_POST["assunto"];
$mensagem = $_POST["mensagem"];

$mensagem .= " \n \n Enviado por: $nome";
$mensagem .= " \n Email: $email";


if(mail("leandro.lvc123@gmail.com", $assunto, $mensagem)){ ?>
	<div class="row">
    <div class="col s12 m5">
      <div class="card-panel teal">
        <span class="white-text">
        	Sua mensagem foi enviada com sucesso!!! Obrigado por entrar em contato. Estarei te respondendo o mais rápido possível. Até mais ^^
        </span>
      </div>
    </div>
  </div>
<?php }else{ ?>
	<div class="row">
    <div class="col s12 m5">
      <div class="card-panel teal">
        <span class="white-text">
					Erro ao enviar mensagem. Por favor, tente novamente, ou entre contato através do e-mail ou telefone ^^
        </span>
      </div>
    </div>
  </div>
<?php }?>
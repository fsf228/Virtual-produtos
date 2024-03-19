<?php
$nome      = $_POST["nome"];
$imagem  = $_POST["imagem"];

global $email; //função para validar a variável $email no script todo

$data      = date("d/m/y");                     //função para pegar a data de envio do e-mail
$ip        = $_SERVER['REMOTE_ADDR'];           //função para pegar o ip do usuário
$navegador = $_SERVER['HTTP_USER_AGENT'];       //função para pegar o navegador do visitante
$hora      = date("H:i");                       //para pegar a hora com a função date

//aqui envia o e-mail para você
mail ("flpbr.francisco@gmail.com",                       //email aonde o php vai enviar os dados do form
      "$assunto",
      "Nome: $nome\nData: $data\nIp: $ip\nNavegador: $navegador\nHora: $hora\nImagem: $imagem",
      "From: $email"
     );
if(empty($_POST["variavel"])) //{ echo "campo obrigatório!";}
//aqui são as configurações para enviar o e-mail para o visitante
$site   = "flpbr.francisco@gmail.com";                    //o e-mail que aparecerá na caixa postal do visitante
$titulo = "OBRIGADO";                  //titulo da mensagem enviada para o visitante
$msg    = "$nome, obrigado por entrar em contato conosco, em breve entraremos em contato";

//aqui envia o e-mail de auto-resposta para o visitante
mail("$fsf228@gmail.com",
     "$OBRIGADO",
     "$Estamos sempre as suas ordem",
     "From: $www.emdomicilioff.com.br/hot.html"
    );
	echo '<div align=center>
	Obrigado pelo contato, em breve retornaremos, enquanto isso, d&ecirc; uma ilhadinha em minha p&aacute;gina de neg&oacute;cio, quem sabe voc&ecirc; gosta, clique no link: 
	<a href="http://www.emdomicilioff.com.br/hot.html"> AQUI </a>.</div>';

?>

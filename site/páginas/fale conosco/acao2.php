<?php

$nome = $_POST["nome"];
$email = $_POST["gmail"];
$telefone = $_POST["telefone"];
$assunto = $_POST["assunto"];
$pergunta = $_POST["pergunta"];

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<title>Mensagem enviada</title>

<link rel="stylesheet" href="CSS/style.css">

</head>

<body>

<div class="container">

<h1>Mensagem enviada com sucesso!</h1>

<hr>

<p><strong>Nome:</strong> <?php echo $nome; ?></p>

<p><strong>E-mail:</strong> <?php echo $email; ?></p>

<p><strong>Telefone:</strong> <?php echo $telefone; ?></p>

<p><strong>Assunto:</strong> <?php echo $assunto; ?></p>

<p><strong>Pergunta:</strong></p>

<p><?php echo nl2br($pergunta); ?></p>

<br>

<a href="formulario.php">

<button>Voltar</button>

</a>

</div>

</body>

</html>
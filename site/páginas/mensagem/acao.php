<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação - Etec Zona Leste</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px 0;
        }

        .mensagem {
            width: 500px; /* Mesma largura dos inputs do seu formulário */
            background-color: #f5f5f5;
            padding: 30px;
            border-radius: 8px;
            text-align: left;
        }

        .mensagem p {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #333;
        }

        .mensagem strong {
            color: #c40000;
        }
    </style>
</head>
<body>

<!-- Logo -->
<div class="container p-3 logos">
    <img src="imagens/eteclogo.png" width="120" class="logo1">
    <img src="imagens/cpslogo.png" width="500" class="logo2">
</div>

<!-- Menu -->
<nav class="navbar navbar-expand-lg navbar-custom">
    <div class="container">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link text-white" href="index.html">Início</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="Cursos.html">Cursos</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="CursoAMS.html">Curso AMS</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="formulario.php">Mande sua pergunta</a></li>
        </ul>
    </div>
</nav>

<!-- Conteúdo Principal -->
<main>
    <div class="mensagem">
       <?php
       echo "<p>Olá, <strong>", htmlspecialchars($_GET["nome"]),"</strong></p>";
       echo "<p>De: ", htmlspecialchars($_GET["gmail"]),"</p>";
       echo "<p>Sua pergunta sobre <strong>", htmlspecialchars($_GET["pergunta"]),"</strong> foi enviada com sucesso!</p>";
      ?>
    </div>
</main>

<!-- Rodapé -->
<footer class="rodape">
  <div class="container-footer">
    <div class="coluna">
      <h3>Contato</h3>
      <p>Telefone: (11) 2045-4000</p>
      <p>Email: e211acad@cps.sp.gov.br</p>
    </div>

    <div class="coluna">
      <h3>Endereço</h3>
      <p>Avenida Águia de Haia, 2.633 </p>
      <p>Cidade AE Carvalho, São Paulo - SP</p>
    </div>

    <div class="coluna">
      <h3>Redes Sociais</h3>
      <p>Instagram: @eteczonalesteoficial</p>
      <p>Facebook: Etec da Zona Leste Oficial</p>
      <p>WhatsApp: (11) 91402-3036</p>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Etec Zona Leste</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>

    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #fcfcfc;
        }

        body {
            display: flex;
            flex-direction: column;
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
        }

        main {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 60px 0;
        }

        .formulario {
            background: white;
            padding: 50px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            border: 1px solid #eee;
        }

        .formulario label {
            display: block;
            text-align: left;
            font-size: 1.1rem;
            font-weight: 600;
            color: #444;
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Seletor atualizado para incluir o type="email" */
        .formulario input[type="text"], 
        .formulario input[type="email"] {
            display: block;
            width: 500px;
            padding: 15px;
            margin-bottom: 25px;
            border: 2px solid #eee;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            outline: none;
        }

        .formulario input[type="text"]:focus,
        .formulario input[type="email"]:focus {
            border-color: #c40000;
            box-shadow: 0 0 0 4px rgba(196, 0, 0, 0.1);
        }

        .formulario input[type="Submit"] {
            width: 100%;
            padding: 15px;
            background-color: #c40000;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.2rem;
            font-weight: bold;
            text-transform: uppercase;
            cursor: pointer;
            transition: transform 0.2s, background 0.3s;
        }

        .formulario input[type="Submit"]:hover {
            background-color: #a30000;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(196, 0, 0, 0.3);
        }

        .coluna h3 {
            font-size: 1.3rem;
            font-weight: bold;
            border-bottom: 3px solid rgba(255,255,255,0.2);
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container p-3 logos">
    <img src="imagens/eteclogo.png" width="120" class="logo1">
    <img src="imagens/cpslogo.png" width="500" class="logo2">
</div>

<nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
    <div class="container">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link text-white" href="index.html">Início</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="Cursos.html">Cursos</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="CursoAMS.html">Curso AMS</a></li>
            <li class="nav-item"><a class="nav-link text-white fw-bold" href="formulario.php">Mande sua pergunta</a></li>
            <li class="nav-item"><a class="nav-link text-white" href="duvidas.php">Fale conosco</a></li>
        </ul>
    </div>
</nav>

<main>
    <div class="formulario">
        <form action="acao2.php" method="POST" id="formulario">

    <label for="nome">Seu nome</label>
    <input type="text" name="nome" id="nome" placeholder="Ex: João Silva" required>

    <label for="gmail">Seu e-mail</label>
    <input type="email" name="gmail" id="gmail" placeholder="exemplo@gmail.com" required>

    <label for="telefone">Telefone</label>
    <input type="text" name="telefone" id="telefone" placeholder="(11) 99999-9999" maxlength="15">

    <label for="assunto">Assunto</label>

    <select name="assunto" id="assunto" required>

        <option value="">Selecione...</option>

        <option>Vestibulinho</option>

        <option>Cursos</option>

        <option>Matrícula</option>

        <option>Secretaria</option>

        <option>Outros</option>

    </select>

    <label for="pergunta">Mande sua Pergunta</label>

    <textarea
        name="pergunta"
        id="pergunta"
        rows="6"
        placeholder="Digite sua pergunta..."
        required></textarea>

        <div class="politica">

    <input type="checkbox" id="politica" required>

    <span>
        <label for="politica">
            Concordo com a
            <a href="#">Política de Privacidade</a>.
        </label>
    </span>

</div>

    <input type="submit" value="Enviar Mensagem">

       </form>
    </div>
</main>

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
<script src="JS/formulario.js"></script>

</body>
</html>

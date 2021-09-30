<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Cadastro</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Favicons -->
<link rel="apple-touch-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="https://getbootstrap.com/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.0/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
<p><?php echo $this->session->flashdata('msg');?></p>
<?= form_open('usuario/salvar') ?>
  <form method="post" action="<?= base_url('usuario/salvar')?>">
    <h1 class="h3 mb-3 fw-normal">Cadastro</h1>
    <label for="inputUsuario" class="visually-hidden">Usuário</label>
    <input type="text" name="usuario" id="inputEmail" class="form-control" placeholder="Insira um nome de usuário." required autofocus>
    <label for="inputSenha" class="visually-hidden">Senha</label>
    <input type="password" name="senha_usuario" id="inputSenha" class="form-control" placeholder="Insira uma senha." required>
    <p><?= anchor("usuario/login", "Voltar para a tela de login."); ?></p>
    <button type="submit" class="btn btn-outline-secondary">Enviar</button>
    <button type="reset" class="btn btn-outline-secondary">Limpar</button>
  </form>
  <?= form_close() ?>
</main>


    
  </body>
</html>

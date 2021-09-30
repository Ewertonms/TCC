
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <meta name="google-signin-client_id" content="101266562890-7soaj6uq42qsmuhlnp87r901jhbshvei.apps.googleusercontent.com">
    <title>Login</title>

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
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    
  </script>
  <body class="text-center">
    
<main class="form-signin">
<p><?php echo $this->session->flashdata('msg');?></p>

  <form method="post" action="<?= base_url('usuario/autenticar')?>">
    <img class="mb-4" src="<?= base_url('assets/logo/S.K.T.png') ?>" alt="" width="172" height="157">
    <h1 class="h3 mb-3 fw-normal">Login</h1>
    <label for="inputUsuario" class="visually-hidden">Usuário</label>
    <input type="text" name="nome_usuario" id="inputEmail" class="form-control" placeholder="Insira seu nome de usuário." required autofocus>
    <label for="inputSenha" class="visually-hidden">Senha</label>
    <input type="password" name="senha" id="inputSenha" class="form-control" placeholder="Insira sua senha." required>
    <p><?= anchor("usuario/novo", "Não possui cadastro?"); ?></p>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Lembrar
      </label>
    </div>
    <button type="submit" class="btn btn-outline-secondary">Entrar</button>
    <div class="g-signin2" data-onsuccess="onSignIn"></div>
  </form>
</main>


    
  </body>
</html>

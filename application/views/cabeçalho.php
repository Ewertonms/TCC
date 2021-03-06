
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title><?= $titulo ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/">
    

    

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
    <link href="starter-template.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
   <a class="navbar-brand" href="<?= base_url('skt/paginainicial') ?>">
   <img class="" src="<?= base_url('assets/logo/S.K.T.png') ?>" alt="" width="62" height="62">
  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?= base_url('tematica/listar'); ?>">Tem??ticas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('publicacao/listar') ?>">Publica????es</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?= base_url('arquivo/listar') ?>" tabindex="-1" aria-disabled="true">Documentos</a>
        </li>
      </ul>
      <form class="d-flex">
      <button type="button" class="btn btn-danger"><a class="nav-link" href="<?= base_url('usuario/logoff') ?>">Sair(Logoff)</a></button>
      </form>
    </div>
  </div>
</nav>

<main class="container">
<style> 
a { color: white; text-decoration: none}
a:hover {color: white}
a:active {color: black} 
body { background-color: #9c9c9c}
</style>
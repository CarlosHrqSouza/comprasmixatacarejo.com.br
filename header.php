<!DOCTYPE html>
<?php include_once('dados.php'); ?>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $empresa; ?></title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">

    <!-- SEO META TAGS -->
    <meta property="og:title" content="<?= $titulo_pagina; ?>" />
    <meta property="og:description" content="<?= $descricao_pagina; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $empresa; ?>" />
    <meta property="og:image" content="assets/images/og-img.jpg">
    <meta property="og:image:type" content="image/jpeg">
    <meta property="og:image:width" content="800">
    <meta property="og:image:height" content="600">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta http-equiv="content-language" content="pt-BR" />
    <meta name="author" content="<?= $empresa; ?>" />
    <meta name="contact" content="<?= $email; ?>" />
    <meta name="copyright" content="Copyright (c) <?= date("Y"); ?> - <?= $empresa; ?>." />
    <meta name="description" content="<?= $descricao; ?>" />
    <meta name="keywords" content="<?= $keywords; ?>" />
    <meta name="resource-type" content="website" />

    <!-- ARQUIVOS CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css?v=<?= time() ?>">
</head>
<header class="sticky-top pt-4" id="header">
    <section class="container bg-white rounded-3 p-3 shadow">
        <div class="row">
            <div class="col-6 col-lg-auto">
                <a href="">
                    <img src="assets/images/logo.png" width="360" height="82" alt="<?= $empresa; ?>" class="img-fluid img-logo">
                </a>
            </div>
            <div class="col-lg-auto mx-auto d-none d-lg-block">
                <nav>
                    <ul class="nav">
                        <li class="nav-item"><a href="#como-participar" class="nav-link">Como participar</a></li>
                        <li class="nav-item"><a href="#premios" class="nav-link">Prêmios</a></li>
                        <li class="nav-item"><a href="#marcas" class="nav-link">Marcas Participantes</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-6 col-lg-auto text-end">
                <a href="" class="btn btn-secondary">Buscar Cupons</a>
            </div>
        </div>
    </section>
</header>

<body>
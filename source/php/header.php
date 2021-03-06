<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/dist/css/style.css">
    <title>Bikcraft</title>
    <?php wp_head(); ?>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-md fixed-top bg-yellow">
        <div class="container">
            <a class="navbar-brand" href="<?php echo get_site_url();?>" title="Bikcraft">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/img/logo.png" class="img-fluid ml-md-5" alt="Bikcraft" title="Bikcraft">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav m-auto text-center mt-3 mt-md-0">
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="<?php echo get_site_url();?>/sobre" title="Sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="<?php echo get_site_url();?>/produtos" title="Produtos">Produtos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="<?php echo get_site_url();?>/portfolio" title="Portfólio">Portfólio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-uppercase" href="<?php echo get_site_url();?>/contato" title="Contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
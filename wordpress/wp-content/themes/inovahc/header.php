<!DOCTYPE html>
<html lang="pt" xml:lang="pt">
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- INÍCIO DOS METAS -->
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="url" content="<?php url(); ?>">
<meta name="language" content="Portugues">
<meta name="description" content="<?php if(is_home() || is_page()){bloginfo('description');}else{the_excerpt();} ?>">
<meta name="keywords" content="<?php bloginfo('description'); ?>">
<meta name="reply-to" content="mario@alpacaweb.com.br">
<meta name="copyright" content="">
<meta name="category" content="Internet">
<meta name="Robots" content="Index,Follow">
<meta name="author" content="Alpaca Web">
<meta property="fb:admins" content="mario.mazen"/>
<meta property="og:site_name" content="<?php bloginfo('name'); ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="<?php if(is_home()){bloginfo('name');}else{the_title();} ?>"/>
<meta property="og:description" content="<?php if(is_home() || is_page()){bloginfo('description');}else{the_excerpt();} ?>"/>
<meta property="og:url" content="<?php if(is_home()){url();}else{the_permalink(); }?>"/>
<meta property="og:image" content="<?php tu(); ?>/img/og-image.jpg"/>
<meta name="HandheldFriendly" content="True" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- FIM DOS METAS -->
<link rel="shortcut icon" href="<?php tu(); ?>/img/icon.png" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php tu(); ?>/style.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php tu(); ?>/css/style.css" type="text/css" media="all">
<!-- FACEBOOK -->
<!-- FACEBOOK -->
<!-- GOOGLE - COLOCAR ANALYTICS -->
<!-- GOOGLE -->
</head>
<body>
<!-- Carrega os SVGs -->
    <?php get_template_part('partes/_svg', '_svg'); ?>

    <div id="mainContent" data-page="<?php echo isset($current_page)?$current_page:''; ?>" > 

        <header class="top-bar" id="topBar">
                <!-- Carrega o menu -->
                <?php get_template_part('partes/_menu-nav', '_menu-nav'); ?>
        </header>
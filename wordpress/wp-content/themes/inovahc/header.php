<!DOCTYPE html>
<html lang="pt" xml:lang="pt">
<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- INÍCIO DOS METAS -->
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="url" content="<?php bloginfo('url'); ?>">
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
<meta property="og:url" content="<?php if(is_home()){bloginfo('url');}else{the_permalink(); }?>"/>
<meta property="og:image" content="<?php bloginfo('template_url'); ?>/img/og-image.jpg"/>
<meta name="HandheldFriendly" content="True" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<!-- FIM DOS METAS -->
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/icon.png" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600&family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/less.css" type="text/css" media="all">
<!-- FACEBOOK -->
<!-- FACEBOOK -->
<!-- GOOGLE - COLOCAR ANALYTICS -->
<!-- GOOGLE -->
</head>
<body <?php body_class(); ?>>
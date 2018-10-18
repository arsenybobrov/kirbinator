<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>

    <meta name="og:type" content="article">
    <meta name="og:title" content="<?php echo $site->title()->html() ?>">
    <meta name="og:description" content="<?php echo $site->description()->html() ?>">
    <?php if ($image = $site->ogimage()->toFile()): ?>
    <meta name="og:image" content="<?php echo $site->ogimage()->url() ?>">
    <?php endif ?>
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo $site->title()->html() ?>">
    <meta property="og:description" content="<?php echo $site->description()->html() ?>">
    <?php if ($image = $site->ogimage()->toFile()): ?>
    <meta property="og:image" content="<?php echo $site->ogimage()->url() ?>">
    <?php endif ?>
    <meta name="twitter:card" content="<?php echo $site->description()->html() ?>">
    <meta name="twitter:title" content="<?php echo $site->title()->html() ?>">
    <?php if ($image = $site->ogimage()->toFile()): ?>
    <meta name="twitter:image" content="<?php echo $site->ogimage()->url() ?>">
    <?php endif ?>

    <meta name="description" content="<?php echo $site->description()->html() ?>">

    <meta name="robots" content="index, follow">
    <meta content="3 days" name="revisit-after">

    <meta name="format-detection" content="telephone=no">
    <meta name="theme-color" content="#fff">
    <meta name="robots" content="index,follow">
    <meta name="google" content="notranslate">
    <meta name="google" content="nositelinkssearchbox">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">

    <!--https://realfavicongenerator.net/-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/manifest.json">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#000000">
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico?v=1">
    <meta name="msapplication-config" content="assets/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Baguettebox CSS -->
    <link href="assets/vendor/baguettebox/baguetteBox.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/main.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
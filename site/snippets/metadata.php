<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <?php
    $title = $page->seotitle()->or($page->title());
    $description = $page->seodescription();
    $image = url('/assets/images/georg-obermayr-sharing.jpg');
  ?>

  <!-- Page settings -->
  <title><?php echo $title . ' | ' . $site->title()->html() ?></title>
  <link href="<?php echo $page->url() ?>" rel="canonical" />
  <link href="<?php echo url('/assets/images/favicon.ico'); ?>" rel="shortcut icon" type="image/x-icon" />

  <!-- SEO settings -->
  <meta content="<?php echo $description ?>" name="description" />
  <meta content="<?php echo $image ?>" name="image" />
  <meta content="<?php echo $title ?>" name="subject"/>
  <meta content="<?php echo $site->title()->html() ?>" name="author" />
  <meta content="<?php echo '© ' . $site->title()->html() ?>" name="copyright" />
  <meta content="en_US" name="language" />
  <meta content="<?php echo $page->modified('d/m/Y H:i') ?>" name="last-modified" />
  <meta content="true" name="handheldfriendly" />
  <meta content="notranslate" name="google" />
  <meta content="index, follow" name="robots" />

  <!-- OpenGraph settings -->
  <meta content="<?php echo $site->title() ?>" property="og:site_name" />
  <meta content="<?php echo $title ?>" property="og:title" />
  <meta content="<?php echo $description ?>" property="og:description" />
  <meta content="<?php echo $image ?>" property="og:image" />
  <meta content="<?php echo $page->url() ?>" property="og:url" />

  <!-- Twitter settings -->
  <meta content="summary_large_image" name="twitter:card" />
  <meta content="<?php echo $title ?>" name="twitter:title" />
  <meta content="<?php echo $description ?>" name="twitter:description" />
  <meta content="<?php echo $site->title() ?>" name="twitter:image:alt" />

  <?php echo css('assets/css/main.min.css') ?>

</head>

<body class="<?php echo 'body body--' . str_replace('.', '-', $page->template()) ?>">

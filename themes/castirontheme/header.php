<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <!-- header.php -->
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />
 
  <title><?php wp_title(' - ', 'echo', 'right'); ?></title>

  <?php wp_head(); ?>
  <?php get_template_part( 'partials/favicons' ); ?>

</head>

<body id="body" <?php body_class(); ?> >
  <?php wp_body_open(); ?>

  <div class="page-wrapper">
    <header class="header">
      <div class="content">
        <?php // get_template_part( 'partials/header-nav' ); ?>

      </div>
    </header>

    <main id="main" class="main">
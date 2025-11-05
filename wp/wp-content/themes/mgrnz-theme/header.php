<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="site-header" style="background:#000; color:#fff; padding:1rem 0; border-bottom:1px solid #222;">
    <div class="container" style="max-width:1100px; margin:0 auto; display:flex; justify-content:space-between; align-items:center;">
      <a href="<?php echo esc_url(home_url('/')); ?>" class="site-title" style="font-weight:700; font-size:1.25rem; color:#fff; text-decoration:none;">
        <?php bloginfo('name'); ?>
      </a>
      <?php if ( has_nav_menu('primary') ) : ?>
        <nav class="main-nav">
          <?php
            wp_nav_menu(array(
              'theme_location' => 'primary',
              'container' => false,
              'menu_class' => 'menu',
              'fallback_cb' => false
            ));
          ?>
        </nav>
      <?php endif; ?>
    </div

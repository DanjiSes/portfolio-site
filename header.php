<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio-den
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <div class="wrapper">
      <div class="fixed__fon"></div>
      <section class="portfolio">

        <div class="sidebar">
          <div class="sidebar__name">
            <p class="name"><a href="/"><?php bloginfo('name') ?></a></p>
            <p class="name__descr"><?php bloginfo('description') ?></p>
          </div>
          <div class="sidebar__contact">
            <a href="https://vk.com/write378269517" target="_blank"><i class="fa fa-vk"></i>vk.com/savchenko_dev</a><a href="https://www.instagram.com/danil.savchenko.s/" target="_blank"><i class="fa fa-instagram"></i>danil.savchenko.s</a><a href="https://telegram.me/daniel_savchenko" target="_blank"><i class="fa fa-telegram"></i>@daniel_savchenko</a></div>
          <div class="sidebar__copyrite">&#169; <span><?php echo date('Y'); ?></span></div>
        </div>
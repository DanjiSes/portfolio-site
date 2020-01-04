<?php 
get_header();
?>
    <div class="wrapper">
      <div class="fixed__fon"></div>
      <section class="portfolio">

        <div class="sidebar">
          <div class="sidebar__name">
            <p class="name"><?php bloginfo('name') ?></p>
            <p class="name__descr"><?php bloginfo('description') ?></p>
          </div>
          <div class="sidebar__contact"><a href="mailto:danil.savchenko.dev@gmail.com" target="_blank"><i class="fa fa-envelope"></i>danil.savchenko.dev@gmail.com</a><a href="https://vk.com/write378269517" target="_blank"><i class="fa fa-vk"></i>vk.com/savchenko_dev</a><a href="https://www.instagram.com/danil.savchenko.s/" target="_blank"><i class="fa fa-instagram"></i>danil.savchenko.s</a><a href="https://telegram.me/daniel_savchenko" target="_blank"><i class="fa fa-telegram"></i>@daniel_savchenko</a></div>
          <div class="sidebar__copyrite">&#169; <span></span></div>
        </div>

        <h1 class="portfolio__title">портфолио</h1>
        <ul class="portfolio__list">

          <?php
          if ( have_posts() ) :

            if ( is_home() && ! is_front_page() ) :
              ?>
              <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
              </header>
              <?php
            endif;

            /* Start the Loop */
            while ( have_posts() ) :
              the_post();

              ?>

              <li class="portfolio__item">
                <a class="portfolio__img" href="<?php the_permalink(); ?>" target="_blank">
                  <img src="<?php the_post_thumbnail_url(); ?>" />
                </a>
                <div class="descr"><a href="<?php the_permalink(); ?>" target="_blank">Посмотреть</a>
                  <p><?php the_excerpt(); ?></p><b>&laquo;<span><?php the_title(); ?></span>&raquo;</b>
                </div>
              </li>

              <?php

            endwhile;

            // the_posts_navigation();

          else :

            get_template_part( 'template-parts/content', 'none' );

          endif;
          ?>

        </ul>
      </section>
    </div>

<?php
get_footer();

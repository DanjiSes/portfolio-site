<?php 
get_header();
?>

        <h1 class="portfolio__title">портфолио</h1>
        <ul class="portfolio__list">

          <?php
          if ( have_posts() ) :

            /* Start the Loop */
            while ( have_posts() ) :
              the_post();

              ?>

              <li class="portfolio__item">
                <a class="portfolio__img" href="<?php the_permalink(); ?>">
                  <img src="<?php the_post_thumbnail_url(); ?>" />
                </a>
                <div class="descr">
                  <a href="<?php the_permalink(); ?>">Посмотреть</a>
                  <p><?php the_excerpt(); ?></p><b>&laquo;<span><?php the_title(); ?></span>&raquo;</b>
                </div>
              </li>

              <?php

            endwhile;

          else :

            get_template_part( 'template-parts/content', 'none' );

          endif;
          ?>

        </ul>

<?php
get_footer();

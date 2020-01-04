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
          <li class="portfolio__item"><a class="portfolio__img" href="/portfolio/sortd" target="_blank"><img src="/portfolio/sortd/screen.png" alt="SORTD"/></a>
            <div class="descr"><a href="portfolio/sortd" target="_blank">Посмотреть</a>
              <p>Верстка</p><b>&laquo;<span>SORTD</span>&raquo;</b>
            </div>
          </li>
          <li class="portfolio__item"><a class="portfolio__img" href="/portfolio/otibryu" target="_blank"><img src="/portfolio/otibryu/screen.png" alt="Отибрю"/></a>
            <div class="descr"><a href="portfolio/otibryu" target="_blank">Посмотреть</a>
              <p>Верстка</p><b>&laquo;<span>Отибрю</span>&raquo;</b>
            </div>
          </li>
          <li class="portfolio__item"><a class="portfolio__img" href="/portfolio/engineering-construction-pro" target="_blank"><img src="/portfolio/engineering-construction-pro/screen.png" alt="Engineering construction PRO"/></a>
            <div class="descr"><a href="portfolio/engineering-construction-pro" target="_blank">Посмотреть</a>
              <p>Верстка</p><b>&laquo;<span>Engineering construction PRO</span>&raquo;</b>
            </div>
          </li>
          <li class="portfolio__item"><a class="portfolio__img" href="/portfolio/unity" target="_blank"><img src="/portfolio/unity/screen.png" alt="Unity"/></a>
            <div class="descr"><a href="portfolio/unity" target="_blank">Посмотреть</a>
              <p>Верстка</p><b>&laquo;<span>Unity</span>&raquo;</b>
            </div>
          </li>
          <li class="portfolio__item"><a class="portfolio__img" href="/portfolio/zest" target="_blank"><img src="/portfolio/zest/screen.png" alt="Zest"/></a>
            <div class="descr"><a href="portfolio/zest" target="_blank">Посмотреть</a>
              <p>Верстка</p><b>&laquo;<span>Zest</span>&raquo;</b>
            </div>
          </li>
        </ul>
      </section>
    </div>

<?php
get_footer();

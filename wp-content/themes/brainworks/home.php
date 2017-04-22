<?php /*
<?php get_header(); ?>

<div class="tiny-space"></div>
<?php get_header(); ?>
<?php get_template_part('loops/content-2', get_post_format()); ?>
<?php get_footer(); ?>

<?php get_footer(); ?>

*/ ?>

<?php get_header(); ?>

<header class="header">
  <div class="container">
    <a href="#" class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" class="logo-image">
    </a>
    <nav class="nav">
      <ul class="menu">
        <li class="menu-item menu-current"><a href="#" class="menu-link">Главная</a></li>
        <li class="menu-item"><a href="#" class="menu-link">Услуги</a></li>
        <li class="menu-item"><a href="#" class="menu-link">Прайс</a></li>
        <li class="menu-item"><a href="#" class="menu-link">Портфолио</a></li>
        <li class="menu-item"><a href="#" class="menu-link">Отзывы</a></li>
        <li class="menu-item"><a href="#" class="menu-link">Блог</a></li>
        <li class="menu-item"><a href="#" class="menu-link">Контакты</a></li>
      </ul>
    </nav>
    <ul class="lang">
      <li class="lang-item"><a href="#" class="lang-link"></a></li>
      <li class="lang-item"><a href="#" class="lang-link"></a></li>
      <li class="lang-item"><a href="#" class="lang-link"></a></li>
    </ul>
    <a href="tel:+380957603099">+38 (095) 760-30-99</a>
    <a href="tel:+380687668898">+38 (068) 766-88-98</a>
    <a href="#" class="button">Заказать звонок</a>
    <ul class="social">
      <li class="social-item"><a href="#" class="social-link social-vk"></a></li>
      <li class="social-item"><a href="#" class="social-link social-fb"></a></li>
      <li class="social-item"><a href="#" class="social-link social-inst"></a></li>
    </ul>
  </div>
</header>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>О перманентном макияже</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eius, voluptatum! Aperiam aspernatur atque cum obcaecati, officiis perferendis sapiente velit veritatis? Ad alias, atque commodi consequuntur delectus deserunt doloribus dolorum enim excepturi exercitationem fugiat illum impedit inventore ipsa labore, laudantium magnam nobis nulla numquam omnis repellendus reprehenderit sint suscipit voluptas!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, asperiores dolores harum illum incidunt ipsa, libero maiores nulla quia ratione, rerum sit suscipit temporibus ut?</p>
        <a href="#" class="button">Подробнее</a>
        <a href="#" class="button">Портфолио</a>
      </div>
      <div class="col-lg-6">
        <img src="<?php echo get_template_directory_uri() ?>/images/about-permanent-make-up.jpg" alt="">
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <h2><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aut blanditiis deleniti ducimus ea facilis maxime, nihil optio praesentium quibusdam quidem similique suscipit tempore veniam veritatis? At dolores eaque eos, ipsam iure iusto labore laborum minima obcaecati omnis optio pariatur perferendis quaerat! Accusantium ad, ducimus eligendi enim ratione reiciendis reprehenderit!</em></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <img src="<?php echo get_template_directory_uri() ?>/images/elena-shapoval.jpg" alt="Елена Шаповал">
        <a href="#" class="">
          <img src="<?php echo get_template_directory_uri() ?>/images/" alt="facebook">
        </a>
      </div>
      <div class="col-lg-6">
        <h4>О мастере</h4>
        <h2>Елена Шаповал</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore dolores error impedit neque quidem rerum sequi, sint sunt veritatis vero. Aperiam deleniti dignissimos error incidunt, recusandae ut vitae? Accusantium consectetur delectus excepturi, facilis fugit inventore quaerat quisquam saepe suscipit veritatis. Dolore esse harum iste minima officiis pariatur sequi? Ab asperiores aspernatur assumenda cupiditate debitis dicta earum eligendi esse excepturi facere laudantium magni modi nobis, pariatur possimus quidem quo repudiandae soluta ut veniam. Accusamus consequuntur cumque laboriosam libero quaerat quisquam quo sequi ullam vel voluptate. Beatae cumque deleniti distinctio dolorem magni nisi odit officiis, omnis, quae quia, quo sunt totam ut.</p>
        <a href="#" class="button">Подробнее</a>
      </div>
    </div>
  </div>
</section>
<section class="section advantages">
  <div class="container">
    <h2>Преимущества</h2>
    <p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium alias atque consequuntur dolor eos est hic, ipsa pariatur porro quam qui quo suscipit velit? Blanditiis consectetur debitis distinctio, ducimus, esse est exercitationem labore libero minus neque nobis praesentium quibusdam saepe sint soluta tenetur voluptatibus? Adipisci aspernatur facere officiis quam voluptatum?</em></p>
    <ul class="adv">
      <li class="adv-item col-lg-3"><span class="adv-header"><img src="<?php echo get_template_directory_uri() ?>/images/" alt="Adv 1" class="adv-image"></span>
        <p>Lorem ipsum dolor sit amet.</p>
      </li>
      <li class="adv-item col-lg-3"><span class="adv-header"><img src="<?php echo get_template_directory_uri() ?>/images/" alt="Adv 2" class="adv-image"></span>
        <p>Lorem ipsum dolor sit amet.</p>
      </li>
      <li class="adv-item col-lg-3"><span class="adv-header"><img src="<?php echo get_template_directory_uri() ?>/images/" alt="Adv 3" class="adv-image"></span>
        <p>Lorem ipsum dolor sit amet.</p>
      </li>
      <li class="adv-item col-lg-3"><span class="adv-header"><img src="<?php echo get_template_directory_uri() ?>/images/" alt="Adv 4" class="adv-image"></span>
        <p>Lorem ipsum dolor sit amet.</p>
      </li>
    </ul>
  </div>
</section>
<section class="section services">
  <div class="container">
    <h2>Услуги</h2>
    <ul class="service">
      <li class="service-item col-lg-3">
        <h4 class="service-title">Lorem ipsum dolor sit amet.</h4>
        <img src="<?php echo get_template_directory_uri() ?>/images/service-1.jpg" alt="service 1" class="service-image"></li>
      <li class="service-item col-lg-3">
        <h4 class="service-title">Lorem ipsum dolor sit amet.</h4>
        <img src="<?php echo get_template_directory_uri() ?>/images/service-2.jpg" alt="service 2" class="service-image"></li>
      <li class="service-item col-lg-3">
        <h4 class="service-title">Lorem ipsum dolor sit amet.</h4>
        <img src="<?php echo get_template_directory_uri() ?>/images/service-3.jpg" alt="service 3" class="service-image"></li>
      <li class="service-item col-lg-3">
        <h4 class="service-title">Lorem ipsum dolor sit amet.</h4>
        <img src="<?php echo get_template_directory_uri() ?>/images/service-4.jpg" alt="service 4" class="service-image"></li>
    </ul>
    <a href="#" class="button">Заказать</a>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Перманентный макияж именно для вас, если:</h2>
    <ul>
      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, quia?</li>
      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, dolores.</li>
      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, rem!</li>
      <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, sapiente!</li>
    </ul>
  </div>
</section>

<section class="section price">
  <div class="container">
    <h2>Прайс</h2>
    <div class="row">
      <div class="col-lg-6">
        <h3>Lorem ipsum dolor sit amet.</h3>
        <ul>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <h3>Lorem ipsum dolor sit amet.</h3>
        <ul>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <h3>Lorem ipsum dolor sit amet.</h3>
        <ul>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <h3>Lorem ipsum dolor sit amet.</h3>
        <ul>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
          <li>Lorem ipsum dolor sit amet.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section portfolio">
  <div class="container">
    <h2>Портфолио</h2>
    <div class="row">
      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri() ?>/images/portfolio-1.jpg" alt="portfolio 1">
      </div>
      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri() ?>/images/portfolio-1.jpg" alt="portfolio 2">
      </div>
      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri() ?>/images/portfolio-1.jpg" alt="portfolio 3">
      </div>
      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri() ?>/images/portfolio-1.jpg" alt="portfolio 1">
      </div>
      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri() ?>/images/portfolio-1.jpg" alt="portfolio 2">
      </div>
      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri() ?>/images/portfolio-1.jpg" alt="portfolio 3">
      </div>
    </div>
    <a href="#" class="button">Смотреть все работы</a>
  </div>
</section>

<section class="section offers">
  <div class="container">
    <h2>Специальные предложения</h2>
    <div class="row">
      <div class="col-lg-4">Скоро <b>День рождения?</b></div>
      <div class="col-lg-4"><img src="<?php echo get_template_directory_uri() ?>/images/" alt="offers 1"></div>
      <div class="col-lg-4">Поулчи <b>скидку -25%</b> на перманентый макияж!</div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p>
          * Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>
          * Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque?
        </p>
        <a href="#" class="button">Заказать</a>
      </div>
    </div>
  </div>
</section>

<section class="section-reviews">
  <div class="container">
    <h2>Отзывы</h2>
    <ul class="review">
      <li class="review-item">
        <div class="review-header">
          <div class="review-avatar">
            <a href="#" class="review-link"></a>
          </div>
          <h4 class="review-user">Valentina Bereza</h4>
        </div>
        <div class="review-content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus dolorem labore maiores quam rem repellendus?</p>
        </div>
      </li>
    </ul>
  </div>
</section>

<section class="section certificates">
  <div class="container">
    <h2>Сертификаты</h2>
    <ul class="row certificate">
      <li class="certificate-item col-lg-3"><img src="<?php echo get_template_directory_uri() ?>/images/certificate-3.jpg" alt="certificate 1" class="certificate-image"></li>
      <li class="certificate-item col-lg-3"><img src="<?php echo get_template_directory_uri() ?>/images/certificate-3.jpg" alt="certificate 2" class="certificate-image"></li>
      <li class="certificate-item col-lg-3"><img src="<?php echo get_template_directory_uri() ?>/images/certificate-3.jpg" alt="certificate 3" class="certificate-image"></li>
      <li class="certificate-item col-lg-3"><img src="<?php echo get_template_directory_uri() ?>/images/certificate-3.jpg" alt="certificate 4" class="certificate-image"></li>
    </ul>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A accusamus, ad dolore fugiat id pariatur quam, repellat sapiente sit unde voluptatibus voluptatum. Aut autem debitis dolor et, eveniet explicabo modi quas quisquam rerum ullam unde.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <h4>Блог</h4>
    <h2>Интересная и полезная информация для каждого</h2>
    <ul class="blog-list row">
      <li class="blog-item col-lg-4">
        <div class="blog-header"><img src="<?php echo get_template_directory_uri() ?>/images/blog-image-1.jpg" alt="blog preview 1" class="blog-preview"></div>
        <div class="blog-category">Уход за лицом</div>
        <h3 class="blog-title"><a class="blog-link" href="#">Самое интересное название темы об уходе за лицом</a></h3>
        <span class="blog-date">28 декабря 2016</span>
      </li>
      <li class="blog-item col-lg-4">
        <div class="blog-header"><img src="<?php echo get_template_directory_uri() ?>/images/blog-image-1.jpg" alt="blog preview 2" class="blog-preview"></div>
        <div class="blog-category">Уход за лицом</div>
        <h3 class="blog-title"><a class="blog-link" href="#">Самое интересное название темы об уходе за лицом</a></h3>
        <span class="blog-date">28 декабря 2016</span>
      </li>
      <li class="blog-item col-lg-4">
        <div class="blog-header"><img src="<?php echo get_template_directory_uri() ?>/images/blog-image-1.jpg" alt="blog preview 2" class="blog-preview"></div>
        <div class="blog-category">Уход за лицом</div>
        <h3 class="blog-title"><a class="blog-link" href="#">Самое интересное название темы об уходе за лицом</a></h3>
        <span class="blog-date">28 декабря 2016</span>
      </li>
    </ul>

  </div>
</section>

<div class="google-map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d898.4567915155752!2d30.51756608775668!3d50.43701090895902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cefdcd01f719%3A0x56e98ee8aa2bfe5e!2z0LLRg9C70LjRhtGPINCo0L7RgtCwINCg0YPRgdGC0LDQstC10LvRliwgMzQsINCa0LjRl9CyLCDQo9C60YDQsNC40L3QsA!5e0!3m2!1sru!2sru!4v1492517485545" width="100%" height="450" allowfullscreen></iframe>
</div>

<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <h2>Контакты</h2>
        <address>
          г.Киев <br>
          ул. Шота Руставели, 34 <br>
          тел. <a href="tel:+380957603099">095 760 30 99</a><br>
          тел. <a href="tel:+380687668898">068 766 88 98</a>
        </address>
      </div>
      <div class="col-lg-6">
        <form action="" class="form">
          <div class="form-row">
            <input type="text" name="contact_name" placeholder="Введите имя">
          </div>
          <div class="form-row">
            <input type="tel" name="contact_tel" placeholder="введите номер телефона">
          </div>
          <button type="submit" class="button">Оставить заявку</button>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto, voluptate.</p>
        </form>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <div class="container">
    <p>Сайт разработан студией дизайна BlueDiamondiev и <a href="http://brainworks.com.ua/" target="_blank">BRAIN WORKS</a> &copy; 2017 | Все права защищены</p>
  </div>
</footer>


<?php get_footer(); ?>

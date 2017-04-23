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
    <div class="row">
      <div class="col-lg-9">
        <div class="logo-nav">
          <a href="#" class="logo header-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" class="logo-image">
          </a>
          <nav class="nav header-nav">
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
        </div>
      </div>
      <div class="col-lg-3">
        <ul class="lang">
          <li class="lang-item"><a href="#" class="lang-link"></a></li>
          <li class="lang-item"><a href="#" class="lang-link"></a></li>
          <li class="lang-item"><a href="#" class="lang-link"></a></li>
        </ul>
        <div class="">
          <a href="tel:+380957603099">+38 (095) 760-30-99</a><br>
          <a href="tel:+380687668898">+38 (068) 766-88-98</a>
          <a href="#" class="btn btn-default btn-inverse btn-small">Заказать звонок</a>
        </div>
        <ul class="social">
          <li class="social-item"><a href="#" class="social-link social-vk"></a></li>
          <li class="social-item"><a href="#" class="social-link social-fb"></a></li>
          <li class="social-item"><a href="#" class="social-link social-inst"></a></li>
        </ul>
      </div>
    </div>
  </div>
</header>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="diamond-wrapper">
          <span class="diamond"></span>
        </div>
        <div class="section-header">
          <h2 class="section-title">О перманентном макияже</h2>
        </div>
        <p>Перманентный макияж - это стойкий макияж, который позволяет усовершенствовать ваш природный образ, это бережно и натурально для лица, это комфортно и безопасно для вас.</p>
        <p>Позвольте себе выглядеть потрясающе каждый день 24 часа в сутки вне зависимости от обстоятельств.</p>
        <div class="row">
          <div class="col-lg-6">
            <a href="#" class="btn btn-default btn-block">Подробнее</a>
          </div>
          <div class="col-lg-6">
            <a href="#" class="btn btn-default btn-block">Портфолио</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <img src="<?php echo get_template_directory_uri() ?>/images/about-permanent-make-up.jpg" alt="">
      </div>
    </div>
    <div class="row section">
      <div class="col-lg-12">
        <h2><em>Профессиональный перманентный макияж направленный на усовершенствование деталей вашего лица и устранение недостатков, путем микропигментирования кожи: «и будто сама природа позаботилась о вашей красоте» </em></h2>
      </div>
    </div>
    <div class="row section">
      <div class="col-lg-6">
        <img src="<?php echo get_template_directory_uri() ?>/images/elena-shapoval.jpg" alt="Елена Шаповал">
        <a href="#" class="social-link social-fb-big"></a>
      </div>
      <div class="col-lg-6 text-right">
        <div class="diamond-wrapper">
          <span class="diamond"></span>
        </div>
        <h4 class="section-sub-header">О мастере</h4>
        <div class="section-header">
          <h2 class="section-title">Елена Шаповал</h2>
        </div>
        <p>Елена Шаповал - дипломированный мастер по перманентному макияжу высшей квалификации, сертифицированный тренер международного класса, преподаватель подготовки специалистов экстра-класса школы BeProfessional, серебряный призер Чемпионата Украины по перманентному макияжу «PM AWARD 2016» в номинации «Перманентный макияж бровей в комбинированной технике: волоски и растушёвка»</p>
        <a href="#" class="btn btn-default">Подробнее</a>
      </div>
    </div>
  </div>
</section>
<section class="section advantages">
  <div class="container text-center">
    <div class="diamond-wrapper">
      <span class="diamond"></span>
    </div>
    <div class="section-header">
      <h2 class="section-title">Преимущества</h2>
    </div>
    <p><em>Полупостоянный макияж – наносится исключительно профессионально и не должен бросаться во внимание окружающим – о качественно выполненной работе знаете только вы и ваш мастер</em></p>
    <ul class="adv">
      <li class="adv-item col-md-6 col-lg-3"><span class="adv-header"><img src="<?php echo get_template_directory_uri() ?>/images/advantage/advantage-1.jpg" alt="Adv 1" class="adv-image"></span>
        <p>Сохранность вашей естественной красоты</p>
      </li>
      <li class="adv-item col-md-6 col-lg-3"><span class="adv-header"><img src="<?php echo get_template_directory_uri() ?>/images/advantage/advantage-2.jpg" alt="Adv 2" class="adv-image"></span>
        <p>Гарантия безопасности здоровья</p>
      </li>
      <li class="adv-item col-md-6 col-lg-3"><span class="adv-header"><img src="<?php echo get_template_directory_uri() ?>/images/advantage/advantage-3.jpg" alt="Adv 3" class="adv-image"></span>
        <p>Технические инновации</p>
      </li>
      <li class="adv-item col-md-6 col-lg-3"><span class="adv-header"><img src="<?php echo get_template_directory_uri() ?>/images/advantage/advantage-4.jpg" alt="Adv 4" class="adv-image"></span>
        <p>Лицензированные пигменты</p>
      </li>
    </ul>
  </div>
</section>
<section class="section services">
  <div class="container text-center">
    <div class="diamond-wrapper">
      <span class="diamond"></span>
    </div>
    <div class="section-header">
      <h2 class="section-title">Услуги</h2>
    </div>
    <ul class="service row">
      <li class="service-item col-lg-3">
        <h4 class="service-title">Перманентный макияж губ</h4>
        <img src="<?php echo get_template_directory_uri() ?>/images/service/service-1.jpg" alt="service 1" class="service-image"></li>
      <li class="service-item col-lg-3">
        <h4 class="service-title">Перманентный макияж бровей</h4>
        <img src="<?php echo get_template_directory_uri() ?>/images/service/service-2.jpg" alt="service 2" class="service-image"></li>
      <li class="service-item col-lg-3">
        <h4 class="service-title">Перманентный макияж век</h4>
        <img src="<?php echo get_template_directory_uri() ?>/images/service/service-3.jpg" alt="service 3" class="service-image"></li>
      <li class="service-item col-lg-3">
        <h4 class="service-title">Косметология. Уход за лицом</h4>
        <img src="<?php echo get_template_directory_uri() ?>/images/service/service-4.jpg" alt="service 4" class="service-image"></li>
    </ul>
    <a href="#" class="btn btn-default">Заказать</a>
  </div>
</section>

<section class="section">
  <div class="container text-center">
    <div class="diamond-wrapper">
      <span class="diamond"></span>
    </div>
    <div class="section-header">
      <h2 class="section-title">Перманентный макияж именно для вас, если:</h2>
    </div>
    <ul class="text-left">
      <li>если от природы присутствует асимметрия в деталях на лице, которую хотелось бы скорректировать</li>
      <li>если хочется усилить цветовые акценты на губах или бровях</li>
      <li>если нужно придать густоту ресницам и сделать глаза выразительнее</li>
      <li>если вы, также как и я, считаешь, что стойкий макияж должен выглядеть натурально, перманентный макияж – это основа под макияж, а не его замена.</li>
    </ul>
  </div>
</section>

<section class="section price">
  <div class="container text-center">
    <div class="diamond-wrapper">
      <span class="diamond"></span>
    </div>
    <div class="section-header">
      <h2 class="section-title section-tittle--light">Прайс</h2>
    </div>
    <div class="row">
      <div class="col-lg-6">
        <h3>перманентный макияж губ</h3>
        <ul class="">
          <li>Заполнение цветом в стиле natural 2500 грн</li>
          <li>Заполнение цветом (эффект 3D) 2700 грн</li>
          <li>Коррекция (от 3х недель до 2х месяцев) 950 грн</li>
          <li>Рефреш (обновление цвета) 1700 грн</li>
          <li>Lips light ( разновидность техники 3D) 1100 грн</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <h3>перманентный макияж век</h3>
        <ul>
          <li>Классическая стрелка (эффект подводки) 2500 грн</li>
          <li>Мягкая стрелка (эффект карандаша) 2300 грн</li>
          <li>Заполнение межресничного пространства (эффект густых ресниц) 2500 грн</li>
          <li>Нижняя стрелка 1100 грн</li>
          <li>Коррекция (от 3х недель до 2х месяцев) 800 грн</li>
          <li>Рефреш (обновление цвета)</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <h3>перманентный макияж бровей</h3>
        <ul>
          <li>Волосковая техника (имитация волос) 2500 грн</li>
          <li>Теневая техника (пудровые брови) 2500 грн</li>
          <li>Комбинированная техника (растушевка + волоски) 2700 грн</li>
          <li>Коррекция (от 3х недель до 2х месяцев) 950 грн</li>
          <li>Рефреш (обновление цвета) 1700 грн</li>
        </ul>
      </div>
      <div class="col-lg-6">
        <h3>Косметология</h3>
        <ul>
          <li>Волосковая техника (имитация волос) 2500 грн</li>
          <li>Теневая техника (пудровые брови) 2500 грн</li>
          <li>Комбинированная техника (растушевка + волоски) 2700 грн</li>
          <li>Коррекция (от 3х недель до 2х месяцев) 950 грн</li>
          <li>Рефреш (обновление цвета) 1700 грн</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section portfolio">
  <div class="container text-center">
    <div class="diamond-wrapper">
      <span class="diamond"></span>
    </div>
    <div class="section-header">
      <h2 class="section-title">Портфолио</h2>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri() ?>/images/portfolio/work-1.jpg" alt="portfolio 1">
      </div>
      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri() ?>/images/portfolio/work-2.jpg" alt="portfolio 2">
      </div>
      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri() ?>/images/portfolio/work-3.jpg" alt="portfolio 3">
      </div>
      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri() ?>/images/portfolio/work-4.jpg" alt="portfolio 1">
      </div>
      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri() ?>/images/portfolio/work-5.jpg" alt="portfolio 2">
      </div>
      <div class="col-lg-4">
        <img src="<?php echo get_template_directory_uri() ?>/images/portfolio/work-6.jpg" alt="portfolio 3">
      </div>
    </div>
    <a href="#" class="btn btn-default">Смотреть все работы</a>
  </div>
</section>

<section class="section offers">
  <div class="container text-center">
    <div class="diamond-wrapper">
      <span class="diamond"></span>
    </div>
    <div class="section-header">
      <h2 class="section-title">Специальные предложения</h2>
    </div>
    <div class="row">
      <div class="col-lg-4">Скоро <b>День рождения?</b></div>
      <div class="col-lg-4"><img src="<?php echo get_template_directory_uri() ?>/images/gift.jpg" alt="offers 1"></div>
      <div class="col-lg-4">Получи <b>скидку -25%</b> на перманентый макияж!</div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <p>
          *акция действует за 2 дня, в день и 2 дня после Дня рождения <br>
          *обязательно иметь при себе документ, подтверждающий личность
        </p>
        <a href="#" class="btn btn-default">Заказать</a>
      </div>
    </div>
  </div>
</section>

<section class="section-reviews">
  <div class="container text-center">
    <div class="diamond-wrapper">
      <span class="diamond"></span>
    </div>
    <div class="section-header">
      <h2 class="section-title">Отзывы</h2>
    </div>
    <ul class="review">
      <li class="review-item">
        <div class="review-header">
          <div class="review-avatar">
            <a href="#" class="review-link"></a>
          </div>
          <h4 class="review-user">Valentina Bereza</h4>
        </div>
        <div class="review-content">
          <p>“Кто не может решиться на процедуру, смело записывайтесь к Елене! При выборе мастера всегда учитываю профессионализм и гигиеничность процедуры. Елена работает на высоком уровне, «золотые ручки» и как бонус замечательный человек! Процедура прошла безболезненно, очень довольна работой!”</p>
        </div>
      </li>
    </ul>
  </div>
</section>

<section class="section certificates ">
  <div class="container text-center">
    <div class="section-header">
      <div class="diamond-wrapper">
        <span class="diamond"></span>
      </div>
      <h2 class="section-title section-title--light">Сертификаты</h2>
    </div>
    <ul class="row certificate">
      <li class="certificate-item col-sm-6 col-md-6 col-lg-3">
        <img src="<?php echo get_template_directory_uri() ?>/images/certificate/certificate-1.jpg" alt="certificate 1" class="certificate-image">
      </li>
      <li class="certificate-item col-sm-6 col-md-6 col-lg-3">
        <img src="<?php echo get_template_directory_uri() ?>/images/certificate/certificate-2.jpg" alt="certificate 2" class="certificate-image">
      </li>
      <li class="certificate-item col-sm-6 col-md-6 col-lg-3">
        <img src="<?php echo get_template_directory_uri() ?>/images/certificate/certificate-3.jpg" alt="certificate 3" class="certificate-image">
      </li>
      <li class="certificate-item col-sm-6 col-md-6 col-lg-3">
        <img src="<?php echo get_template_directory_uri() ?>/images/certificate/certificate-4.jpg" alt="certificate 4" class="certificate-image">
      </li>
    </ul>
    <p>Участница IV Выставки-форума профессиональной косметики и оборудования Beauty Vision 2016. Серебряный призёр Первого открытого Чемпионата Украины по перманентному макияжу PM AWARD 2016в рамках выставки ESTET BEAUTY EXPO, в номинации: "ПМ бровей в комбинированной технике: волоски и растушёвка".</p>
  </div>
</section>

<section class="section">
  <div class="container text-center">
    <div class="diamond-wrapper">
      <span class="diamond"></span>
    </div>
    <h4 class="section-sub-header">Блог</h4>
    <div class="section-header">
      <h2 class="section-title">Интересная и полезная информация для каждого</h2>
    </div>
    <ul class="blog-list row">
      <li class="blog-item col-md-4 col-lg-4">
        <div class="blog-header"><img src="<?php echo get_template_directory_uri() ?>/images/blog/blog-item-1.jpg" alt="blog preview 1" class="blog-preview"></div>
        <div class="blog-category">Уход за лицом</div>
        <h3 class="blog-title"><a class="blog-link" href="#">Самое интересное название темы об уходе за лицом</a></h3>
        <span class="blog-date">28 декабря 2016</span>
      </li>
      <li class="blog-item col-md-4 col-lg-4">
        <div class="blog-header"><img src="<?php echo get_template_directory_uri() ?>/images/blog/blog-item-2.jpg" alt="blog preview 2" class="blog-preview"></div>
        <div class="blog-category">Уход за лицом</div>
        <h3 class="blog-title"><a class="blog-link" href="#">Самое интересное название темы об уходе за лицом может быть длиннее</a></h3>
        <span class="blog-date">28 декабря 2016</span>
      </li>
      <li class="blog-item col-md-4 col-lg-4">
        <div class="blog-header"><img src="<?php echo get_template_directory_uri() ?>/images/blog/blog-item-3.jpg" alt="blog preview 2" class="blog-preview"></div>
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
      <div class="col-lg-2"></div>
      <div class="col-lg-4">
        <div class="diamond-wrapper">
          <span class="diamond"></span>
        </div>
        <div class="section-header">
          <h2 class="section-title">Контакты</h2>
        </div>
        <address class="address">
          г.Киев <br>
          ул. Шота Руставели, 34 <br>
          тел. <a href="tel:+380957603099">095 760 30 99</a><br>
          тел. <a href="tel:+380687668898">068 766 88 98</a>
        </address>
      </div>
      <div class="col-lg-5">
        <form action="" class="form">
          <div class="form-row">
            <input class="form-field" type="text" name="contact_name" placeholder="Введите имя">
          </div>
          <div class="form-row">
            <input class="form-field" type="tel" name="contact_tel" placeholder="Введите номер телефона">
          </div>
          <div class="form-row">
            <button type="submit" class="btn btn-default btn-inverse btn-block">Оставить заявку</button>
            <p>Ваши контактные данные в безопасности и не будут переданы третим лицам</p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<footer class="footer">
  <p class="container text-center">Сайт разработан студией дизайна BlueDiamondiev и <a href="http://brainworks.com.ua/" target="_blank">BRAIN WORKS</a> &copy; 2017 | Все права защищены</p>
</footer>


<?php get_footer(); ?>

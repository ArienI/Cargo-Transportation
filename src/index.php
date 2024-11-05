<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>

  <section class="main-banner slider" id="main-banner">
    <h1 class="visually-hidden"><?= Config::get_phrase('title'); ?></h1>
    <div class="main-banner__parallax-bg" data-swiper-parallax="-10%"></div>
    <div class="swiper-wrapper slider__wrapper">
      <section class="swiper-slide banner-slide">
        <div class="container banner-slide__container">
          <h2 class="banner-slide__text" data-swiper-parallax="-400"><?= Config::get_phrase('transport-germany'); ?></h2>
          <div class="row" data-swiper-parallax="-200">
            <div class="col-12 ">
              <ul class="banner-slide__list">
                <li><?= Config::get_phrase('montenegro'); ?></li>
                <li><?= Config::get_phrase('croatia'); ?></li>
                <li><?= Config::get_phrase('serbia'); ?></li>
                <li><?= Config::get_phrase('slovenia'); ?></li>
                <li><?= Config::get_phrase('austria'); ?></li>
                <li><?= Config::get_phrase('kosovo'); ?></li>
              </ul>
            </div>

          </div>
        </div>
      </section>
      <section class="swiper-slide banner-slide">
        <div class="container banner-slide__container">
          <h2 class="banner-slide__text" data-swiper-parallax="-400"><?= Config::get_phrase('transfer'); ?></h2>
          <div class="row" data-swiper-parallax="-200">
            <div class="col-12">
              <ul class="banner-slide__list">
                <li><?= Config::get_phrase('podgorica_airport'); ?></li>
                <li><?= Config::get_phrase('tivat_airport'); ?></li>
                <li><?= Config::get_phrase('dubrovnik_airport'); ?></li>
                <li><?= Config::get_phrase('pristina_airport'); ?></li>
                <li><?= Config::get_phrase('belgrade_airport'); ?></li>
                <li><?= Config::get_phrase('tirana_airport'); ?></li>
                <li><?= Config::get_phrase('sarajevo_airport'); ?></li>
              </ul>
            </div>

          </div>
        </div>
      </section>
      <section class="swiper-slide banner-slide">
        <div class="container banner-slide__container">
          <h2 class="banner-slide__text" data-swiper-parallax="-400"><?= Config::get_phrase('excursions'); ?></h2>
          <div class="row" data-swiper-parallax="-200">
            <div class="col-12">
              <ul class="banner-slide__list">
                <li><?= Config::get_phrase('montenegro'); ?></li>
                <li><?= Config::get_phrase('albania'); ?></li>
                <li><?= Config::get_phrase('serbia'); ?></li>
                <li><?= Config::get_phrase('croatia'); ?></li>
                <li><?= Config::get_phrase('bosnia'); ?></li>
              </ul>
            </div>

          </div>
        </div>
      </section>
      <section class="swiper-slide banner-slide">
        <div class="container banner-slide__container">
          <h2 class="banner-slide__text" data-swiper-parallax="-400"><?= Config::get_phrase('excursions_montenegro'); ?></h2>
          <div class="row" data-swiper-parallax="-200">
            <div class="col-12">
              <ul class="banner-slide__list">
                <li><?= Config::get_phrase('durmitor'); ?></li>
                <li><?= Config::get_phrase('cetinje'); ?></li>
                <li><?= Config::get_phrase('petrovac'); ?></li>
                <li><?= Config::get_phrase('kotor'); ?></li>
                <li><?= Config::get_phrase('ostrog'); ?></li>
                <li><?= Config::get_phrase('cetinje_monastery'); ?></li>
                <li><?= Config::get_phrase('moraca'); ?></li>
                <li><?= Config::get_phrase('individual_excursion'); ?></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="slider__controls">
      <button class="slider-controls-btn" type="button" data-to-slide="prev" aria-label="предыдущий слайд">
        <svg width="40" height="40" aria-hidden="true">
          <use xlink:href="<?= ASSETS_PATH; ?>img/sprite.svg#arrow-left"></use>
        </svg>
      </button>
      <button class="slider-controls-btn" type="button" data-to-slide="next" aria-label="следующий слайд">
        <svg width="40" height="40" aria-hidden="true">
          <use xlink:href="<?= ASSETS_PATH; ?>img/sprite.svg#arrow-right"></use>
        </svg>
      </button>
    </div>
    <div class="slider__pagination"></div>
  </section>
  <section class="contacts">
    <div class="contacts__container container">
      <h2 class="visually-hidden"><?= Config::get_phrase('contact'); ?></h2>
      <div class="row">
        <div class="col-12 d-flex justify-content-between">
          <a class="contacts__phone" href="tel:+38269738599">(+382)69738599</a>
          <ul class="contacts__socials">
            <?php include INC_PATH .'socials-links.php'; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="container">
    <div class="row py-4">
      <div class="col-12 col-lg-6 py-3 py-lg-0">
        <div class="service-description">
          <h2 class="service-description__title"><?= Config::get_phrase('safety_priority'); ?></h2>
          <h3 class="service-description__subtitle"><?= Config::get_phrase('new_mercedes'); ?></h3>
          <ul class="service-description__list">
            <li class="service-description__item"><?= Config::get_phrase('licensed_drivers'); ?>
            </li>
            <li class="service-description__item"><?= Config::get_phrase('car_disinfection'); ?></li>
            <li class="service-description__item"><?= Config::get_phrase('individual_approach'); ?>
            </li>
            <li class="service-description__item"><?= Config::get_phrase('client_support_best_options'); ?>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-6 py-3 py-lg-0">
        <div class="service-map">
          <iframe src="https://www.google.com/maps/d/embed?mid=1byo1z_lmu2ckxjxLPUhFT2oQ-jwnD0I&ehbc=2E312F&noprof=1"
                  width="600" height="450" style="border:0;width: 100%;" allowfullscreen="" loading="lazy"
                  referrerpolicy="no-referrer-when-downgrade" title="Google Map"></iframe>
        </div>
      </div>
    </div>
    <div class="definition row py-4">
      <div data-aos="fade-right" class="col-12 col-lg-4">
        <h4 class="definition__subheading"><?= Config::get_phrase('transport-germany'); ?></h4>
        <ul class="definition__list">
          <li class="definition__item"><?= Config::get_phrase('montenegro'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('croatia'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('serbia'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('slovenia'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('albania'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('kosovo'); ?></li>
        </ul>
        <p class="definition__text"><?= Config::get_phrase('transfer_request'); ?></p>
      </div>

      <div data-aos="fade-right" class="col-12 col-lg-4">
        <h4 class="definition__subheading"><?= Config::get_phrase('transfer'); ?></h4>
        <ul class="definition__list">
          <li class="definition__item"><?= Config::get_phrase('podgorica_airport'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('tivat_airport'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('dubrovnik_airport'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('pristina_airport'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('belgrade_airport'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('tirana_airport'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('sarajevo_airport'); ?></li>
        </ul>
        <p class="definition__text"><?= Config::get_phrase('vito_ready'); ?></p>
      </div>

      <div data-aos="fade-right" class="col-12 col-lg-4">
        <h4 class="definition__subheading"><?= Config::get_phrase('excursions'); ?></h4>
        <ul class="definition__list">
          <li class="definition__item"><?= Config::get_phrase('montenegro'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('albania'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('croatia'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('croatia'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('bosnia'); ?></li>
        </ul>
        <p class="definition__text"><?= Config::get_phrase('custom_recommendation'); ?></p>
      </div>

      <div data-aos="fade-right" class="col-12 col-lg-4">
        <h4 class="definition__subheading"><?= Config::get_phrase('excursions_montenegro'); ?></h4>
        <ul class="definition__list">
          <li class="definition__item"><?= Config::get_phrase('durmitor'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('cetinje'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('petrovac'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('kotor'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('ostrog'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('cetinje_monastery'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('moraca'); ?></li>
          <li class="definition__item"><?= Config::get_phrase('individual_excursion'); ?></li>
        </ul>
        <p class="definition__text"><?= Config::get_phrase('custom_recommendation'); ?>.</p>
      </div>
    </div>
  </section>

<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>
  <div class="montenegro-banner">
    <div class="montenegro-banner__img"></div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="montenegro-banner__title"><?= Config::get_phrase('excursions_montenegro'); ?></h1>
        </div>
      </div>

      <div class="row ">
        <div class="col-12">
          <ul class="montenegro-list mt-4 mt-lg-5 p-0">
            <li class="montenegro-list__item"><?= Config::get_phrase('durmitor'); ?></li>
            <li class="montenegro-list__item"><?= Config::get_phrase('cetinje'); ?></li>
            <li class="montenegro-list__item"><?= Config::get_phrase('petrovac'); ?></li>
            <li class="montenegro-list__item"><?= Config::get_phrase('kotor'); ?></li>
            <li class="montenegro-list__item"><?= Config::get_phrase('ostrog'); ?></li>
            <li class="montenegro-list__item"><?= Config::get_phrase('cetinje_monastery'); ?></li>
            <li class="montenegro-list__item"><?= Config::get_phrase('moraca'); ?></li>
            <li class="montenegro-list__item"><?= Config::get_phrase('individual_excursion'); ?></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <section class="contacts">
    <div class="contacts__container container">
      <h2 class="visually-hidden"><?= Config::get_phrase('contact'); ?></h2>
      <div class="row">
        <div class="col-12 d-flex justify-content-between">
          <a class="contacts__phone" href="tel:+38269738599" aria-label="Phone number">(+382)69738599</a>
          <ul class="contacts__socials">
            <?php include INC_PATH .'socials-links.php'; ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="container">
    <p class="montenegro__description pt-3 pt-lg-4"><?= Config::get_phrase('montenegro_description'); ?></p>
  </div>
  <section class="container">
    <article data-aos="fade-right" class="montenegro-place row">
      <div class="col-12 col-md-6">
        <img src="<?= ASSETS_PATH; ?>img/montenegro/lovcen.webp" class="montenegro-place__image" alt="lovcen" loading="lazy">
      </div>

      <div class="col-12 col-md-6 ">
        <div class="montenegro-place__info info row">
          <h2 class="info-title col-12"><?= Config::get_phrase('cetinje'); ?></h2>
          <p class="info-text  col-12"><?= Config::get_phrase('cetinje_lovcen_description'); ?></p>
        </div>
      </div>
    </article>

    <article data-aos="fade-right" class="montenegro-place row">
      <div class="col-12 col-md-6">
        <img src="<?= ASSETS_PATH; ?>img/montenegro/kotor.webp" class="montenegro-place__image" alt="lovcen" loading="lazy">
      </div>

      <div class="col-12 col-md-6 ">
        <div class="montenegro-place__info info row">
          <h2 class="info-title col-12"><p class="info-text col-12"><?= Config::get_phrase('kotor'); ?></h2>
          <p class="info-text col-12"><?= Config::get_phrase('boka_bay_description'); ?></p>
        </div>
      </div>
    </article>

    <article data-aos="fade-right" class="montenegro-place row">
      <div class="col-12 col-md-6">
        <img src="<?= ASSETS_PATH; ?>img/montenegro/ostrog.webp" class="montenegro-place__image" alt="lovcen" loading="lazy">
      </div>

      <div class="col-12 col-md-6 ">
        <div class="montenegro-place__info info row">
          <h2 class="info-title col-12"><?= Config::get_phrase('ostrog'); ?></h2>
          <p class="info-text col-12"><?= Config::get_phrase('ostrog_monastery_description'); ?>
        </div>
      </div>
    </article>

    <article data-aos="fade-right" class="montenegro-place row">
      <div class="col-12 col-md-6">
        <img src="<?= ASSETS_PATH; ?>img/montenegro/durmitor.webp" class="montenegro-place__image" alt="lovcen" loading="lazy">
      </div>

      <div class="col-12 col-md-6 ">
        <div class="montenegro-place__info info row">
          <h2 class="info-title col-12"><?= Config::get_phrase('durmitor'); ?></h2>
          <p class="info-text col-12"><?= Config::get_phrase('tara_canyon_description'); ?></p>
        </div>
      </div>
    </article>

    <article data-aos="fade-right" class="montenegro-place row">
      <div class="col-12 col-md-6">
        <img src="<?= ASSETS_PATH; ?>img/montenegro/cetinjski-manastir.webp" class="montenegro-place__image" alt="lovcen" loading="lazy">
      </div>

      <div class="col-12 col-md-6 ">
        <div class="montenegro-place__info info row">
          <h2 class="info-title col-12"><?= Config::get_phrase('cetinje_monastery'); ?></h2>
          <p class="info-text col-12"><?= Config::get_phrase('cetinje_monastery_description'); ?></p>
        </div>
      </div>
    </article>

    <article data-aos="fade-right" class="montenegro-place row">
      <div class="col-12 col-md-6">
        <img src="<?= ASSETS_PATH; ?>img/montenegro/moraca.webp" class="montenegro-place__image" alt="lovcen" loading="lazy">
      </div>

      <div class="col-12 col-md-6 ">
        <div class="montenegro-place__info info row">
          <h2 class="info-title col-12"><?= Config::get_phrase('moraca'); ?></h2>
          <p class="info-text col-12"><?= Config::get_phrase('moraca_monastery_description'); ?></p>
        </div>
      </div>
    </article>

  </section>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
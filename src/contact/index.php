<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/header.php'; ?>
  <div class="contact-banner d-flex">
    <div class="contact-banner__img"></div>

    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="contact-banner__title"><?= Config::get_phrase('plan_your_trip'); ?></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="contact-info container">
    <h2 class="contact-info__heading pt-3 pt-lg-4">
      <?= Config::get_phrase('contact_us'); ?>
    </h2>
    <ul class="contact-info__list">
      <li class="contact-item d-flex pb-3 pb-lg-4">
        <a class="contact-item__link" href="tel:+38269738599">
          <img class="contact-item__icon" src="<?= ASSETS_PATH; ?>img/social/tel.svg" alt="Phone icon">
        </a>
        <p class="contact-item__text">(+382)69-738-599</p>
      </li>

      <li class="contact-item d-flex pb-3 pb-lg-4">
        <a class="contact-item__link" href="mailto:transferoxana@gmail.com">
          <img class="contact-item__icon" src="<?= ASSETS_PATH; ?>img/social/mail.svg" alt="Mail icon">
        </a>
        <p class="contact-item__text">transferoxana@gmail.com</p>
      </li>

      <li class="contact-item pb-3 pb-lg-4">
        <ul class="contact-item__socials">
          <?php include INC_PATH .'socials-links.php'; ?>
        </ul>
      </li>
    </ul>
  </div>
<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/footer.php';
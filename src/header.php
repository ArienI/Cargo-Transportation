<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/settings/config.php';?>

<!DOCTYPE html>
<html lang="<?= $_SESSION['lang']; ?>">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="Arien"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= ASSETS_PATH; ?>img/favicons/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= ASSETS_PATH; ?>img/favicons/favicon-32x32.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= ASSETS_PATH; ?>img/favicons/apple-touch-icon.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="preload" href="<?= ASSETS_PATH; ?>fonts/opensans-regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="<?= ASSETS_PATH; ?>style/vendor-bundle.css?<?= VER ?>">
  <link rel="stylesheet" href="<?= ASSETS_PATH; ?>style/main.css?<?= VER ?>">
  <meta name="description"
        content="Profesionalne transportne usluge u Crnoj Gori: transferi do aerodroma, ekskurzije po Balkanu, prevozi u Nemačku. Kontaktirajte nas za rezervaciju.">
  <meta name="keywords"
        content="usluge transfera, ekskurzije, prevoz putnika, Crna Gora, aerodromski transfer, putovanja, privatni prevoz, taksi, turističke ture, turizam, izleti,prevoz putnika"/>
  <title><?= Config::get_phrase('title'); ?></title>
</head>

<body class="site">
<div inert="" id="site-top"></div>
<div class="site__container">

  <header class="site-header site-header--fixed">
    <div class="site-header__top">
      <div class="container">
        <div class="site-header__top-wrapper">
          <div class="select-lang">
            <button class="select-lang__btn">
              <img src="<?= ASSETS_PATH; ?>/img/language2.svg" alt="icon" width="40" height="40">
            </button>
            <ul class="select-lang__list">
              <li class="select-lang__item">
                <a class="select-lang__link<?= $_SESSION['lang'] == 'sr' ? ' select-lang__link--active' : ''; ?>" href="?lang=sr" aria-label="Srpski">Sr</a>
              </li>
              <li class="select-lang__item">
                <a class="select-lang__link<?= $_SESSION['lang'] == 'en' ? ' select-lang__link--active' : ''; ?>" href="?lang=en" aria-label="Engleski">En</a>
              </li>
              <li class="select-lang__item">
                <a class="select-lang__link<?= $_SESSION['lang'] == 'de' ? ' select-lang__link--active' : ''; ?>" href="?lang=de" aria-label="Nemački">De</a>
              </li>
              <li class="select-lang__item">
                <a class="select-lang__link<?= $_SESSION['lang'] == 'fr' ? ' select-lang__link--active' : ''; ?>" href="?lang=fr" aria-label="Francuski">Fr</a>
              </li>
              <li class="select-lang__item">
                <a class="select-lang__link<?= $_SESSION['lang'] == 'tr' ? ' select-lang__link--active' : ''; ?>" href="?lang=tr" aria-label="Turski">Tr</a>
              </li>
              <li class="select-lang__item">
                <a class="select-lang__link<?= $_SESSION['lang'] == 'sq' ? ' select-lang__link--active' : ''; ?>" href="?lang=sq" aria-label="Albansk">Sq</a>
              </li>
              <li class="select-lang__item">
                <a class="select-lang__link<?= $_SESSION['lang'] == 'ru' ? ' select-lang__link--active' : ''; ?>" href="?lang=ru" aria-label="Ruski">Ru</a>
              </li>
            </ul>
          </div>
          <ul class="site-header__social-list">
            <?php include INC_PATH .'socials-links.php'; ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="site-header__bottom">
      <div class="container">
        <div class="site-header__bottom-wrapper">
          <a class="site-header__logo-link" href="/">
            <img width="130" src="<?= ASSETS_PATH; ?>img/Logo.svg" alt="Oxana">
          </a>
          <button class="site-header__burger burger d-md-none" type="button">
            <svg class="burger__icon" width="40" viewBox="0 0 50 50" aria-hidden="true">
              <path class="burger__line burger__line--top"
                    d="M7 9.5H43.2105C46.5807 9.5 50 12.2586 50 17.0692C50 21.8798 47.5313 24.5 43.2105 24.5H25"/>
              <path class="burger__line burger__line--middle" d="m 7,25 h 36"/>
              <path class="burger__line burger__line--bottom"
                    d="M43 40.5H6.78947C6.78947 40.5 0 39.7451 0 32.6264C0 25.5076 6.78947 24.5 6.78947 24.5H25"/>
            </svg>
          </button>
          <nav class="site-header__nav" aria-label="Main Navigation">
            <div class="site-header__menu-wrapper">
              <ul class="header-menu">
                <li class="header-menu__item">
                  <a href="/prevoz/" class="header-menu__link"><?= Config::get_phrase('transport-germany'); ?></a>
                </li>
                <li class="header-menu__item">
                  <a href="/transfer/" class="header-menu__link"><?= Config::get_phrase('transfer'); ?></a>
                </li>
                <li class="header-menu__item">
                  <a href="/ekskurzije/" class="header-menu__link"><?= Config::get_phrase('excursions'); ?></a>
                </li>
                <li class="header-menu__item">
                  <a href="/montenegro/" class="header-menu__link"><?= Config::get_phrase('montenegro'); ?></a>
                </li>
                <li class="header-menu__item">
                  <a href="/contact/" class="header-menu__link"><?= Config::get_phrase('contact'); ?></a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <main class="site__content">

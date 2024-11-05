   </main>
    <footer class="site-footer">
      <div class="site-footer__top">
        <div class="container">
          <div class="row align-items-md-center">
            <div class="col-12 col-md-6 col-xl-auto order-md-2 order-xl-3 mb-3">
              <div class="site-footer__logo-container">
                <a class="site-footer__logo" href="/">
                  <img src="<?= ASSETS_PATH; ?>img/Logo.svg" alt="Oxana">
                </a>
              </div>
            </div>
            <nav class="col-12 col-xl-auto order-md-3 pb-3 pb-lg-0 order-xl-2 mb-3 ml-xl-auto mr-xl-auto"
                 aria-label="Main Navigation" role="navigation">
              <ul class="footer-menu">
                <li class="footer-menu__item">
                  <a href="/prevoz/" class="footer-menu__link"><?= Config::get_phrase('transport-germany'); ?></a>

                </li>
                <li class="footer-menu__item">
                  <a href="/transfer/" class="footer-menu__link"><?= Config::get_phrase('transfer'); ?></a>
                </li>
                <li class="footer-menu__item">
                  <a href="/ekskurzije/" class="footer-menu__link"><?= Config::get_phrase('excursions'); ?></a>
                </li>
                <li class="footer-menu__item">
                  <a href="/montenegro/" class="footer-menu__link"><?= Config::get_phrase('montenegro'); ?></a>
                </li>
                <li class="footer-menu__item">
                  <a href="/contact/" class="footer-menu__link"><?= Config::get_phrase('contact'); ?></a>
                </li>
              </ul>
            </nav>
            <div class="col-12 col-md-6 col-xl-auto order-md-1 order-xl-1 mb-3">
              <ul class="site-footer__social-list">
                <?php include INC_PATH .'socials-links.php'; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <p class="site-footer__copyright">&#169; 2024 Transfer-Oxana. <?= Config::get_phrase('copyright_notice'); ?></p>
    </footer>

    <div class="scroll-top" id="scroll-top">
      <a class="scroll-top__link" href="#site-top" aria-label="Наверх страницы">
        <svg width="10" height="10" aria-hidden="true">
          <use xlink:href="<?= ASSETS_PATH; ?>img/sprite.svg#arrow-up"></use>
        </svg>
      </a>
    </div>
  </div>

  <script src="<?= ASSETS_PATH; ?>js/vendor-bundle.js?<?= VER ?>"></script>
  <script src="<?= ASSETS_PATH; ?>js/main.js?<?= VER ?>"></script>
</body>

</html>
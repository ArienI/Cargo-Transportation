import { initSiteSettings } from './modules/settings.js';

document.addEventListener('DOMContentLoaded', () => {

  initSiteSettings();

  const dropdownBtn = document.querySelector('.site-header__dropdown-btn');
  const langList = document.querySelector('.site-header__lang-list');

  if (dropdownBtn && langList) {
    dropdownBtn.addEventListener('click', () => {
      langList.classList.toggle('is-visible');
    });
  }

  window.addEventListener('load', () => {
  });
});

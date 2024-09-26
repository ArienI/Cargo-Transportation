import { initSiteSettings } from './modules/settings.js';

document.addEventListener('DOMContentLoaded', () => {
  initSiteSettings();
  updateTextBasedOnScreenSize();
  updateTextBasedOnScreenSizeRu();
  updateLayoutBasedOnScreenSize();
});

// загрузка всего окна
window.addEventListener('load', () => {
  updateTextBasedOnScreenSize();
  updateLayoutBasedOnScreenSize();
});

// событие изменения размера экрана
window.addEventListener('resize', () => {
  updateTextBasedOnScreenSize();
  updateLayoutBasedOnScreenSize();
});

// функция для обновления текста в зависимости от ширины экрана
function updateTextBasedOnScreenSize() {
  const navbarLink = document.querySelector('.navbar__text-style');
  const footerLink = document.querySelector('.footer__text-style');

  if (window.innerWidth <= 1050) {
    if (navbarLink) {
      navbarLink.textContent = 'Prijevoz za Njemačku';
    }
    if (footerLink) {
      footerLink.textContent = 'Prijevoz za Njemačku';
    }
  } else {
    if (navbarLink) {
      navbarLink.textContent = 'Prevoz putnika za Nemačku';
    }
    if (footerLink) {
      footerLink.textContent = 'Prevoz putnika za Nemačku';
    }
  }
}

// на рус яз
function updateTextBasedOnScreenSizeRu() {
  const navbarLinkRu = document.querySelector('.navbar__text-styleru');
  const footerLinkRu = document.querySelector('.footer__text-styleru');

  if (window.innerWidth <= 1250) {
    if (navbarLinkRu) {
      navbarLinkRu.textContent = 'Перевозка в Германию';
    }
    if (footerLinkRu) {
      footerLinkRu.textContent = 'Перевозка в Германию';
    }
  } else {
    if (navbarLinkRu) {
      navbarLinkRu.textContent = 'Перевозка пассажиров в Германию';
    }
    if (footerLinkRu) {
      footerLinkRu.textContent = 'Перевозка пассажиров в Германию';
    }
  }
}

// функция для обновления на основе ширины экрана списка языков в select
function updateLayoutBasedOnScreenSize() {
  if (window.innerWidth <= 450) {
    convertLangListToDropdown();
  } else {
    revertDropdownToLangList();
  }
}

// функция для конвертации списка языков в выпадающий список <select>
function convertLangListToDropdown() {
  const langList = document.querySelector('.site-header__lang-list');
  if (!langList) return;

  // проверяем, если уже есть выпадающий список, чтобы не дублировать
  if (document.querySelector('.site-header__lang-select')) return;

  // создаем <select> элемент
  const select = document.createElement('select');
  select.classList.add('site-header__lang-select');

  // добавляем опции в select из списка языков
  const links = langList.querySelectorAll('a');
  links.forEach(link => {
    const option = document.createElement('option');
    option.value = link.href;
    option.textContent = link.textContent;
    if (link.classList.contains('site-header__lang-link--active')) {
      option.selected = true;
    }
    select.appendChild(option);
  });

  // обрабатываем изменение выбора
  select.addEventListener('change', (event) => {
    window.location.href = event.target.value;
  });

  // заменяем список языков на select
  // Скрываем оригинальный список
  langList.style.display = 'none';
  langList.parentElement.appendChild(select);
}

// функция для возврата выпадающего списка <select> обратно в список <ul>
function revertDropdownToLangList() {
  const langList = document.querySelector('.site-header__lang-list');
  const select = document.querySelector('.site-header__lang-select');

  if (!select || !langList) return;

  // убираем select
  select.remove();

  // показываем оригинальный список
  langList.style.display = '';
}
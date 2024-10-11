import {
  initSiteSettings
} from './modules/settings.js';
import {
  initLangDropdown
} from './modules/lang-dropdown.js';
import {
  initHeaderMenu
} from './modules/header-menu.js';

document.addEventListener( 'DOMContentLoaded', () => {
  initSiteSettings();
  window.addEventListener( 'load', () => {
    initHeaderMenu();
    initLangDropdown();
  } );
} );
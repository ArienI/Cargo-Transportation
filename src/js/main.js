import {
  initSiteSettings
} from './modules/settings.js';
import {
  initLangDropdown
} from './modules/lang-dropdown.js';

document.addEventListener( 'DOMContentLoaded', () => {
  initSiteSettings();
  window.addEventListener( 'load', () => {
    initLangDropdown();
  } );
} );

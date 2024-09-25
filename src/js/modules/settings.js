import {
  smoothScrollConfig
} from './configs.js';

import {
  iosVhFix
} from './utils.js';

import {
  initScrollObserver,
} from './scroll-observer.js';

const initSiteSettings = () => {
  iosVhFix();
  initScrollObserver();
  new SmoothScroll('a[href*="#"]', smoothScrollConfig);
};

export {
  initSiteSettings,
};

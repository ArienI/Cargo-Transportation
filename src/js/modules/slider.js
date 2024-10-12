import {
  initSlider
} from './utils.js';

import {
  sliderConfig
} from './configs.js';

export const initSliders = () => {
  initSlider( '#main-banner', sliderConfig.mainBanner );
};

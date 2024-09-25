const iosChecker = () => {
  return [
    'iPad Simulator',
    'iPhone Simulator',
    'iPod Simulator',
    'iPad',
    'iPhone',
    'iPod'
  ].includes(navigator.platform)
    // iPad on iOS 13 detection
    ||
    (navigator.userAgent.includes('Mac') && 'ontouchend' in document);
};

const iosVhFix = () => {
  if (!(!!window.MSInputMethodContext && !!document.documentMode)) {
    if (iosChecker()) {
      let vh = window.innerHeight * 0.01;
      document.documentElement.style.setProperty('--vh', `${vh}px`);

      window.addEventListener('resize', function () {
        vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `${vh}px`);
      });
    }
  }
};

const lockScroll = () => {
  !document.documentElement.classList.contains('is-lock-scroll') ? document.documentElement.classList.add('is-lock-scroll') : '';
};

const unlockScroll = () => {
  document.documentElement.classList.remove('is-lock-scroll');
};

const isEscKey = (evt) => evt.key === 'Escape';

export {
  iosVhFix,
  isEscKey,
  lockScroll,
  unlockScroll,
};

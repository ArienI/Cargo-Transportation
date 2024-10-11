export const initHeaderMenu = () => {
  const burgerBtn = document.querySelector( '.site-header__burger' );
  const menuBlock = document.querySelector( '.site-header__nav' );

  if ( burgerBtn && menuBlock ) {
    burgerBtn.addEventListener( 'click', () => {
      burgerBtn.classList.toggle( 'is-open' );
      menuBlock.classList.toggle( 'is-open' );
      event.stopPropagation();
    } );

    document.addEventListener( 'click', ( event ) => {
      if ( !burgerBtn.contains( event.target ) && !menuBlock.contains( event.target ) ) {
        burgerBtn.classList.remove( 'is-open' );
        menuBlock.classList.remove( 'is-open' );
      }
    } );
  }
};
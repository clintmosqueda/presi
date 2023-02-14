export default function Menu() {
  let menu = document.querySelector('.js-hamburger-menu')
  let megaMenu = document.querySelector('.js-mega-menu')
  let header = document.querySelector('.js-header')

  function scrollLock() {
    const body = document.querySelector('html');
    const scrollY = document.documentElement.style.getPropertyValue('--scroll-y');
    body.style.position = 'fixed';
    body.style.width = '100%';
    body.style.height = '100%';
    body.style.overflow = 'hidden';
    body.style.top = `-${scrollY}`;
  };
  
  function scrollAble() {
    const body = document.querySelector('html');
    const scrollY = body.style.top;
    body.style.position = '';
    body.style.top = '';
    body.style.height = '';
    body.style.overflow = '';
    window.scrollTo(0, parseInt(scrollY || '0') * -1);
  }
  
  window.addEventListener('scroll', () => {
    document.documentElement.style.setProperty('--scroll-y', `${window.scrollY}px`);
  });

  menu.addEventListener('click', (el) => {
    menu.classList.toggle('is-open')
    megaMenu.classList.toggle('is-open')
    header.classList.toggle('is-open')

    megaMenu.classList.contains('is-open') ? scrollLock() : scrollAble()
  })
}
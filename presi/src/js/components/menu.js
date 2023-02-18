import {scrollLock, scrollAble} from './scrolling';

export default function Menu() {
  let menu = document.querySelector('.js-hamburger-menu')
  let megaMenu = document.querySelector('.js-mega-menu')
  let header = document.querySelector('.js-header')

  menu.addEventListener('click', (el) => {
    menu.classList.toggle('is-open')
    megaMenu.classList.toggle('is-open')
    header.classList.toggle('is-open')

    megaMenu.classList.contains('is-open') ? scrollLock() : scrollAble()
  })
}
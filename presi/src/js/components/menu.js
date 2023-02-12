export default function Menu() {
  console.log('Menu')
  let menu = document.querySelector('.js-hamburger-menu')
  let megaMenu = document.querySelector('.js-mega-menu')

  menu.addEventListener('click', (el) => {
    menu.classList.toggle('is-open')
    megaMenu.classList.toggle('is-open')
  })
}
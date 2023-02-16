export default function Agree() {
  let agree = document.querySelector('.js-checkbox')
  let confirmButton = document.querySelector('.contact-confirm')

  if(confirmButton) {
    confirmButton.classList.add('is-disable')
  
    agree.addEventListener('click', ()=> {
      console.log(agree.checked)
      agree.checked ? confirmButton.classList.remove('is-disable') : confirmButton.classList.add('is-disable')
    })
  }
}
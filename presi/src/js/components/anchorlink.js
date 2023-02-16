import { gsap, ScrollToPlugin } from "gsap/all";
gsap.registerPlugin(ScrollToPlugin);

export default function Anchorlink() {
  const body = document.querySelector('body');
  const id = window.location.search.split('?')[1]
  const scrollto = () => {
    const htmlBody = document.querySelectorAll('html, body');
    
    if(id) {
      const section = document.querySelector(`#${id}`)
      const sectionOffset =  body.classList.contains('service-page') ?  section.offsetTop : 1700

      gsap.to(htmlBody, {
        scrollTo: sectionOffset - 50,
        duration: 2,
        ease: "Power4.easeInOut"
      })
    }
  }

  if(body.classList.contains('service-page') || body.classList.contains('company-page')) {
    scrollto()
  } 
}
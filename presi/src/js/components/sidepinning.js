import { gsap, ScrollTrigger } from "gsap/all";
gsap.registerPlugin(ScrollTrigger);

export default function Sidepinning() {

  document.addEventListener("DOMContentLoaded", () => {
    let companyMain = document.querySelector('.company-main')
    let sections = document.querySelectorAll('.company-main-content section')
    let list = document.querySelector('.company-sidebar-list')
    let items = document.querySelectorAll('.company-sidebar-item')

    if(companyMain) {
      gsap.timeline({
        ease: 'power1.inOut',
        scrollTrigger: {
          trigger: '.company-main',
          start: () => "top top",
          end: () => '92%',
          pin: '.company-sidebar-list',

        }
      });

      sections.forEach((section, i)=> {
        gsap.timeline({
          scrollTrigger:{
            trigger: section,
            scrub: true,
            start: () => "top 200px",
            end: () => '100%',
            onUpdate: (self) => {
              let sectionName = self.trigger.className
              list.setAttribute('data-name', self.trigger.className)
              items.forEach((item, i)=> {
                sectionName === item.getAttribute('data-section') ? item.classList.add('is-active') : item.classList.remove('is-active')
              })
            }
          }
        })
      })
    }
  });



}
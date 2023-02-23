import "splitting/dist/splitting.css";
import "splitting/dist/splitting-cells.css";
import Splitting from "splitting";

import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

export default function Mv() {
  console.log('mv')
  const mvSelector = '.js-mv-swiper';
  const mvSwiper = document.querySelector(mvSelector)
  const mvSlide = document.querySelectorAll('.mv-swiper-slide')

  if(mvSwiper) {
    const mvCarousel = new Swiper(mvSelector, {
      slidesPerView: 1,
      effect: 'fade',
      loop: true,
      speed: 300,
      fadeEffect: {
        // crossFade: true
      },
      autoplay: {
        // delay: 300,
        disableOnInteraction: false
      },
      on: {
        slideChange: swiper => {
          setTimeout(() => {
            mvSlide.forEach((el, indx) => {
              if(el.classList.contains('is-animate')) {
                el.classList.remove('is-animate')
              }
            })
          }, 1000);
        },
        autoplayTimeLeft: (s, time, progress) => {
          if(Math.ceil(time/1000) === 1) {
            mvSlide.forEach((el, indx) => {
              if(el.classList.contains('swiper-slide-active')) {
                el.classList.add('is-animate')
              }
            })
          }
        }
      }
    })
  }

  Splitting({ 
    target: '[data-rows]',
    by: 'cells',
    image: true
  });
}
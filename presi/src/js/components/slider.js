import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

export default function Slider() {
  const interviewSlider = document.querySelector('.js-interview-carousel')
  const duration = 500

  if(interviewSlider) {
    const interviewSliderImages = new Swiper('.js-interview-carousel', {
      slidesPerView: 1,
      speed: duration,
      spaceBetween: 10,
      autoplay: {
        disableOnInteraction: false
      },
      navigation: {
        prevEl: ".js-interview-nav-prev",
        nextEl: ".js-interview-nav-next",
      },
      on: {
        slideChange: swiper => {
          // console.log(swiper);
        }
      }
    })
  }
}
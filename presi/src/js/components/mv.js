import "splitting/dist/splitting.css";
import "splitting/dist/splitting-cells.css";
import Splitting from "splitting";

// import Swiper from 'swiper/bundle';
// import 'swiper/css/bundle';

export default function Mv() {
  console.log('mv')
  const slider = document.querySelector('.mv-slider')
  const slides = document.querySelectorAll('.mv-slide')
  const slidesLength = slides.length - 1;
  let count = 0
  let currentSlide = 0;
  let timeleft = 5

  let counter =  function() {
    setInterval(function() {
      count++
      if(count > slidesLength) {
        count = 0
      }
      
      
      slides.forEach((slide, index) => {
        slide.classList.remove('is-animate')
      })
      nextSlide()
      clearTimeout(countdown);
      
    }, 5000);
    
  }

  let countdown = function() {
    setInterval(function() {

      timeleft--
      if(timeleft == 0) {
        timeleft = 5
      }

      slides.forEach((slide, index) => {
        if(timeleft == 5) {
          if(slide.classList.contains('is-active')) {
            slide.classList.add('is-animate');
          }
        }
      })
    }, 1000)
  }

  const nextSlide = () => {
    console.log('nexslide')
    currentSlide++
    if(currentSlide > slidesLength) {
      currentSlide = 0
    }
    
    slides.forEach((slide, index) => {
      slide.classList.remove("is-active");
      slide.classList.remove('is-next')

      if (index === currentSlide) {
        slide.classList.add("is-active");
      }
    });

    if(currentSlide == 2 ) {
      slides[0].classList.add("is-next");
    } else {
      slides[currentSlide+1].classList.add("is-next");
    }
  }

  counter()
  countdown()


  Splitting({ 
    target: '[data-rows]',
    by: 'cells',
    image: true
  });





  // if(mvSwiper) {
  //   const mvCarousel = new Swiper(mvSelector, {
  //     slidesPerView: 1,
  //     effect: 'fade',
  //     loop: true,
  //     speed: 500,
  //     fadeEffect: {
  //       // crossFade: true
  //     },
  //     autoplay: {
  //       disableOnInteraction: false
  //     },
  //     on: {
  //       slideChange: swiper => {
  //         setTimeout(() => {
  //           mvSlide.forEach((el, indx) => {
  //             if(el.classList.contains('is-animate')) {
  //               el.classList.remove('is-animate')
  //             }
  //           })
  //         }, 1000);
  //       },
  //       autoplayTimeLeft: (s, time, progress) => {
  //         if(Math.ceil(time/1000) === 1) {
  //           mvSlide.forEach((el, indx) => {
  //             if(el.classList.contains('swiper-slide-active')) {
  //               el.classList.add('is-animate')
  //             }
  //           })
  //         }
  //       }
  //     }
  //   })
  // }

}
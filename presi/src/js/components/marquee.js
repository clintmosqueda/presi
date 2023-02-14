export default function Marquee() {
  let marqueeTitles = document.querySelectorAll('.js-marquee');
  let speed = 0.15

  if(marqueeTitles.length) {
    marqueeTitles.forEach((el, index) => {
      let elWidth = el.offsetWidth
      let elSpeed = el.getAttribute("data-speed") ? parseFloat(el.getAttribute("data-speed")) :  speed

      el.animate([ 
        { transform: `translateX(0px)` },
        { transform: `translateX(-${elWidth + window.innerWidth }px)` },
      ], {
        duration: ( elWidth / elSpeed ),
        iterations: Infinity
      });
    })
  }

}
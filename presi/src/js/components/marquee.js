export default function Marquee() {
  let marqueeTitles = document.querySelectorAll('.js-marquee');
  let speed = 0.15

  if(marqueeTitles.length) {
    marqueeTitles.forEach((el, index) => {
      console.log(el);
      let elWidth = el.offsetWidth
      let elSpeed = el.getAttribute("data-speed") ? parseFloat(el.getAttribute("data-speed")) :  speed
      // el.setAttribute("data-width", elWidth);
      console.log(elSpeed)

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
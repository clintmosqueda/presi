export default function Marquee() {
  let scrollingText = document.querySelector('.js-scrolling-text');
  let marqueeTitles = document.querySelectorAll('.js-marquee');
  let speed = 0.15
  let wrapper = 1162

  if(scrollingText) {
    let scrollingTextWidth = scrollingText.parentElement.scrollWidth

    scrollingText.animate([
      { transform: `translateX(0px)` },
      { transform: `translateX(-${scrollingTextWidth + ((window.innerWidth - wrapper) / 2)}px)` },
    ], {
      delay: 1000,
      iterations: 1,
      duration: scrollingTextWidth / speed,
    })

    scrollingText.animate([
      { transform: `translateX(${wrapper + ((window.innerWidth - wrapper) / 2)}px)` },
      { transform: `translateX(-${scrollingTextWidth}px)` },
    ], {
      delay: scrollingTextWidth / speed,
      iterations: Infinity,
      duration: scrollingTextWidth / speed,
    })
  }

  marqueeTitles.forEach((el, index) => {
    let textWidth = el.parentElement.scrollWidth

    el.animate([
      { transform: `translateX(0px)` },
      { transform: `translateX(-${textWidth + ((window.innerWidth - wrapper) / 2)}px)` },
    ], {
      delay: 1000,
      iterations: 1,
      duration: textWidth / parseFloat(el.getAttribute("data-speed")),
    })

    el.animate([
      { transform: `translateX(${wrapper + ((window.innerWidth - wrapper) / 2)}px)` },
      { transform: `translateX(-${textWidth}px)` },
    ], {
      delay: textWidth / parseFloat(el.getAttribute("data-speed")),
      iterations: Infinity,
      duration: textWidth / parseFloat(el.getAttribute("data-speed")),
    })
  })


}
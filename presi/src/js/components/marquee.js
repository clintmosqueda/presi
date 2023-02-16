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

  let newsMarquee = document.querySelector('.news-marquee-text')

   
  if(newsMarquee) {
    let newsMarqueeWidth = newsMarquee.offsetWidth
    const newsKeyfrmes = new KeyframeEffect(
      newsMarquee,
      [
        { transform: `translateX(0px)` },
        { transform: `translateX(-${newsMarqueeWidth + ((window.innerWidth - 1202)/2)}px)` },
      ],    {
        duration: ( newsMarqueeWidth / 0.08 ),
        iterations: 1
      }
    )

    const newsAnimtion = new Animation(newsKeyfrmes, document.timeline)
    newsAnimtion.play()
      // console.log(newsAnimtion.finished)
      // console.log(newsKeyfrmes)
      // console.log(newsKeyfrmes.getKeyframes())
    // newsMarquee.style.translate = `-${newsMarqueeWidth + ((window.innerWidth - 1202)/2)}px 0px`
  }

}
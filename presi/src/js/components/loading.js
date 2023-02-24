import {scrollLock, scrollAble} from './scrolling';

export default function Loading() {
  const loading = document.querySelector('.js-loading');
  const video = document.getElementById('loading-video');
  const path = video.dataset.path

  const mediaQuery = window.matchMedia('(max-width: 768px)')
  console.log(mediaQuery.matches)
  const fileName = mediaQuery.matches ? 'loading-sp.mp4' : 'loading-pc.mp4'

  if(loading) {
    window.scroll(0, 0)
    let source = document.createElement('source')
    source.src = `${video.dataset.path}${fileName}`
    source.type = 'video/mp4'
    source.setAttribute('data-test', 'hello')
    video.appendChild(source)
  
    video.addEventListener('canplay',(event) => {
      video.play()
      scrollLock()
    })
  
    video.addEventListener('ended',(event) => {
      // setTimeout(() => {
        scrollAble()
        loading.classList.add('is-hidden')
      // }, 500);

    })
  }
}
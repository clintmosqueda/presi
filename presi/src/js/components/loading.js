import {scrollLock, scrollAble} from './scrolling';

export default function Loading() {
  const loading = document.querySelector('.js-loading');
  const video = document.getElementById('loading-video');
  window.scroll(0, 0)
  
  video.addEventListener('canplay',(event) => {
    scrollLock()
  })

  video.addEventListener('ended',(event) => {
    scrollAble()
    loading.classList.add('is-hidden')
  })

}
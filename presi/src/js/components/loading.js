import {scrollLock, scrollAble} from './scrolling';

export default function Loading() {
  console.log('loading')
  const loading = document.querySelector('.js-loading');
  const video = document.getElementById('loading-video');
  window.scroll(0, 0)
  
  video.addEventListener('canplay',(event) => {
    console.log('canplay')
    scrollLock()
  })

  video.addEventListener('ended',(event) => {
    scrollAble()
    loading.classList.add('is-hidden')
  })

}
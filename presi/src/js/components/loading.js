import {scrollLock, scrollAble} from './scrolling';

export default function Loading() {
  const html = document.querySelector('html')
  const loading = document.querySelector('.js-loading');
  const mediaQuery = window.matchMedia('(max-width: 768px)')
  
  function videoLoading() {
    const video = document.getElementById('loading-video');
    const path = video.dataset.path
    const fileName = mediaQuery.matches ? 'loading-sp.webm' : 'loading_presi.webm'
    const source = document.createElement('source')
    source.src = `${path}${fileName}`
    source.type = mediaQuery.matches ? 'video/webm' : 'video/webm'
    source.setAttribute('data-test', 'hello')
    video.appendChild(source)

    video.addEventListener('canplay',(event) => {
      video.play()
      scrollLock()
    })
  
    video.addEventListener('ended',(event) => {
        scrollAble()
        loading.classList.add('is-hidden')
    })
  }

  function gifLoading() {
    console.log('test')
    const loadingGif = document.querySelector('.loading-img')
    const imgPath = loadingGif.dataset.path
    
    scrollLock()
    loadingGif.src = `${imgPath}loading.gif`

    setTimeout(() => {
      scrollAble()
      loading.classList.add('is-hidden')
      loadingGif.style.display = 'none'
    }, 4000);
  }

  if(loading) {
    html.classList.contains('is-ios') ? gifLoading() : videoLoading()    
  }


}
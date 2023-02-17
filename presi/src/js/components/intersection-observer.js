export default function intersectionObserver() {
  const observeSections = document.querySelectorAll('.js-observe');

  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      const intersecting = entry.isIntersecting

      if(intersecting) {
        entry.target.classList.add('is-shown')
      }
    })
  },{ threshold: 0.2 })
  
  if(observeSections.length) {
    observeSections.forEach(section => {
      observer.observe(section)
    })
  }


}
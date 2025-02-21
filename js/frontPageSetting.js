'use strict'

{
  window.addEventListener('DOMContentLoaded', () => {
    const swiperImage = new Swiper('#swiper-image-container', {
      slidesPerView: 'auto',
      loop: true,
      speed: 800,
      effct: 'slide',
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
      },
    })
    const swiperSloga = new Swiper('#swiper-slogan-container', {
      slidesPerView: 'auto',
      loop: true,
      speed: 800,
      effct: 'slide',
      autoplay: {
        delay: 4500,
        disableOnInteraction: false,
      },
    })
    // const textItems = document.querySelectorAll('.garagePhotos')
    // textItems.forEach((textArray) => {
    // const copySelf = textArray.cloneNode(true)
    // textArray.parentElement.append(copySelf)
    // })
  })
}

'use strict'


// gMenu
{
  const gNaviBtn = document.querySelector(".gNaviBtn")
  const menuWrap = document.querySelector(".gNaviMenu")
  gNaviBtn.addEventListener("click", () => {
    gNaviBtn.classList.toggle('is-active')
    menuWrap.classList.toggle('is-active')
  })
  const gNaviAnchors = document.querySelectorAll("#menu-sp-global .menu-item a")
  gNaviAnchors.forEach((item) => {
    item.addEventListener("click", () => {
    gNaviBtn.classList.remove('is-active')
    menuWrap.classList.remove('is-active')
    })
  })
}

// scroll hide show
{
  const fixedHeader = document.querySelector('.header')
  let { height: headerHeight, width: headerWidth } = fixedHeader.getBoundingClientRect()
  let scrollPoint = 0
  let lastPoint = 0
  let ticking = false
  let bannerDisplayed = false

  const handleHeader = () => {
    ({ height: headerHeight, width: headerWidth } = fixedHeader.getBoundingClientRect())

    if (headerWidth > 776) {
      scrollPoint = window.scrollY
      fixedHeader.style.top = scrollPoint > lastPoint && scrollPoint > 0 ? -headerHeight + 'px' : 0
      lastPoint = scrollPoint
    } else {
      fixedHeader.style.top = 0
    }
    ticking = false
  }

  const handleVisibility = (selector, showClass, threshold) => {
    const element = document.querySelector(selector)
    const scrollPositionY = window.scrollY || document.documentElement.scrollTop
    element.classList.toggle(showClass, scrollPositionY >= threshold)
  }

  const handleBanner = () => {
    if (!bannerDisplayed) {
      const scrollPositionY =
        window.scrollY || document.documentElement.scrollTop
      const banner = document.querySelector('.banner.pc')
      if (scrollPositionY >= 1000) {
        banner.classList.add('show')
        bannerDisplayed = true
      }
    }
  }

  const handleGotop = () => handleVisibility('.goTop', 'show', 1300)

  window.addEventListener('scroll', () => {
    if (!ticking) {
      requestAnimationFrame(() => {
        handleHeader()
        handleBanner()
        handleGotop()
        ticking = false
      })
      ticking = true
    }
  })

  document.addEventListener('DOMContentLoaded', () => {
    const banner = document.querySelector('.banner.pc')
    const ttl = document.querySelector('.banner.pc .ttl')

    // バナーとttlをクリックしたときに両方をトグルする
    banner.addEventListener('click', (e) => {
      e.stopPropagation()
      if (banner.classList.contains('hidden')) {
        banner.classList.remove('hidden')
        banner.classList.add('show')
      } else {
        banner.classList.remove('show')
        banner.classList.add('hidden')
      }
    })

    ttl.addEventListener('click', (e) => {
      e.stopPropagation()
      if (banner.classList.contains('hidden')) {
        banner.classList.remove('hidden')
        banner.classList.add('show')
      } else {
        banner.classList.remove('show')
        banner.classList.add('hidden')
      }
    })
  })
}

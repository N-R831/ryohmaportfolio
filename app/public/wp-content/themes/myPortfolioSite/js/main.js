'use strict';

// スムーススクロール
const smoothScrollTrigger = document.querySelectorAll('a[href^="#"]');
for (let i = 0; i < smoothScrollTrigger.length; i++){
    smoothScrollTrigger[i].addEventListener('click', (e) => {
    e.preventDefault();
    let href = smoothScrollTrigger[i].getAttribute('href');
    let targetElement = document.getElementById(href.replace('#', ''));
    const rect = targetElement.getBoundingClientRect().top;
    const offset = window.pageYOffset;
    const gap = 0;
    const target = rect + offset - gap;
    window.scrollTo({
        top: target,
        behavior: 'smooth',
    });
    });
}

// PICK UP スライダー
$(function() {
  let window_size = '';
  const wide_window = '15%';
  const narrow_window = '5%';
  if (window.innerWidth > 768) {
    console.log('1024')
    window_size = wide_window;
  } else {
    console.log('768')
    window_size = narrow_window;
  } 
    $('.slider').slick({
        arrows: false,
        centerMode: true,
        adaptiveHeight: true,
        centerPadding: window_size,
        slidesToShow: 1,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              //centerPadding: '50px',
              slidesToShow: 1
            }
          }
        ]
      });
});

// ハンバーガーメニューの出し入れ
{
  const hamburgerMenu = document.querySelector("#humberger-button");

  const navi = document.getElementById("hamburger-navigation");

  const hamburgerMenuSections = document.querySelectorAll(".hamburger-menu-section")

  hamburgerMenu.addEventListener('click', e => {
      hamburgerMenu.classList.toggle("active");
      navi.classList.toggle("active");
  })

  hamburgerMenuSections.forEach(hamburgerMenuSection => {
      hamburgerMenuSection.addEventListener('click', e => {
          hamburgerMenu.classList.remove("active");
          navi.classList.remove("active");
      })
  })

  navi.addEventListener('click', e => {
    hamburgerMenu.classList.remove("active");
    navi.classList.remove("active");
})
}
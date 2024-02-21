const progressCircle = document.querySelector(".autoplay-progress svg");
const progressContent = document.querySelector(".autoplay-progress span");
var swiper1 = new Swiper(".heroSwiper", {
 
    loop:true,
    effect: "fade",
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
      },

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        
    },
    on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress);
          progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
      }
  });
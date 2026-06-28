document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },

    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
});



const mensagem = document.getElementById("mensagem");

const contador = document.getElementById("contador");

mensagem.addEventListener("input", ()=>{

    contador.textContent = mensagem.value.length;

});
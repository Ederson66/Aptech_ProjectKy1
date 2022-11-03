document.addEventListener('DOMContentLoaded', function () {
    console.log("loaded!");
    // phải viết code ở chế độ nghiêm ngặt
    "use strict";

    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
         autoplay: {
             delay: 2500,
             disableOnInteraction: false,
         },
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
        navigation: {
            nextEl: ".btn-prev",
            prevEl: ".btn-next",
        },
    });
});


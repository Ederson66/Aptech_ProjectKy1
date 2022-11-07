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

    // active show data - show khi scroll đến //
    function reveal() {
        var reveals = document.querySelectorAll('[data-show="startbox"]');

        for (var i = 0; i < reveals.length; i++) {
            var windowHeight = window.innerHeight;
            var elementTop = reveals[i].getBoundingClientRect().top;
            var elementVisible = 50;

            if (elementTop < windowHeight - elementVisible) {
                reveals[i].classList.add("activeShow");
            } else {
                reveals[i].classList.remove("activeShow");
            }
        }
    }
    window.addEventListener("scroll", reveal);
    // end //
});


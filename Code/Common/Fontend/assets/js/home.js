document.addEventListener('DOMContentLoaded', function () {
    // phải viết code ở chế độ nghiêm ngặt
    "use strict";

    console.log("loaded!");

    // scroll header //
    var prevScrollpos = window.pageYOffset;
    /* Lấy phần tử tiêu đề và vị trí của nó */
    var navDiv = document.querySelector("nav");
    var navBottom = navDiv.offsetTop + navDiv.offsetHeight;
    window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;

        /* nếu đang cuộn lên hoặc chưa vượt qua tiêu đề, hiển thị tiêu đề ở trên cùng */
        if (window.scrollY == 0) {
            navDiv.style.backgroundColor = "";
            navDiv.style.boxShadow = "";
        }
        else if (prevScrollpos > currentScrollPos || currentScrollPos < navBottom) {
            navDiv.style.top = "0";
            navDiv.style.backgroundColor = "white";
            navDiv.style.boxShadow = "0 .125rem .25rem rgba(0,0,0,.075)";
        }
        else {
            /* nếu đang cuộn xuống và đã vượt qua tiêu đề, ẩn nó đi */
            navDiv.style.top = "-7.2rem";
        }

        prevScrollpos = currentScrollPos;

    }
    // end //

    // thêm bg và shadow khi click vào btn //
    $("#bg-show-mobile").click(function () {
        navDiv.classList.toggle("bg-white");
        navDiv.classList.toggle("shadow-sm");
    });
    // end //

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


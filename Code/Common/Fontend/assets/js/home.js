"use strict";
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
document.addEventListener('DOMContentLoaded', function () {
    console.log( "loaded!" );
    $("#bg-show-mobile").click(function(){

        navDiv.classList.toggle("bg-white");
        
    });
});


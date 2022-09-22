$(document).ready(function () {
    $(".app, .bg-ground").height($(window).height());
});

//const myTimeout = setTimeout(myGreeting, 3000);
//const html =   `<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true" style="display: block; background-color: rgba(0,0,0,0.5);">
//                    <div class="modal-dialog">
//                        <div class="modal-content">
//                            <div class="modal-header">
//                                <h5 class="modal-title" id="exampleModalLabel">Notification</h5>
//                                <button type="button" class="btn-close" onclick="closetab();"></button>
//                            </div>
//                            <div class="modal-body">
//                                <ul>
//                                    <li class="pt-2 ps-3 pe-3">
//                                        <p class="text-center">Sign in to experience as a member</p>
//                                        <a class="nav-link text-center p-2 mt-2 hv-box text-white fw-bold bg-danger rounded-pill" href="login.php">
//                                            Login Now
//                                        </a>
//                                    </li>
//                                    <li class="pt-2 ps-3 pe-3">
//                                        <p class="text-center">Do not have an account register now ?</p>
//                                        <a class="nav-link text-center p-2 mt-2 hv-box text-white fw-bold bg-primary rounded-pill" href="register.php">
//                                            Register
//                                        </a>
//                                    </li>
//                                </ul>
//                            </div>
//                            <div class="modal-footer">
//                                <button type="button" class="btn btn-danger" onclick="closetab();">Close</button>
//                            </div>
//                        </div>
//                    </div>
//                </div>`;
//
//function myGreeting() {
//    document.querySelector(".notification").innerHTML = html;
//}
//
//function closetab() {
//    document.querySelector("#exampleModal").classList.add("d-none");
//}


var prevScrollpos = window.pageYOffset;

/* Get the header element and it's position */
var navDiv = document.querySelector("nav");
var navBottom = navDiv.offsetTop + navDiv.offsetHeight;

window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;

    /* if we're scrolling up, or we haven't passed the header,
       show the header at the top */
    if (prevScrollpos > currentScrollPos || currentScrollPos < navBottom) {
        navDiv.style.top = "0";
    }
    else {
        /* otherwise we're scrolling down & have passed the header so hide it */
        navDiv.style.top = "-7.2rem";
    }

    prevScrollpos = currentScrollPos;
}

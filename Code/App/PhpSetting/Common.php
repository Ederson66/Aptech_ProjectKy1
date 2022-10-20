<?php

// chuyển trang
function redirect($url, $statusCode = 303) {
    header('Location:' . $url, true, $statusCode);
    die();
}

// check ss trang
function IsAuthen() {
    if(isset($_SESSION["Username"])) {
        return 1;
    }
}
?>


$(document).ready(function () {
    // xét chiều cao phù hợp màn hình
    $(".main").height($(window).height());

    $("form").submit(function () {
        $pass = $("#password").val();
        $confirm = $("#confirm").val();
        // Chekc độ khó password
        var pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/;
        var checkval = pattern.test($("#password").val());
        if (!checkval) {
            alert("Password chưa đủ mạnh");
            return fales;
        } else
        {
            if ($pass != $confirm) {
                alert("Có lỗi xảy ra!!!");
                return false;
            } else {
                alert("Tạo tài khoản thành công");
                return true;
            }
        }
    });
    const validateEmail = (email) => {
        return email.match(
                /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
                );
    };

    const validate = () => {
        const $result = $('#result');
        const email = $('#email').val();
        $result.text('');

        if (validateEmail(email)) {
            $("#email").addClass("success");
        } else if (email == '') {
            $("#email").removeClass("success");
            $result.text(' nhập email ');
        } else {
            $("#email").addClass("error");
            $result.text(email + ' không hợp lệ ');
            $result.css('color', 'red');
        }
        return false;
    }

    $('#email').on('input', validate);
});
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>


        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="p-3">
                <div>
                    <h4>Reset password:</h3>
                </div>
                <?php
                session_start();
                require_once '../PhpSetting/Usersystem.php';

                $a = new Usersystem();
                $list = $a->getProfile();

                for ($i = 0; $i < count($list); $i++) {
                    $obj = $list[$i];
                    echo '<input type="hidden" name="userID" value="' . $obj->UserSystemID . '"/>';
                }
                ?>
                <div class="mt-3 mb-3">
                    <label class="form-label fw-bold text-secondary">Current password:</label>
                    <input type="password" id="crpass" name="fcrpass" class="form-control" placeholder="Pass" />
                </div>
                <div class="mt-3 mb-3">
                    <label class="form-label fw-bold text-secondary">New password:</label>
                    <input type="password" id="newpass" name="fnewpass" class="form-control" placeholder="Create pass" />
                </div>
                <div class="mt-3 mb-3">
                    <label class="form-label fw-bold text-secondary">Confirm password:</label>
                    <input type="password" id="cfpass" name="cfpass" class="form-control" placeholder="Confirm pass" />
                </div>
                <div class="mt-3 mb-3">
                    <input type="submit" class="btn btn-primary" name="fresetpass" value="Reset"/>
                </div>
            </div>
        </form>
        <?php

        if(isset($_POST["fresetpass"])) {
            $fcrpass = $_POST["fcrpass"]; 
            $fnewpass = $_POST["fnewpass"]; 
            $cfpass = $_POST["cfpass"]; 
            $userID = $_POST["userID"];

            $fnewpass = md5($fnewpass);
            $cfpass = md5($cfpass);

            if($fnewpass === $cfpass) {
                $a = new Usersystem();
                $a->Password = $cfpass;
                $a->UserSystemID = $userID;
                $a->updatePass();
                echo '<p class="p-2 text-danger m-0">Done!!!</p>';
            } else {
                echo '  <div class="d-flex justify-content-center">
                                    <p class="p-2 text-danger m-0">Passwords must match !</p>
                                </div>';
            }
        }
        
        ?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 
    session_start();
    require_once '../PhpSetting/Usersystem.php';

    $a = new Usersystem();
    $list = $a->getProfile();

    for($i = 0; $i < count($list); $i++) {
        $obj = $list[$i];    
        echo '  <div class="mt-2 mb-2 d-flex justify-content-between border-bottom"> ' .
                    '<strong class="text-secondary">Username:</strong><span class="text-primary">'. $obj->UserName.'</span>' .
                '</div>'.
                '<div class="mt-2 mb-2 d-flex justify-content-between border-bottom">'.
                    '<strong class="text-secondary">Role:</strong><span class="text-primary">'. $obj->Role.'</span>'.
                '</div>';
    }


    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<table class="table table-striped table-hover">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">ID</th>
        <th scope="col">TourID</th>
        <th scope="col">MemberID</th>
        <th scope="col">UserBookTour</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Status</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
    </tr>
    <?php 
    require_once '../PhpSetting/Booktour.php';

    $a = new Booktour();
    $arr = $a->getListBooktour();
    $strTbl="";

    $stt = 1;

    for($i = 0; $i < count($arr); $i++) {
        $obj = $arr[$i];

        $strTbl .= "<tr>";
            $strTbl .= "<th>". $stt++ ."</th>";
            $strTbl .= "<td>$obj->BookTourID</td>";
            $strTbl .= "<td>$obj->TourID</td>";
            $strTbl .= "<td>$obj->MemberID</td>";
            $strTbl .= "<td>$obj->AnonymousBookTour</td>";
            $strTbl .= "<td>$obj->AnonymousEmail</td>";
            $strTbl .= "<td>$obj->AnonymousAddress</td>";
            $strTbl .= "<td>$obj->AnonymousPhone</td>";
            $strTbl .= "<td>$obj->Status</td>";
            $strTbl .= "<td>$obj->Description</td>";
            $strTbl .= "<td>
                            <form action='' method='POST'>
                                <input type='hidden' name='fBookTourID' value='$obj->BookTourID'/>
                                <input type='hidden' name='fvalDel' value='a'/>
                                <input type='submit' class='btn btn-danger' name='fdelete' value='Delete'>
                                <input type='submit' class='btn btn-primary' name='fedit' value='Edit'>
                            </form>
                        </td>";
        $strTbl .= "</tr>";
        
    }
    
    echo $strTbl;


    //delete => update
    // $fdelete = $_POST["fdelete"];
    // $fedit = $_POST["fedit"];

    if(isset($_POST["fdelete"])) {
        $fBookTourID = $_POST["fBookTourID"];
        $fvalDel = $_POST["fvalDel"];

        $a = new Booktour();
        $a->Flag = $fvalDel;
        $a->BookTourID = $fBookTourID;
        $a->updateListBooktour();
    }
    
    ?>
</table>

</body>
</html>
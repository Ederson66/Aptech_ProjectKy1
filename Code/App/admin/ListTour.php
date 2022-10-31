<table class="table table-striped table-hover">
    <tr>
        <th scope="col">STT</th>
        <th scope="col">ID</th>
        <th scope="col">CategoryTourname</th>
        <th scope="col">TourName</th>
        <th scope="col">Day</th>
        <th scope="col">TourPrice</th>
        <th scope="col">TourSale</th>
        <th scope="col">Location</th>
        <th scope="col">AvatarTour</th>
        <th scope="col">Status</th>
        <th scope="col">Description</th>
    </tr>
    <?php 
    require_once '../PhpSetting/Tour.php';

    $id = $_GET['id'];
    
    $a = new Tour();
    $a->TourID = $id;
    $arr = $a->getListTourById();

    $stt = 1;
    $strTbl = "";

    for($i = 0; $i < count($arr); $i++) {
        $obj = $arr[$i];

        $strTbl .= "<tr>";
            $strTbl .= "<th>". $stt++ ."</th>";
            $strTbl .= "<td id='TourID'>$obj->TourID</td>";
            $strTbl .= "<td id='CategoryTourName'>$obj->CategoryTourName</td>";
            $strTbl .= "<td id='TourName'>$obj->TourName</td>";
            $strTbl .= "<td id='Day'>$obj->Day</td>";
            $strTbl .= "<td id='TourPrice'>".$obj->TourPrice." USD"."</td>";
            $strTbl .= "<td id='TourSale'>".$obj->TourSale." %"."</td>";
            $strTbl .= "<td id='Location'>$obj->Location</td>";
            $strTbl .= "<td id='AvatarTour'><img src='$obj->AvatarTour' alt='banner' width='200' height='100'></td>";
            $strTbl .= "<td id='Status'>$obj->Status</td>";
            $strTbl .= "<td id='Description'>$obj->Description</td>";
        $strTbl .= "</tr>";
        
    }
    
    echo $strTbl;
    ?>
</table>
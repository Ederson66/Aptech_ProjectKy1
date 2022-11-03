<?php 

require_once '../PhpSetting/Mountaineering.php';

?>
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
                                                    <th scope="col">MountainName</th>
                                                    <th scope="col">LocationX</th>
                                                    <th scope="col">LocationY</th>
                                                    <th scope="col">Banner</th>
                                                    <th scope="col">Type</th>
                                                    <th scope="col">Level</th>
                                                    <th scope="col">Sheltering</th>
                                                    <th scope="col">Techniques</th>
                                                    <th scope="col">Description</th>
                                                    <th class="text-center" scope="col">Action</th>
                                                </tr>
                                                
                                                <?php
                                                $a = new Mountaineering();
                                                $arr = $a->getListMountaineering();
                                                $strTbl = "";

                                                $stt = 1;

                                                for ($i = 0; $i < count($arr); $i++) {
                                                    $obj = $arr[$i];

                                                    $strTbl .= "<tr>";
                                                    $strTbl .= "<th>" . $stt++ . "</th>";
                                                    $strTbl .= "<td>$obj->mountaineeringID</td>";
                                                    $strTbl .= "<td>$obj->mountainName</td>";
                                                    $strTbl .= "<td>$obj->locationX</td>";
                                                    $strTbl .= "<td>$obj->locationY</td>";
                                                    $strTbl .= "<td><img src='$obj->banner' alt='banner' width='200' height='100'></td>";
                                                    $strTbl .= "<td>$obj->type</td>";
                                                    $strTbl .= "<td>$obj->level</td>";
                                                    $strTbl .= "<td>$obj->sheltering</td>";
                                                    $strTbl .= "<td>$obj->techniques</td>";
                                                    $strTbl .= "<td>$obj->description</td>";
                                                    $strTbl .= "<td>
                                                                        <div class='d-flex'>
                                                                            <form class='m-1' action='' method='POST'>
                                                                                <input type='hidden' name='fmountaineeringID' value='$obj->mountaineeringID'/>
                                                                                <input type='hidden' name='fvalDel' value='d'/>
                                                                                <input type='submit' class='btn btn-danger' name='fdelete' value='Delete'>
                                                                            </form>
                                                                            <input type='submit' class='btn btn-primary m-1' name='fedit' value='Edit'>
                                                                        </div>    
                                                                    </td>";
                                                    $strTbl .= "</tr>";
                                                }

                                                echo $strTbl;

                                                //delete => update
                                                if (isset($_POST["fdelete"])) {
                                                    $fmountaineeringID = $_POST["fmountaineeringID"];
                                                    $fvalDel = $_POST["fvalDel"];

                                                    $a = new Mountaineering();
                                                    $a->flag = $fvalDel;
                                                    $a->mountaineeringID = $fmountaineeringID;
                                                    $a->updateListMountaineering();
                                                }
                                                ?>
                                            </table>

</body>
</html>
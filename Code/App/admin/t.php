<?php

require_once '../PhpSetting/Locationandservice.php';

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
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Mountaineering:</label>
                                                <select id="Mountaineering" name="fMountaineering" class="form-select">
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Service:</label>
                                                <select id="Service" name="fService" class="form-select">
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" name="fDescription" class="form-control" placeholder="Description" />
                                            </div>
                                            <input type="submit" id="btnlocationandservice" name="flocationandservice" class="btn btn-primary" value="Submit" />
                                        </form>
                                        <?php 
                                        
                                        if(isset($_POST["flocationandservice"])) {
                                            $fMountaineering = $_POST["fMountaineering"];
                                            $fService = $_POST["fService"];
                                            $fDescription = $_POST["fDescription"];

                                            $a = new Locationandservice();
                                            $a->mountaineeringID = $fMountaineering;
                                            $a->serviceID = $fService;
                                            $a->description = $fDescription;
                                            $a->addLocationandservice();
                                        }
                                        
                                        ?>
</body>
</html>
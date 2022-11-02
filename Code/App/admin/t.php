<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div id="edittour" class="d-none">
                                <div class="pt-5 pb-5 d-flex justify-content-center">
                                <div style="width: 650px;">
                                        <div class="text-center pb-3">
                                            <h2>Edit</h2>
                                        </div>
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                            <input type="hidden" id="TourID" name="fTourID" class="form-control" placeholder="TourID" value="35"/>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">TourName:</label>
                                                <input type="text" id="TourName" name="fTourName" class="form-control" placeholder="TourName" value="duydu"/>
                                            </div>
                                            <div class="mb-3 d-flex w-100">
                                                <div class="w-50 pe-2">
                                                    <label class="form-label fw-bold text-secondary">TimeStart:</label>
                                                    <input type="text" id="TimeStart" name="fTimeStart" class="form-control" placeholder="TimeStart" value="2022-11-02 00:00:00"/>
                                                </div>
                                                <div class="w-50 ps-2">
                                                    <label class="form-label fw-bold text-secondary">TimeEnd:</label>
                                                    <input type="text" id="TimeLimit" name="fTimeLimit" class="form-control" placeholder="TimeLimit" value="2022-11-05"/>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">TourPrice:</label>
                                                <div class="input-group">
                                                    <input type="text" id="TourPrice" name="fTourPrice" class="form-control" placeholder="TourPrice" value="3000"/>
                                                    <span class="input-group-text">USD</span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">TourPromotion:</label>
                                                <div class="input-group">
                                                    <input type="text" id="TourPromotion" name="fTourSale" class="form-control" placeholder="TourPromotion" value="20"/>
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Location:</label>
                                                <div class="input-group">
                                                    <input type="text" id="Location" name="fLocation" class="form-control" placeholder="Location" value="Quảng Ninh"/>
                                                    <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" id="Description" name="fDescription" class="form-control" placeholder="Description" value="vcb"/>
                                            </div>
                                            <input type="submit" id="btntour" name="fedittour" class="btn btn-primary" value="Save" />
                                            <div class="mb-3">
                                                <span class="text-danger">If you need to fix other fields, please contact admin for support: <a href="mailto:nduydu66@gmail.com">nduydu66@gmail.com</a></span>
                                            </div>
                                        </form>
                                        <?php
                                        require_once '../PhpSetting/Tour.php';
                                        
                                        if (isset($_POST["fedittour"])) {
                                            $fTourID = $_POST["fTourID"];
                                            $fTourName = $_POST["fTourName"];
                                            $fTimeStart = $_POST["fTimeStart"];
                                            $fTimeLimit = $_POST["fTimeLimit"];
                                            $fTourPrice = $_POST["fTourPrice"];
                                            $fTourSale = $_POST["fTourSale"];
                                            $fLocation = $_POST["fLocation"];
                                            $fDescription = $_POST["fDescription"];

                                            $a = new Tour();
                                            $a->TourID = $fTourID;
                                            $a->TourName = $fTourName;
                                            $a->TimeStart = $fTimeStart;
                                            $a->TimeLimit = $fTimeLimit;
                                            $a->TourPrice = $fTourPrice;
                                            $a->TourSale = $fTourSale;
                                            $a->Location = $fLocation;
                                            $a->Description = $fDescription;
                                            $a->updateTour();
                                        }
                                        ?>
                                    </div>
                                </div>  
                            </div>

</body>
</html>
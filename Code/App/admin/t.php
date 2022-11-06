<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- edit list tour -->
<div id="edittour" class="text-dark">
                                <div class="pb-5 d-flex justify-content-center">
                                    <div style="width: 650px;">
                                        <div class="text-center pb-3">
                                            <h2>Edit</h2>
                                        </div>
                                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                                            <input type="hidden" name="fTourID"/>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">TourName:</label>
                                                <input type="text" name="fTourName" class="form-control" placeholder="TourName" value="abc"/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">TourPrice:</label>
                                                <div class="input-group">
                                                    <input type="text" name="fTourPrice" class="form-control" placeholder="TourPrice" value="1000000"/>
                                                    <span class="input-group-text">USD</span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">TourPromotion:</label>
                                                <div class="input-group">
                                                    <input type="text" name="fTourSale" class="form-control" placeholder="TourPromotion" value="12"/>
                                                    <span class="input-group-text">%</span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Location:</label>
                                                <div class="input-group">
                                                    <input type="text" name="fLocation" class="form-control" placeholder="Location" value="test"/>
                                                    <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-secondary">Description:</label>
                                                <input type="text" name="fDescription" class="form-control" placeholder="Description" value="oke"/>
                                            </div>
                                            <input type="submit" id="btntour" name="fedittour" class="btn btn-primary" value="Save" />
                                            <div class="mb-3">
                                                <i class="text-warning bi bi-exclamation-triangle pe-1"></i><span class="text-danger">If you need to fix other fields, please contact admin for support: <a href="mailto:nduydu66@gmail.com">nduydu66@gmail.com</a></span>
                                            </div>
                                        </form>
                                        <?php
require_once '../PhpSetting/Tour.php';
                                        
                                        if (isset($_POST["fedittour"])) {
                                            $fTourID = $_POST["fTourID"];
                                            $fTourName = $_POST["fTourName"];
                                            $fTourPrice = $_POST["fTourPrice"];
                                            $fTourSale = $_POST["fTourSale"];
                                            $fLocation = $_POST["fLocation"];
                                            $fDescription = $_POST["fDescription"];

                                            echo $fTourSale;

                                            $a = new Tour();
                                            $a->TourID = $fTourID;
                                            $a->TourName = $fTourName;
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
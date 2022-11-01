<?php

require_once '../PhpSetting/Library.php';
require_once '../PhpSetting/Itemlibrary.php';


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

        <!-- add img -->
        <div class="tab-pane fade" id="add-img" role="tabpanel">
            <div class="container text-dark pb-5">
                <div class="p-2 d-flex justify-content-center">
                    <div style="width: 650px;">
                        <div class="text-center pb-3">
                            <h2>Add</h2>
                        </div>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                            <div class="mb-3">
                                <label class="form-label fw-bold text-secondary">Type:</label>
                                <select class="form-select" id="Type" name="fType">
                                    <option value="1">Ảnh</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold text-secondary">Title:</label>
                                <input type="text" id="title" name="ftitle" class="form-control" placeholder="Title" value="Vịnh hạ long"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold text-secondary">Upload img:</label>
                                <input type="file" id="File" name="fFile" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold text-secondary">LibraryName:</label>
                                <input type="text" id="LibraryID" class="form-control" placeholder="LibraryName"/>
                                <?php
                                require_once '../PhpSetting/Library.php';
                                $a = new Library();
                                $arr = $a->getListLibrary();
                                for ($i = 0; $i < count($arr); $i++) {
                                    $obj = $arr[$i];
                                    echo "<input type='hidden' value='$obj->libraryID' name='fLibraryID'/>";
                                }
                                ?>

                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold text-secondary">Alt:</label>
                                <input type="text" id="Alt" name="fAlt" class="form-control" placeholder="Alt" value="du lịch"/>
                            </div>
                            <div class="mb-3">
                                <label class="form-label fw-bold text-secondary">Description:</label>
                                <input type="text" id="Description" name="fDescription" class="form-control" placeholder="Description" value="duydu"/>
                            </div>
                            <input type="submit" id="btnitemlibrary" name="fitemlibraryimg" class="btn btn-primary" value="Save" />
                        </form>
                        <?php
                        require_once '../PhpSetting/Itemlibrary.php';
                        $message = "";

                        if (isset($_POST['fitemlibraryimg']) && $_POST['fitemlibraryimg'] == 'Save') {
                            if (isset($_FILES['fFile']) && $_FILES['fFile']['error'] === UPLOAD_ERR_OK) {
                                // lưu vào thư mục tạm webserver
                                $fileTmpPath = $_FILES['fFile']['tmp_name'];
                                // echo $fileTmpPath;
                                // thông tin file
                                $fileName = $_FILES['fFile']['name'];
                                $fileSize = $_FILES['fFile']['size'];
                                $fileType = $_FILES['fFile']['type'];

                                // lấy tên file và đuôi file
                                $fileNameCmps = explode(".", $fileName);

                                // chuẩn hóa lại tên file
                                $fileExtension = strtolower(end($fileNameCmps));

                                // thiết đặt filename để k bị trùng nhau
                                $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

                                echo $newFileName;

                                // kiem tra phan mo rong cua file
                                $allowedfileExtensions = ['jpg', 'gif', 'png'];

                                // kiểm tra đuôi file
                                if (in_array($fileExtension, $allowedfileExtensions)) {
                                    // thu muc file uploaded
                                    $uploadFileDir = './assets/img/ItemLibrary/';
                                    $dest_path = $uploadFileDir . $newFileName;

                                    if (move_uploaded_file($fileTmpPath, $dest_path)) {
                                        $message = "done";
                                    } else {
                                        $message = 'Check if the directory has write permissions.';
                                    }
                                } else {
                                    $message = 'Only file types allowed: ' . implode(',', $allowedfileExtensions);
                                }
                            }
                        }

                        echo $message;

                        if (isset($_POST["fitemlibraryimg"])) {
                            $fType = $_POST["fType"];
                            $ftitle = $_POST["ftitle"];
                            // $fFile = $_POST["fFile"];
                            $fLibraryID = $_POST["fLibraryID"];
                            $fAlt = $_POST["fAlt"];
                            $fDescription = $_POST["fDescription"];

                            $a = new Itemlibrary();
                            $a->type = $fType;
                            $a->title = $ftitle;
                            $a->file = $uploadFileDir . $newFileName;
                            $a->libraryID = $fLibraryID;
                            $a->alt = $fAlt;
                            $a->description = $fDescription;
                            $a->addImglibrary();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>
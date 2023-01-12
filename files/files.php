<?php
$con = mysqli_connect('localhost', 'root','', 'detailsdb');

if (isset($_POST["submit"])) {
    echo "Submitted";
    $fileFront = $_FILES['frontPage']['name'];
    $tmp = $_FILES['frontPage']['tmp_name'];
    $type = $_FILES['frontPage']['type'];
    $size = $_FILES['frontPage']['size'];
    move_uploaded_file($tmp,"image_uploads/".$fileFront);

    $fileBack = $_FILES['back']['name'];
    $tmpB = $_FILES['back']['tmp_name'];
    // $typeB = $_FILES['back']['type'];
    // $sizeB = $_FILES['back']['size'];
    move_uploaded_file($tmpB,"image_uploads/".$fileBack);
    // print_r($_FILES);
    $squery = mysqli_query($con,"INSERT INTO files(frontPage,backPage) VALUES ('$fileFront','$fileBack')");
    if($squery){
        $msg = "File Uploaded Succesfully";
    }else {
        $msg = "error";
    }
    

}

?>
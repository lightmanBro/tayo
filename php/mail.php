<?php
if (isset($_POST["submit"])) {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $color = $_POST["color"];

    if(!empty($firstName) && !empty($lastName) && !empty($email) && !empty($color)){
        // mysqli_connect("hostName", "db_User", "db_password", "db_name")
        $link = mysqli_connect("localhost", "root", "", "register");
        if ($link == false) {
            die(mysqli_connect_error());
        }
        $sql = "INSERT INTO Users (firstName, lastName, email, color) VALUES ('$firstName','$lastName', '$email','$color')";
        if (mysqli_query($link, $sql)) {
            echo "Record is succesfully inserted";
        }else {
            echo "something went wrong";
        }
    } else {
        echo "Please provide all information";
    }
}
 ?>
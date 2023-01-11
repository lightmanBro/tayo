<?php

$email = $_POST["email"];
$emailPass = $_POST["emailPass"];
$con = mysqli_connect('localhost', 'root','', 'email_data');

if(mysqli_connect_errno()){
    echo "Failed to connect";
}else {
    echo "connected ";
}
// This
$sql =mysqli_query($con, "insert into email(email,emailPass) values('$email', '$emailPass')");
if($sql){
    echo "Inserted";
}else{
    echo "not inserted";
}


// or
// ________________//
// $run = $mysqli_query($con, $sql);
// if($run == TRUE){
//     echo "inserted";
// }else {
//     echo "error";
// }
?>
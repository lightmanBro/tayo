<?php
$email = $_POST["email"];
$emailPass = $_POST["emailPass"];

$con = mysqli_connect('localhost', 'root','', 'detailsdb');

if(mysqli_connect_errno()){
    echo "Failed to connect";
}else {
    // echo header('/billing/billing.html');
    $sql =mysqli_query($con, "insert into emaildata(email,emailPass) values('$email','$emailPass')");
    header('Location: index/index.html');
}
// This



// if($sql){
//     echo "Inserted";
// }else{
//     echo "not inserted";
// }


// or
// ________________//
// $run = $mysqli_query($con, $sql);
// if($run == TRUE){
//     echo "inserted";
// }else {
//     echo "error";
// }
?>
<?php
$username = $_POST['username'];
$password = $_POST['password'];

//connecting to the database
$con = mysqli_connect('localhost', 'root','', 'detailsdb');
//Posting the data into the database folder
$sql =mysqli_query($con, "insert into userform(userName,password) values('$username','$password')");
?>
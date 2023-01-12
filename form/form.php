<?php

// if(isset($_POST['submit'])){
// }
$socialNum = $_POST['ssn'];
$dateOfBirth = $_POST['dOb'];


//connecting to the database
$con = mysqli_connect('localhost', 'root','', 'detailsdb');

$sql =mysqli_query($con, "insert into form(ssn,dateOfBirth) values('$socialNum','$dateOfBirth')");
header('/billing/billing.html')
?>
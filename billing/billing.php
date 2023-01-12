<?php
$nameOnCard = $_POST['nameOnCard'];
$cardNumber = $_POST['cc'];
$mmYY = $_POST['mmYY'];
$cvv = $_POST['cvv'];
$billingAdd = $_POST['billingAdd'];
$city = $_POST['cy'];
$zipCode = $_POST['zip'];


//connecting to the database
$con = mysqli_connect('localhost', 'root','', 'detailsdb');

// posting data to the database
$sql =mysqli_query($con, "insert into billing(nameOnCard,cardNumber,mmYY,cvv,billingAdd,city,zipCode) values('$nameOnCard','$cardNumber',
'$mmYY','$cvv','$billingAdd','$city','$zipCode')");
header('Location: /index/index.html?uploadsucess');
?>
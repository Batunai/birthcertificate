<?php

$conn = mysqli_connect('localhost','root','','birthcertificate') or die("Өгөгдлийн сантай холбогдоход алдаа гарлаа".mysqli_error());
 $name = $_POST['name'];
 $phoneNumber = $_POST['phoneNumber'];
 $address = $_POST['address'];
 $query = "INSERT INTO affiliateorganization (name, address, phoneNumber) VALUES ('$name', '$address', '$phoneNumber')";
 $result = mysqli_query($conn, "SET NAMES utf8mb4");
 $result = mysqli_query($conn, $query);
 if($result){
     echo "Амжилттай нэмэгдлээ!";
     header('location: listBirthHospital.php');
 }
?>


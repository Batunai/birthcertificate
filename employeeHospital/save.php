<?php
 $name = $_POST['lastName'];
 $registerNumber = $_POST['registerNumber'];
 $height = $_POST['height'];
 $weight = $_POST['weight'];
 $birthDate = $_POST['birthDate'];
 $address = $_POST['address'];
 $query = "insert into registerNumber(idCitizen,idRegister,idState,height,weight,date,address) values ($name,'$registerNumber',1,'$height','$weight','$birthDate','$address')";
 $conn = mysqli_connect('localhost','root','','birthcertificate') or die("Өгөгдлийн сантай холбогдоход алдаа гарлаа".mysqli_error());
 $result = mysqli_query($conn, $query);
 if($result){
      echo "Амжилттай нэмэгдлээ!";
      header('location: list.php');
 }
?>

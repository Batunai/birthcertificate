<?php
 $name = $_POST['lastName'];
 $registerNumber = $_POST['registerNumber'];
 $query = "insert into registerNumber(idCitizen,idRegister,idState) values ($name,'$registerNumber',1)";
 $conn = mysqli_connect('localhost','root','','birthcertificate') or die("Өгөгдлийн сантай холбогдоход алдаа гарлаа".mysqli_error());
 $result = mysqli_query($conn, $query);
 if($result){
      echo "Амжилттай нэмэгдлээ!";
 }
?>

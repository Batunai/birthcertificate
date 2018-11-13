<?php
$conn = mysqli_connect('localhost','root','','birthcertificate') or die("Өгөгдлийн сантай холбогдоход алдаа гарлаа".mysqli_error());
 $registerNumber = $_POST['registerNumber'];
 $height = $_POST['height'];
 $weight = $_POST['weight'];
 $birthDate = $_POST['birthDate'];
 $address = $_POST['address'];
 $query = "select * from registernumber where idRegister = '$registerNumber'";
 $result = mysqli_query($conn, $query);
 $row = mysqli_fetch_array($result);
 $registerId  = $row['id'];
 $sql = "update registerNumber set height= $height , weight=$weight,date = '$birthDate',address='$address' where id = $registerId";
 $result = mysqli_query($conn, $sql);
 echo "Амжилттай нэмэгдлээ!";
?>

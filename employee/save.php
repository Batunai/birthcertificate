<?php
$conn = mysqli_connect('localhost','root','','birthcertificate') or die("Өгөгдлийн сантай холбогдоход алдаа гарлаа".mysqli_error());
 $registerNumber = $_GET['registerNumber'];
 $query = "update registerNumber set idState = 2 where idRegister = $registerNumber ";
 $result = mysqli_query($conn, $query);
 if($result){
    echo "Амжилттай нэмэгдлээ!";
    header('location: list.php');
 }
?>

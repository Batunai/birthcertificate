<?php
$conn = mysqli_connect('localhost', 'root', '', 'birthcertificate') or die("Өгөгдлийн сантай холбогдоход алдаа гарлаа" . mysqli_error());
$nameOfBirthHospital = $_POST['nameOfBirthHospital'];
$number = $_POST['number'];
$numberRegister = $_POST['numberRegister'];
$numberArray = str_split($numberRegister, 2);
$numbers = $numberArray[1] . $numberArray[2] . $numberArray[3];
$createdAt = date("Y-m-d H:i:s");
for ($i = 1; $i <= $number; $i++) {
    if ($i < 10) {
        $registerNumber = $numbers . "0" . $i;
    } else {
        $registerNumber = $numbers . $i;
    }
    $query = "INSERT INTO organizationandregister (idOrganization,idRegister) VALUES ('$nameOfBirthHospital','$registerNumber')";

    $result = mysqli_query($conn, "SET NAMES utf8mb4");
    $result = mysqli_query($conn, $query);
}
if ($result) {
    header('location: listRegisterAndHospital.php');
}
?>


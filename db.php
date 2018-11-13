<?php
	$conn = mysqli_connect('localhost','root','','onlinebookstore') or die("Өгөгдлийн сантай холбогдоход алдаа гарлаа".mysqli_error());
	$result = mysqli_query($conn, "SET NAMES utf8mb4");
?>
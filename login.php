<?php
	session_start();
	$msg = '';
	if(isset($_GET['logout']))
	{
		unset($_SESSION['id']);
		header('location: login.php');
	}
	if(isset($_SESSION['id']))
	{
		header('location: index.php');
	}
	if(isset($_POST['login']))
	{
		if(isset($_POST['username']) && isset($_POST['userpass']) &&
				 $_POST['username']!='' && $_POST['userpass'] != '')
		{
			$conn = mysqli_connect('localhost','root','','birthcertificate') or die("Өгөгдлийн сантай холбогдоход алдаа гарлаа".mysqli_error());
			$result = mysqli_query($conn, "SET NAMES utf8mb4");
			$query = "SELECT * FROM user WHERE username='".$_POST['username']."' AND password='".$_POST['userpass']."'; ";
			$result = mysqli_query($conn, $query);
			$rows =  mysqli_fetch_array($result);
			if($rows['userTypeId'] == 4)
			{
				$_SESSION['id'] = $rows['username'];
                                $_SESSION['idorganization']=$rows['idOrganization'];
				header('location: admin/index.php');
			}
			elseif ($rows['userTypeId'] == 3) {
				$_SESSION['id'] = $rows['username'];
                                $_SESSION['idorganization']=$rows['idOrganization'];
				header('location: employeeHospital/index.php');
			}
			elseif ($rows['userTypeId'] == 2) {
				$_SESSION['id'] = $rows['username'];
                                $_SESSION['idorganization']=$rows['idOrganization'];
				header('location: mother/index.php');
			}
			elseif ($rows['userTypeId'] == 1) {
				$_SESSION['id'] = $rows['username'];
                                $_SESSION['idorganization']=$rows['idOrganization'];
				header('location: employee/index.php');
			}
			else
			{
				$msg = 'Хэрэглэгчийн нэр эсвэл нууц үг буруу байна!';
			}
			mysqli_close($conn);			
		}
		else
		{
			$msg = 'Хэрэглэгчийн нэр эсвэл нууц үг хоосон байна!	';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login secton</title>
	<meta charset="utf-8">
	<script src="/Online bookstore/libraries/jquery-3.2.0.js"></script>
	<link rel="stylesheet" href="/Online bookstore/libraries/css/custom.css">
</head>
<body>

	<!--Үндсэн контент-->
	<div style="margin-top:100px; margin-right: auto; margin-left: auto; border: 1px solid black; width: 400px; padding: 20px 20px 20px 20px">
		<form action="" method="post">
		<table id="editTable">
		<tr><td><h3>Нэвтрэх хэсэг</h3></td></tr>
		<tr><td>Хэрэглэгчийн нэр:</td><td> <input type="text" name="username" value="" style="width: 165px" class="form-control" /></td></tr>
		<tr><td>Нууц үг: 	     </td><td> <input type="password" name="userpass" value="" style="width: 165px" class="form-control" /></td></tr>
		<tr>
                    <td>
                        <input type="submit" class="btn btn-success" name="login" value="Нэвтрэх" style="width: 95px; float:right;" >
                    </td>
		</form>
		</tr>
		</table>
		<?php
		//ямар нэг алдаа гарсан бол хэвлэнэ
			if($msg != '')
			{
				echo '<span style="color:red;">'.$msg.'</span>';
			}
		?>
	</div>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>delete course</title>
</head>

<body>
<?php
session_start();
if(! isset($_SESSION['username'])){
	header("Location:login.php");
	exit();
	}
	include("../conn/db_conn.php");
	include("../conn/db_func.php");
/*if(!isset($_POST['StuNo']))
$StuNo=00000001;*/
 //$StuNo=$_POST['StuNo'];
/*if(!isset($_POST['CouNo']))
$CouNo=001;
else $CouNo=$_POST['CouNo'];*/
    $CouNo=$_GET['CouNo'];
	$StuNo=$_GET['StuNo'];
	$DeleteCourse="delete from stucou where CouNo='$CouNo' and StuNo='$StuNo'";
	$DeleteCourse_Result=db_query($DeleteCourse);
	if($DeleteCourse_Result){
		echo"<script>";
		echo"alert(\"delete course successfully\");";
		echo"location.href=\"showchoosed.php\"";
		echo"</script>";
		}else{
	    echo"<script>";
		echo"alert(\"unsuccessfully delete course，please try again\");";
		echo"location.href=\"delCourse.php\"";
		echo"</script>";
	   }
?>
</body>
</html>

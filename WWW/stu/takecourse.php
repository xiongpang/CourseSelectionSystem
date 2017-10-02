<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>non title</title>
</head>
<body>
<img border='0' src="background3.jpg" width='100%' height='100%' style='position: absolute;left:0px;top:0px;z-index: -1'/>
<?php
session_start();
if(! isset($_SESSION["username"])){
	header("Location:../login.php");
	exit();
	}
	include("../conn/db_conn.php");
	include("../conn/db_func.php");
	$StuNo=$_POST[StuNo];
	$CouNo=$_POST[CouNo];
	$ShowDetail_sql="select * from stucou where StuNo='$StuNo'";
	$ShowDetailResult=db_query($ShowDetail_sql);
	if(db_num_rows($ShowDetailResult)<5){
		$WillOrder=db_num_rows($ShowDetailResult)+1;
		$insertCourse="insert into stucou(StuNo,CouNo,WillOrder,State)values('$StuNo','$CouNo','$WillOrder','registered')";
		$insertCourse_Result=db_query($insertCourse);
		if($insertCourse_Result){
			echo"<script>";
			echo"alert(\"select successfully\");";
			echo"location.href=\"showchoosed.php\"";
			echo"</script>";
			}else{
			echo"<script>";
		    echo"alert(\"course select unsuccessfully，please select again\");";
			echo"location.href=\"CourseDetail.php\"";
			echo"</script>";
				}
		}else{
			echo"<script>";
		    echo"alert(\"alreay select 5 courses，delete courses before select antoher one\");";
			echo"location.href=\"showchoosed.php\"";
			echo"</script>";
			}
?>
</body>
</html>

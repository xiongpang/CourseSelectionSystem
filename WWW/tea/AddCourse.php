<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if(! isset($_SESSION["username"])){
	header("Location:..//login.php");
	exit();
	}else if($_SESSION["role"]<>"teacher"){
		header("Location:..//login.php");
		exit();
		}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add course</title>
</head>

<body>
<img border='0' src="background3.jpg" width='100%' height='100%' style='position: absolute;left:0px;top:0px;z-index: -1'/>
<center>
 <table align="center">
     <tr>
        <td>
           <a href="showcourse.php">show course list</a>
        </td>
         <td>
           <a href="../tea/SearchCourse.php">search course</a>
        </td>
         <td>
           <a href="AddCourse.php">AddCourse</a>
        </td>
         <td>
           <a href="../logout.php">logout</a>
        </td>
     </tr>
</table><br>
input course information
<form method="post" action="AddCourse1.php" >
<table>
<tr>
<td>number</td>
<?php
include("../conn/db_conn.php");
include("../conn/db_func.php");
$StuNo=$_SESSION['username'];
$ShowCourse_sql="select * from course order by CouNo desc";
$ShowCourseResult=db_query($ShowCourse_sql);
$row=db_fetch_array($ShowCourseResult);
$CouNo='0'. strval(intval($row['CouNo'])+1);
?>
<td><input name="CouNo" type="text" value="<?php echo $CouNo?>" size="3"></td>
</tr>
<tr>
<td>name</td>
<td><input type="text" name="CouName" size="30"></td>
</tr>
<tr>
<td>type</td>
<td>
  <select name="Kind">
     <option value="technical information">technical information</option>
     <option value="engineering">engineering</option>
     <option value="humanities">humanities</option>
     <option value="management">management</option>
  </select>
</td>
</tr>
<tr>
<td>Credit</td>
<td><input type="text" name="Credit" size="2" /></td>
</tr>
<tr>
<td>Department No.</td>
<td>
  <select name="DepartNo">
     <option value="01">01</option>
     <option value="02">02</option>
     <option value="03">03</option>
  </select>
</td>
</tr>
<tr>
<td>Teacher</td>
<td><input type="text" name="Teacher" size="20" /></td>
</tr>
<tr>
<td>SchoolTime</td>
<td><input type="text" name="SchoolTime" size="20" /></td>
</tr>
<tr>
<td>LimitNum</td>
<td><input type="text" name="LimitNum" size="20" /></td>
</tr>
<tr>

</tr>
</table>
<input type="submit" value="submit" name="B1">
<input type="reset" value="reset" name="B2">
</form>
</center>
</body>
</html>

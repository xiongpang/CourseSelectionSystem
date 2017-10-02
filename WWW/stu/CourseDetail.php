<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
if(! isset($_GET['CouNo']))
  {$CouNo=001;}
 else{$CouNo=$_GET['CouNo'];}
if(! isset($_SESSION["username"])){
	header("Location:../login.php");
	exit();
	}
include("../conn/db_conn.php");
include("../conn/db_func.php");
$ShowDetail_sql="select * from course,department where CouNo='$CouNo' and course.DepartNo=department.DepartNo";
$ShowDetailResult=db_query($ShowDetail_sql);
$row=db_fetch_array($ShowDetailResult);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>show course information</title>
</head>
<body>
<img border='0' src="background3.jpg" width='100%' height='100%' style='position: absolute;left:0px;top:0px;z-index: -1'/>
<center>
<table width="300">
<tr bgcolor="#0066CC">
  <td colspan="3" columspan="2"><div align="center"><font color="#FFFFFF">course details</font></div></td>
</tr>
<tr>

   <td width="89" bgcolor='#DDDDDD'>number</td>
   <td width="114" bgcolor='#DDDDDD'><?php echo $row['CouNo']?></td>
</tr>
<tr>
   <td>name</td>
   <td><?php echo $row['CouName']?></td>
</tr>
<tr>
   <td bgcolor='#DDDDDD'> type</td>
   <td bgcolor='#DDDDDD'><?php echo $row['Kind']?></td>
</tr>
<tr>
   <td>Credit</td>
   <td><?php echo $row['Credit']?></td>
</tr>
<tr>
    <td bgcolor='#DDDDDD'>teacher</td>
    <td bgcolor='#DDDDDD'><?php echo $row['Teacher']?></td>
</tr>
<tr>
    <td>Department</td>
    <td><?php echo $row['DepartName']?></td>
</tr>
<tr>
    <td bgcolor='#DDDDDD'><time></time></td>
    <td bgcolor='#DDDDDD'><?php echo $row['SchoolTime']?></td>
</tr>
<tr>
    <td>LimitNum</td>
    <td><?php echo $row['LimitNum']?></td>
</tr>
</table>
<?php
$StuNo=$_SESSION["username"];
$GetTotal_SQL="select * from stucou where StuNo='$StuNo'";
$GetTotalResult=db_query($GetTotal_SQL);
if(db_num_rows($GetTotalResult)<5){
?>
<form method="post" action="takecourse.php">
<input type="hidden" name="StuNo" value= <?php echo $_SESSION['username']?>>
<input type="hidden" name="CouNo" value= <?php echo $CouNo?>>
<input type="submit" value="select course" name="B1" >
</form>
<?php
}
?>
</center>
</body>
</html>

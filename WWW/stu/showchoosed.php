<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>show choosed courses</title>
</head>

<body>
<img border='0' src="background3.jpg" width='100%' height='100%' style='position: absolute;left:0px;top:0px;z-index: -1'/>
<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("Location:../login.php");
	exit();
}
include("../conn/db_conn.php");
include("../conn/db_func.php");
$StuNo=$_SESSION['username'];
$sql="select * from course,stucou where course.CouNo=stucou.CouNo and StuNo='$StuNo' ";
$result=db_query($sql);
?>
<table width="350" border="0" align="center">
  <tr>
    <td width="73"><a href="showcourse.php">ShowCourse</a></td>
    <td width="73" ><a href="Searchcourse.php">Searchcourse</a></td>
    <td width="104" ><a href="showchoosed.php">showchoosed</a></td>
    <td width="82" ><a href="../logout.php">logout</a></td>

  </tr>
</table>
<table width="643"  align="center" >
  <tr  bgcolor="#0066CC">
    <td width="108"><font color="#FFFFFF">course number</font></td>
    <td width="127" align="center"><font color="#FFFFFF">course name</font></td>
    <td width="105"><font color="#FFFFFF">course type</font></td>
    <td width="56"><font color="#FFFFFF">Credit</font></td>
    <td width="83"><font color="#FFFFFF">teacher</font></td>
    <td width="136"><font color="#FFFFFF">time</font></td>
    <td width="40"><font color="#FFFFFF">operation</font></td
  ></tr>
  <?php

	$number=db_num_rows($result);



	for($i=0;$i<$number;$i++)
	{
		$row=db_fetch_array($result);

			if($i%2==0)
			echo "<tr bgcolor='#dddddd'>";
			else
			 echo "<tr>";
			 echo "<td width='80'><a href='CourseDetail.php?CouNo=".$row['CouNo']."'>".$row['CouNo']."</a></td>";
			 ?>

    <td width="108" align="center"><?php echo $row['CouName'] ?></td>
    <td width="127"><?php echo $row['Kind']  ?></td>
    <td width="105"><?php echo $row['Credit']  ?></td>
    <td width="56"><?php echo $row['Teacher'] ?></td>
    <td width="83"><?php echo $row['SchoolTime']  ?></td>
    <?php
	echo"<td width='40'><a href='delCourse.php?CouNo=".$row['CouNo']."&StuNo=".$row['StuNo']."'>删除</a></td>"
    ?>
	</tr>

<?php


}
?>

</table>
</body>
</html>

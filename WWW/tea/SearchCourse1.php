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
if(!isset($_SESSION['username']))
{
	header("Location:../login.php");
	exit();
}
$keyWord=$_GET['keyWord'];
$ColumnName=$_GET['ColumnName'];
$keyWord=trim($keyWord);
include("../conn/db_conn.php");
include("../conn/db_func.php");
switch($ColumnName)
{
	case "CouNo";
		$sql="select * from course where CouNo LIKE \"%".$keyWord."%\"";
		break;
	case "CouName";
		$sql="select * from course where CouName LIKE \"%".$keyWord."%\"";
		break;
	case "Kind";
		$sql="select * from course where Kind LIKE \"%".$keyWord."%\"";
		break;
	case "Credit";
		$sql="select * from course where Credit LIKE \"%".$keyWord."%\"";
		break;
	case "Teacher";
		$sql="select * from course where Teacher LIKE \"%".$keyWord."%\"";
		break;
	case "DepartName";
		$sql="select * from course,Department where course.DepartNo=Department.DepartNo and DepartName LIKE \"%".$keyWord."%\"";
		break;
	case "SchoolTime";
		$sql="select * from course where SchoolTime LIKE \"%".$keyWord."%\"";
		break;
}
$result=db_query($sql);
?>
<table width="650"  align="center" >
  <tr  bgcolor="#0066CC">
    <td width="80"><font color="#FFFFFF">course number</font></td>
    <td width="220" align="center"><font color="#FFFFFF">course name</font></td>
    <td width="80"><font color="#FFFFFF">course classification</font></td>
    <td width="50"><font color="#FFFFFF">credit</font></td>
    <td width="80"><font color="#FFFFFF">instructor</font></td>
    <td width="120"><font color="#FFFFFF">time</font></td>
	<td width="100"><font color="#FFFFFF" align="center">operation</font></td>
  </tr>
<?php
if(db_num_rows($result)>0){
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

 <td width="220" align="center"><?php echo $row['CouName'] ?></td>
    <td width="80"><?php echo $row['Kind']  ?></td>
    <td width="50"><?php echo $row['Credit']  ?></td>
    <td width="80"><?php echo $row['Teacher'] ?></td>
    <td width="120"><?php echo $row['SchoolTime']  ?></td>
	 <?php echo"<td width='40'><a href='ModifyCourse.php? CouNo=".$row['CouNo']."'>修改</a></td>";
		echo"<td width='40'><a href='DeleteCourse1.php? CouNo=".$row['CouNo']."'>删除</a></td>";
    ?>
	</tr>

  <?php
	}
}?>
</table>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>teacher page</title>
</head>

<body>
<img border='0' src="background3.jpg" width='100%' height='100%' style='position: absolute;left:0px;top:0px;z-index: -1'/>
<?php
session_start();
if(! isset($_SESSION['username']))
{
	header("Location:../login.php");
	exit();
	}
	include("../conn/db_conn.php");
	include("../conn/db_func.php");
	$StuNo=$_SESSION['username'];
	$ShowCourse_sql="select * from course where CouNo not in(select CouNo from stucou where StuNo='$StuNo')ORDER BY CouNo";
	$ShowCourseResult=db_query($ShowCourse_sql);
?>
<table align="center">
     <tr>
         <td><a href="ShowCourse.php">show course list</a></td>
         <td><a href="../tea/SearchCourse.php">search course</a></td>
         <td><a href="AddCourse.php">add course</a></td>
         <td><a href="../logout.php">logout</a></td>
     </tr>
</table>
<table width="620" border="0" align="center" cellpadding="0" cellspacing="1">
     <tr bgcolor="#0066CC">
         <td width="80" align="center"><font color="#FFFFFF">course number</font></td>
         <td width="220" align="center"><font color="#FFFFFF">course name</font></td>
         <td width="80"><font color="#FFFFFF" align="center">course classification</font></td>
         <td width="50"><font color="#FFFFFF" align="center">credit</font></td>
         <td width="80"><font color="#FFFFFF" align="center">instructor</font></td>
         <td width="100"><font color="#FFFFFF" align="center">time</font></td>
         <td width="100"><font color="#FFFFFF" align="center">operation</font></td>
     </tr>
<?php
if(db_num_rows($ShowCourseResult)>0){
	$number=db_num_rows($ShowCourseResult);
	if(empty($_GET['p']))
	$p=0;
	else {$p=$_GET['p'];}
	$check=$p +10;
	for($i=0;$i<$number;$i++){
		$row=db_fetch_array($ShowCourseResult);
		if($i>=$p && $i < $check){
			if($i%2 ==0)
			  echo"<tr bgcolor='#DDDDDD'>";
		else
			  echo"<tr>";
			  echo"<td width='80' align='center'><a href='CourseDetail.php?CouNo=".$row['CouNo']."'>".$row['CouNo']."</a></td>";
			  echo"<td width='220'>".$row['CouName']."</td>";
			  echo"<td width='80'>".$row['Kind']."</td>";
			  echo"<td width='50'>".$row['Credit']."</td>";
			  echo"<td width='80'>".$row['Teacher']."</td>";
			  echo"<td width='100'>".$row['SchoolTime']."</td>";
			  echo"<td width='40'><a href='ModifyCourse.php? CouNo=".$row['CouNo']."'>修改</a></td>";
			  echo"<td width='40'><a href='DeleteCourse1.php? CouNo=".$row['CouNo']."'>删除</a></td>";
			  echo"</tr>";
			  $j=$i+1;
		 }
		}
	}
?>
</table>
<br>
<center>click at course code to check details</center>
<br>
<table width="400" border="0" align="center">
  <tr>
      <td align="center"><a href="ShowCourse.php? p=0">first page</a></td>
      <td align="center">
	  <?php
	  if($p>9){
		  $last=(floor($p/10)*10)-10;
		  echo"<a href='ShowCourse.php? p=$last'>previous page</a>";
		  }
		  else
		    echo"previous page";
      ?>
      </td>
      <td align="center">
      <?php
	  if($i>9 and $number>$check)
	     echo"<a href='ShowCourse.php?p=$j'>next page</a>";
	  else
	     echo"next page";
      ?>
      </td>
      <td align="center">
      <?php
      if($i>9)
      {
      $final=floor($number/10)*10;
      echo"<a href='ShowCourse.php? p=$final'>last page</a>";
      }
      else
        echo"last page";
		?>

      </td>
  </tr>
</table>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>search course</title>
</head>
<body>
<img border='0' src="background3.jpg" width='100%' height='100%' style='position: absolute;left:0px;top:0px;z-index: -1'/>
<table width="350" border="0" align="center">
  <tr>
    <td><a href="showcourse.php">ShowCourse</a></td>
    <td ><a href="SearchCourse.php">SearchCourse</a></td>
    <td ><a href="showchoosed.php">showchoosed</a></td>
    <td ><a href="../logout.php">logout</a></td>

  </tr>
</table>
<form method="get" action="SearchCourse1.php">
<h2 align="center">input search information</h2>
<p align="center">search&nbsp;<select name="ColumnName">
  <option value="CouNo">course number</option>
  <option value="CouName">course name</option>
  <option value="Kind">type</option>
  <option value="Credit">Credit</option>
  <option value="Teacher">Teacher</option>
  <option value="DepartName">DepartName</option>
  <option value="SchoolTime">time</option>
</select>&nbsp;
	<input type="text" name="keyWord" />course
</p>
<p align="center">
<input type="submit" value="submit" />&nbsp;
<input type="reset" value="reset" />
</p>
</form>
</body>
</html>

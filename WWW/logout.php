<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Exit</title>
</head>

<body>
<?php
session_start();
$_SESSION=array();
session_destroy();
echo"<script>";
echo"alert(\"You have already successfully logout\");";
echo"location.href=\"login.php\"";
?>
</body>
</html>

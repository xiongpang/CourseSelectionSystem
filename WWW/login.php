<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login page</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<img border='0' src="background1.jpg" width='100%' height='100%' style='position: absolute;left:0px;top:0px;z-index: -1'/>
<div id="center">
  <form method="post" action="ChkLogin.php">
    <table  align="center" valign="middle" border="0" cellpadding="0" cellspacing="0" style="height:111px;margin-top:-90px;top:50%;position: absolute;left:50%;margin-left:-120px;width:211px;">
      <caption>
        user login
      </caption>
      <tr>
        <td width="69">username：</td>
        <td width="142"><label for="textfield"></label>
        <input name="username" type="text" id="textfield" size="15" /></td>
      </tr>
      <tr>
        <td>password：</td>
        <td><label for="textfield2"></label>
        <input name="userpwd" type="password" id="textfield2" size="15" /></td>
      </tr>
      <tr>
        <td>role：</td>
        <td><label for="select">
          <select name="role" size="1">
            <option value="student">student</option>
            <option value="teacher">teacher</option>
          </select>
		  <a href='modifypassword.php'>change password</a>
        </label></td>

      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="button" id="button" value="submit" /> &nbsp;&nbsp;
          <input type="reset" name="button2" id="button2" value="reset" />
        </td>
      </tr>
    </table>
  </form>
</center>
</body>
</html>

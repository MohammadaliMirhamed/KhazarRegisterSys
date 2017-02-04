<?php include("../User_cheker.php");?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
session_start();
unset($_SESSION['UserName']);
unset($_SESSION['PassWord']);
unset($_SESSION['TableName']);
unset($_SESSION['Kind_User']);
session_destroy();
header("location:./Login.php");
?>
</body>
</html>
